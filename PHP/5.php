<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo htmlspecialchars('<script>alert(1);</script>');
    ?>
  </body>
</html>

<!-- 첫번째 시도
  <body>
    <a href="http://opentutorials.org/course/1">생활코딩</a>
  </body> -->

<!-- 두번째 시도
  <body>
    &lt;a&gt;
  </body> -->

<!-- 세번째 시도
<body>
  <?php
  // echo htmlspecialchars('<a href="http://opentutorials.org/course/1">생활코딩</a>');
  ?>
</body> -->
