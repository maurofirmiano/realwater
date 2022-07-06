
<?php
if (!isset($_POST['envio'])) {
  echo "<script>
          window.location.href='index.html'
          </script>";
} else{

    $quant = $_POST['quant'];
    $valor = $_POST['valor'];

          $result_month = ($quant*$valor)*30;
          $result_year = $result_month*12;
          $result_fiveYear = $result_year*5;
          $result_tenYear = $result_fiveYear*2;
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/res.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
  <div class="container">

        <table class="table table-striped">
    <thead>
      <tr>
        <th>Custo</th>
        <th>Total Gasto</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Mensal</td>
        <td>€<?php echo $result_month?></td>

      </tr>
      <tr>
        <td>Anual</td>
        <td>€<?php echo $result_year?></td>

      </tr>
      <tr>
        <td>5 Anos</td>
        <td>€<?php echo $result_fiveYear?></td>

      </tr>
       <tr>
        <td>10 Anos</td>
        <td>€<?php echo $result_tenYear?></td>

      </tr>
    </tbody>
  </table>
</div>
</body>
</html>
