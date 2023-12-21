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
        <h2>ワーク<?php echo($work); ?></h2>
        <h3>シナリオ</h3>
        <p><?php include("./{$work}/scenario.txt"); ?></p>
        <h3>指示書</h3>
        <p style="text-align:center;">役割名をクリックすると指示書に移動します。</p>
        <p style="text-align:center;color:red;">自分の役割以外の指示書は開かないでください。</p>
        <div class="instructions">

        <ul>
            <?php
            foreach($filelist as $key => $value){
                echo ("<li>");
                echo("<a href=");
                echo("../{$work}/instructions.php/?instructions={$value}");
                echo(">{$key}</a></li>");
            }
            ?>
        </ul>
        </div>
    </body>
</html>