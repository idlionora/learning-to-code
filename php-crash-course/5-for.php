<?php 

echo "Rocket launch countdown: \n";

for ($i = 10; $i > 0; $i--) {
    echo $i . "...";
    if (1 == $i) { 
        //it's more secure to compare the variable on the right side bc you might mistype == to = making the statement about assignment instead of comparisson.

        echo "Liftoff! 🚀\n";
    }
    sleep(1);
};
