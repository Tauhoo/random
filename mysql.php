<?php
require 'config.php';

$username = 'Sar';

function get_money() {
  //เอาจำนวน point จากฐานข้อมูล
  return 1000;
}

function reduce_money(){
  global $cost;
  //ลด point จากฐานข้อมูล
}

function is_online(){
  //check ว่า online หรือเปล่าจาก $username
  return true;
}

function is_point_enough(){
  global $cost;
  return get_money() >= $cost;
}
 ?>
