<?php

namespace App; //usualy has the same name as the file/folder's name

include '../models/Model.php';

use Model\Table as ModelTable;

class Table {
    public static function get() {
        echo "App.Table.get() <br />";
    }
}

Table::get();
ModelTable::get();
?>
