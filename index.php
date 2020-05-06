<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FizzBuzz Game</title>
</head>
<body>
  <form id="number" method="post">
    <p>fizzNum<input type="text" name="fizz"></p>
    <p>buzzNum<input type="text" name="buzz"></p>
    <input type="submit" name="submit" value="実行">
  </form>
  出力
  <?php 

  if($_POST['submit']) {
    $fizz = $_POST['fizz'];
    $buzz = $_POST['buzz'];
    $match = "/^[0-9]+$/";
    echo preg_match($a, $fizz);
    if (preg_match($match, $fizz) === 1 && preg_match($match, $buzz) === 1) {
      $fizz = (int)$fizz;
      $buzz = (int)$buzz;
      for($i=1; $i < 100; $i++) {
        if($i % $fizz === 0 && $i % $buzz === 0) {
          echo '<br>' . $i . 'FizzBuzz';
        } elseif($i % $fizz === 0) {
            echo '<br>' . $i . 'Fizz';
          } elseif($i % $buzz === 0) {
              echo '<br>' . $i . 'Buzz';
            }
      } 
    } else {
       echo '整数を入力して下さい';
    }
  }
  ?>
</body>
</html>