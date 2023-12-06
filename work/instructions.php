<?php
if(isset($_GET['work'])){
    $work = $_GET['work'];
}

if(isset($_GET['instruction'])){
    $instruction = $_GET['instruction'];
}

?>

<?php
//controller
require("../frames/urlpointer2.php");
require("../frames/header.php");
require("../work/{$work}/filepointer.php");
?>




<!-- view -->
<html>
    <body>
        <h2><?php echo(array_search($instruction, $filelist)) ?></h2>
    </body>
</html>