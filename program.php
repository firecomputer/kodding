<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index.html"><img src="codinglogo.jpg" width="40%"></a></h1>
    <br>
    <ol>
      <?php
        $list = scandir('./data');
        $i = 0;
        while ($i < count($list)) {
          echo "<li><a href=\"program.php?id=$list[$i]\">$list[$i]</a></li>\n";
          $i = $i + 1;
        }
        echo "<h2>$_GET['id']</h2>"
      ?>
      <h2>이게 이문서의 끝입니다.</h2>
    </ol>
  </body>
</html>
