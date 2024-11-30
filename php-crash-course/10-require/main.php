<?php 
// include 'config.php';
// require 'config.php';
// if we use include and the file doesn't exist, the script continues to run with warning
// with require, the application is just gonna crash at the require line
require_once 'config.php'; // to make sure require line only runs once despite the file being called few times (prevent unexpected effect of multiple calls)
// there is also include_once

echo "Database $dbHost:$dbUser";
