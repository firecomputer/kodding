<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>코딩습관-공지사항</title>
  </head>
  <body>
    <?php
    $onepointoneupdate = "코딩습관이 1.1업데이트를 했습니다! 주요 내용으론 최적화를 했습니다.<br> 그전엔 페이지 하나 만들려면 코드를 일일이 짜야했는데, 이번엔 손하나 까딱하면 페이지가 만들어집니다!<br>잘 될때까지 지켜봐야 할것 같습니다."
    $list = array(
    "0" => , "코딩습관 1.1 업데이트!"
    );
    $i = 0;
    while($i < count($list))
    if ($_GET['id'] == "onepointoneupdate")){
      echo "<h1>$list[0]</h1>"
    }
    else {
      echo "<h1>공지사항</h1>"
    }
    );
    
    ?>
    
    
  </body>
</html>
