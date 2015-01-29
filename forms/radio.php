<?php
  $gender = "";
 var_dump($_POST);
 // Always check radio and checkbox individually
  if(isset($_POST["gender"])) {
      $gender = $_POST["gender"];
  }
?>
<form method="post">
    Gender:
    Male <input type="radio"
                name="gender"
                <?php echo ($gender=="Male" ? "checked" : "") ?>
                value="Male"/>
    Female <input type="radio"
        <?php echo ($gender=="Female" ? "checked" : "") ?>
                  name="gender"
                  value="Female"/>
    <input type="submit" name="cmd" value="Submit"/>
</form>