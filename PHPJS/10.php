<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>JavaScript</h1>
    <script>
      list = new Array("one", "two", 'three');
      document.write(list[0]);
      document.write(list[1]);
      document.write(list[2]);
      document.write(list.length);
    </script>

    <h2>PHP</h2>
    <?php
      $list = array("one", "two", "three");
      echo $list[0];
      echo $list[1];
      echo $list[2];
      echo count($list);
    ?>
  </body>
</html>
