<?php
//controller
require("../frames/urlpointer2.php");
require("../frames/header.php");
?>

<?php
if(isset($_GET['work'])){
    $work = $_GET['work'];
}

require("./{$work}/filepointer.php");
?>
<!-- view -->
<html>
    <body>
        <h2>ワーク1</h2>
        <h3>シナリオ</h3>
        <p><?php include("./{$work}/scenario.txt"); ?></p>
        <h3>指示書</h3>
        <p>役割名をクリックすると指示書に移動します。</p>
        <div class="instructions">
            <?php
            foreach($filelist as $key => $value){
                echo ("<p>");
                echo("<a href=");
                echo("../instructions.php/?work={$work}/?instructions={$value}");
                echo(">{$key}</a></p>");
            }
            ?>
            
        </div>
    </body>
</html>