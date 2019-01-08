<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>코딩습관</title>
  </head>
  <body>
    <h1><a href="index.html"><img src="codinglogo.jpg" style="display: block; margin-left: auto; margin-right: auto; width: 40%;"></a></h1>
    <br>
    <br>
    <?php
    $title = [
      "<h1>HTML</h1>" => 1,
      "<h1>CSS</h1>" => 2,
      "<h1>JavaScript</h1>" => 3,
    ];
    $string = array(
      "안녕하세요 저는 html을 소개시켜줄겁니다...!<br>html은 아주 좋습니다. 지구상의 거의 모든 <strong>사이트</strong>들은 이 html로 만들어져 있습니다.
      <br><img src='HTML.jpg' width='50%''><br>그리고 <strong>html</strong>은 아주 쉽습니다. 프로그래밍 언어가 아니기 때문이죠<br>
      그렇습니다. 저는 이 사이트를 <u><strong>html</strong></u>로 만들고 있습니다...!<br>여러분도 열심히 연구해서 사이트를 만들어보길 바랍니다." => 1,
      "안녕하세요 저는 CCS를 소개시켜줄겁니다...!<br> 저는 ccs를 잘 모르나 앞으로 <u>배울겁니다.</u> CCS는 아주 좋은 언어인건 분명합니다.
      <br><img src='CSS.jpg' width='50%'><br>ccs는 아주 <strong>좋습니다!</strong> <strong><u>CCS</u></strong>는 <strong><u>html</u></strong>에 비해서 밀리지만 아주 많이 사용되고 있습니다!
      <br>CCS는 HTML과 함께 사용할수 있습니다! 여러분도 열심히 <strong><u>연구</u></strong>해서 사이트를 만드시길 바랍니다.!" => 2,
      "안녕하세요 저는 JavaScript를 소개시켜줄겁니다...! JavaScript는 효율적입니다!
      <br><img src='JavaScript.jpg' width='50%'><br> 하하하 <strong><u>javascript</u></strong>는 프로그래밍 언어입니다. 그리고 <strong>javascript</strong>는 아주 쉽습니다.
      <br>자바스크립트로는 아주 퀄리티 있는 사이트를 만들수 있지만 보안이 약합니다..! <br>여러분도 열심히 <u>연구</u>해서 사이트를 만들어보길 바랍니다." => 3,
    );
    echo array_search($_GET["name"],$title);
    ?>
    <br>
    <br>
    <br>
    <?php
    echo array_search($_GET["name"],$string);
    ?>
    <br>
    <br>
    <h1>이게 이문서의 끝입니다.</h1>
  </body>
</html>
