<?php 
$todoList = file_exists('todoList.txt') ? unserialize(file_get_contents('todoList.txt')) : [];
function saveListAndReset($listData) {
    file_put_contents('todoList.txt', serialize($listData));
    header("location:ToDoApp.php");
}

if (isset($_POST['todo'])) {
    $todoList[] = [
        'todo'=> $_POST['todo'],
        'status' => 0
    ];
    file_put_contents('todoList.txt', serialize($todoList));
    // header("location:ToDoApp.php"); //page redirect
    //but it's autoreload???
}

if (isset($_GET['status'])) {
    $todoList[$_GET['key']]['status'] = $_GET['status'];
    saveListAndReset($todoList);
}

if (isset($_GET['delete'])) {
    unset($todoList[$_GET['key']]);
    saveListAndReset($todoList);
}

if (!empty($todoList)) {
    !empty($_POST['todo'])?print_r($_POST['todo']):null;
    echo "<br>";
    print_r($todoList);
    echo "<br><br>";
} else {
    echo "TodoList is empty!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
</head>
<body>
    <h1>Todo App</h1>
    <form action='' method='post'>
        <label>Apa kegiatan mu hari ini?</label><br>
        <input type="text" name="todo">
        <button type="submit">Simpan</button>
    </form>

    <ul>
        <?php foreach($todoList as $key => $item) : ?>
        <li>
            <input type="checkbox" name="todo" 
            onclick="window.location.href='ToDoApp.php?key=<?php echo $key;?>&status=<?php echo $todoList[$key]['status']==0 ? '1' : '0';?>'" 
            <?php if($todoList[$key]['status']==1) echo "checked";?>>
            <label><?php 
                echo $todoList[$key]['status']==0 ? 
                $item["todo"] : 
                '<s>' . $item["todo"] . '</s>'; ?>
            </label>
            <a href="ToDoApp.php?key=<?php echo $key;?>&delete=1"
            onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')">hapus</a>
        </li>
        <?php endforeach; //can also use curly brace?>
    </ul>
</body>
</html>
