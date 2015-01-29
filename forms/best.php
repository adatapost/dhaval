<?php

/* Create necessary variables */
$empNo = 0;
$empName = "";
$message = "";
$cmd = "";

/* Determine whether a form is submitted using POST method */

if(isset( $_POST["cmd"] )) {
    $cmd   = $_POST["cmd"];
    $empNo = 0 + $_POST["empNo"]; // Integer
    $empName = $_POST["empName"]; // string

    if($cmd == "Add") {
        $message = "Add button - $empNo  $empName";
    }
    if($cmd == "Delete") {
        $message = "Delete button - $empNo  $empName";
    }
}
?>

<fieldset>
    <legend>Employee</legend>
    <form method="post">
        <p><label for="empNo">No</label>
            <input type="text" name="empNo"
                   value="<?php echo $empNo?>" id="empNo"/></p>
        <p><label for="empName">No</label>
            <input type="text" name="empName"
                   value="<?php echo $empName?>" id="empName"/></p>
        <p>
            <input type="submit" name="cmd" value="Add"/>
            <input type="submit" name="cmd" value="Delete"/>
        </p>
    </form>
    <p><?php echo $message?> </p>
</fieldset>