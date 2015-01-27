<?php
 $no = 10;
 if(isset($no)) {
   echo "<br/>", $no;
 }
unset($no); // Delete
if(isset($no)) {
  echo "<br/>", $no;
} else {
  echo "<br/>Not";
}
?>


