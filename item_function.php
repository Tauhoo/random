<?php
  include './config.php';
  $all_item = array_merge( ...$item_list );
  function make_array($key,$array){
    $result_array = [];
    $size = round(2*$key);
    while(sizeof($result_array) < $size){
      $result_array = array_merge($result_array,$array);
    }
    shuffle($result_array);
    return array_slice($result_array,0,$size-1);
  }
  function random(){
    global $item_list;
    $pre_random_item = array_map('make_array',array_keys($item_list),$item_list);
    $random_item = array_merge(...$pre_random_item);
    shuffle($random_item);
    return $random_item;
  }

?>
