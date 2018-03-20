<?php
  require './mysql.php';
  require './rcon.php';
  require './item_function.php';
  $randomed_item = random();
  $is_random = !empty($_POST['random_button']) && is_point_enough() && is_online();

  if($is_random){
    reduce_money();
    send_item($randomed_item[190]['command']);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <title>random</title>
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?php
      if (!$is_random) {
        echo "<div class='notice'>";
        if(!is_point_enough()){
          echo "<div class='is_point_enough border-circular font'>Your point isn,t enough.</div>";
        }
        if(!is_online()){
          echo "<div class='is_online border-circular font'>You are offline.</div>";
        }
        echo "</div>";
      }

      if($is_random){
        echo '<div class="reward">';
          echo '<img src="'.$randomed_item[190]['img_path'].'" alt="">';
        echo '</div>';
        echo '<div class="reward-background">';
        echo '</div>';
      }
    ?>
    <div class='side-bar'>
      <span class="topic" >Random</span>
      <br>
      <br>
      <h1 class="detail">
        If you are looking for new weapon, this web site is your solution.
      </h1>
      <br>
      <h1 class="detail">How to use this website</h1>
      <h1 class="detail">- online in game.</h1>
      <h1 class="detail">- check your point.</h1>
      <h1 class="detail">- click random.</h1>
      <h1 class="detail">- get your reward.</h1>
      <div class="profile border-circular">
        <?php
          echo "<img class='picture' src='https://minotar.net/avatar/".$username."'></img>";
        ?>
        <span class="profile-detail">
          <?php
            echo '<div>'.$username.'</div>';
            echo '<div>point : '.get_money().'</div>';
          ?>
        </span>
      </div>
      <form method="post">
        <button type="submit" name="random_button" value="activate" class="random-button font border-circular">Random !!</button>
      </form>
    </div>
    <div class="body">
      <div class="roulette border-circular">
        <div class="line"></div>
        <?php
          $amount = 200;
          echo "<div class='item-container' style='width: ".($amount*17)."vw;' >";
          foreach($randomed_item as $index => $item){
            $url = "'".$item['img_path']."'";
            echo '<div style="background-image: url('.$url.')" class="border-circular item-'.$index.'"></div>';
          }
          echo "</div>";
        ?>
      </div>
      <div class="item-list border-circular">
        <h1 class="topic">Item List</h1>
        <div class="item-list-container">
        <?php
          $itemAmount = sizeof($all_item);
          foreach ($all_item as $item) {
            $url = $item['img_path'];
            echo '<div style="background-image: url('.$url.')" class="border-circular"></div>';
          }
        ?>
        </div>
      </div>
    </div>
    <div class=""></div>
    <?php
      if($is_random){
        echo '<script src="./script.js" charset="utf-8"></script>';
      }else{
        echo '<script src="./general.js" charset="utf-8"></script>';
      }
     ?>
  </body>
</html>
