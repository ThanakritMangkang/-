<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>โปรแกรมตารางสูตรคูณ</title>
  <!-- Import CDN Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

  <div class="container">
    <?php
    function generateMultiplicationTable($number)
    {
      echo "<table class='table table-bordered text-center'>";
      echo "<thead class='bg bg-warning'><tr><th colspan='2'>Multiplication Table for $number</th></tr></thead>";
      for ($i = 1; $i <= 12; $i++) {
        $result = $i * $number;
        echo "<tr><td>$i x $number</td><td>$result</td></tr>";
      }
      echo "</table>";
    }

    $start = 2; // กำหนดตัวแปรเริ่มต้น
    $end = 8; // กำหนดตัวแปรสิ้นสุด

    for ($num = $start; $num <= $end; $num++) {
      generateMultiplicationTable($num);
    }
    ?>
  </div>

  <!-- Import CDN JS Bootstrap -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>