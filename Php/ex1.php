<?php
 $str = '10.10';
 $no = 0 + $str;
 var_dump($no);

 $str = "10 pen";

 $no = 0 + $str;  // 0.0 + $str
 var_dump($no);
 var_dump("10 pencils " + "10 pens");
var_dump("pencils 10 " + "pens 10"); // 0 + 0 = 0
var_dump("10 pencils " - "5 pencils");
?>