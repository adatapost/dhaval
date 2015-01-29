<?php
var_dump($_POST);
$read = "";
$write = "";
$play = "";

 if(isset($_POST["read"])) {
     $read = $_POST["read"];
 }
if(isset($_POST["write"])) {
    $write = $_POST["write"];
}
if(isset($_POST["play"])) {
    $play = $_POST["play"];
}

?>
<form method="post">
    Hobbies:
      <br/><input type="checkbox" name="read"
                  <?php echo ($read == "read" ? "checked" : "") ?>
                  value="read"/> Read
       <br/><input type="checkbox" name="write"
        <?php echo ($write == "write" ? "checked" : "") ?>
                   value="write"/> Write
       <br/><input type="checkbox" name="play"
        <?php echo ($play == "play" ? "checked" : "") ?>
                   value="play"/> Play

    <input type="submit" name="cmd" value="Submit"/>
</form>