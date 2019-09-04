<?php

session_start();
require_once('kan.php');

$kan1 = new Kan(200,100);

$kan1->hp = -30;
$kan1->kp = 1000;

echo 'KANYAROのHPは' . $kan1->hp . '<br>';
echo 'KANYAROのKPは' . $kan1->kp . '<br>';

$kan1->kankeri();
$kan1->typing();

$kan2 = new Kan(500,100);
echo 'KANYAROのHPは' . $kan2->hp . '<br>';

$_SESSION['test'] = $_POST['test'];

if(!empty($_POST['test']))
{
  $test = 1;
}
echo ($test);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<form class="" action="" method="post">
  <input type="button" name="test" value="testkun">
</form>

  </body>
</html>
