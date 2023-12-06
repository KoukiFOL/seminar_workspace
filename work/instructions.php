<?php
//controller
require("../frames/urlpointer2.php");
require("../frames/header.php");
?>

<?php
if(isset($_GET['work'])){
    $work = $_GET['work'];
}

if(isset($_GET['instruction'])){
    $instruction = $_GET['instruction'];
}

require("../../work/{$work}/filepointer.php");
?>
<!-- view -->
<html>
    <body>
        <h2><?php $key ?></h2>

    </body>
</html>