<?php
$students = array(
    array("roll"=>10, "name"=>"Raj", "eng"=>90, "sci"=>76, "guj"=>70),
    array("roll"=>20, "name"=>"Maj", "eng"=>50, "sci"=>96, "guj"=>76),
    array("roll"=>30, "name"=>"Yaj", "eng"=>34, "sci"=>88, "guj"=>98)
);
?>
<table>
  <?php
  foreach($students as $s) {
    ?>
    <tr>
      <td><?php echo $s["roll"]?></td>
      <td><?php echo $s["name"]?></td>
      <td><?php echo $s["eng"]?></td>
      <td><?php echo $s["sci"]?></td>
      <td><?php echo $s["guj"]?></td>
      <td><?php echo $s["eng"]+ $s["sci"] + $s["guj"] ?></td>
      <td><?php echo ($s["eng"]+ $s["sci"] + $s["guj"])/3 ?></td>
    </tr>
  <?php
  }
  ?>
</table>