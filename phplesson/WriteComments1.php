<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<form method="GET">
  <input type="text" name="person">
  <button>Submit</button>
</form>

<?php

// comments one line

/*

Comments more then one line

*/

$name = $_GET['person'];
echo $name." Is a nice guy"


 ?>

  </body>
</html>
