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
        $list = array("","");
        while ($i <= 10) {
          if(file_exists("$i")) {
            array_push($list, "$i");
            $i = $i + 1;
          }
          else {
            break;
          }
        }
        $i = 3;
        while ($i < count($list)) {
          echo "<li><a href=\"program.php?id=$list[$i]\">$list[$i]</a></li>\n";
          $i = $i + 1;
        }
        echo "<h2>$_GET['id']</h2>"
        echo "<br>"
        file_get_contents("$_GET['id']");
      ?>
      <h2>이게 이문서의 끝입니다.</h2>
    </ol>
  </body>
</html>
