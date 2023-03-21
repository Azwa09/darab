<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>SIFIR</h2>
    <form method="post">
      <label for="num">Nombor sifir:</label>
      <input type="number" name="num">
      <button type="submit" name="Kiraan">KIRAAN</button><br><br>
    </form>

    <?php
      if (isset($_POST['Kiraan'])) {
        $num = intval($_POST['num']);
        if ($num >= 1 && $num <= 100) {
          echo "<table>";
          for ($i = 1; $i <= 20; $i++) {
            $result = $i * $num;
            echo "<tr><td>{$i} x {$num}</td><td> = {$result}</td></tr>";
          }
          echo "</table>";
        } 
      }
    ?>
</body>
</html>