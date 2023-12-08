<?php require('../../frames/urlpointer3.php'); ?>
<?php require("../../frames/header.php"); ?>
<?php require("./filepointer.php"); ?>

<?php
if(isset($_GET['instructions'])){
    $instructions = $_GET['instructions'];
}
?>

<?php
$titlet=false;
foreach($filelist as $key => $val){
    if($val == $instructions){
        $title = $key;
    }
}
?>

<body>
    <h2><?php echo($title); ?></h2>
    <p><?php include("./{$instructions}"); ?></p>
</body>