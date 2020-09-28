<?php
  $link = mysqli_connect('localhost','root','rootroot','fav');
  $query = "SELECT * FROM epl";
  $result = mysqli_query($link, $query);
  $list ='';

  while ($row = mysqli_fetch_array($result)) {
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }

  $article = array(
    'title' => 'Introduce',
    'description' => 'Football Club of EPL'
  );

  $updated_link = '';

  if( isset($_GET['id'])) {
    $query = "SELECT * FROM epl WHERE id={$_GET['id']}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $article = array(
      'title' => $row['title'],
      'description' => $row['description']
    );
    $updated_link = '<a href="update.php?id'.$_GET['id'].'">update</a>';
  }

  $query = "SELECT * FROM player";
  $result = mysqli_query($link, $query);
  $select_form = '<select name="player_id">';
  while($row = mysqli_fetch_array($result)) {
    $select_form .= '<option value="'.$row['id'].'">'.$row['name'].'</option>';
  }
  $select_form .= '</select>';


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PremierLeague</title>
  </head>
  <body>
    <h1><a href="index.php">Football Club of EPL</a></h1>
    <ol><?= $list ?></ol>
    <form action="process_create.php" method="POST">
      <p><input type="text" name="title" placeholder="title"></p>
      <p><textarea name="description" placeholder="description"></textarea></p>
      <?= $select_form ?>
      <p><input type="submit"></p>
    </form>
  </body>
</html>
