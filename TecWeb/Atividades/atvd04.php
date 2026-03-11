<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <title>Simulador de desconto</title>
</head>
<body>
    <div>
    <form method="get">
        <div class=".container mt-5">
<div class="mb-3">
    <label for="n1" class="form-label">Nota 1</label>
    <input name="n1" type="text" class="form-control" id="n1">
</div>  
<select name="desconto" class="form-select" aria-label="Default select example">
  <option selected>Qual o valor do desconto?</option>
  <option value="5">5%</option>
  <option value="10">10%</option>
  <option value="15">15%</option>
</select>
<div>  
<button type="submit" class="btn btn-primary">Calcular</button>
</div>

<?php 
if(isset($_GET['n1']) && isset($_GET['desconto'])){
    $n1 = $_GET['n1'];
    $desconto = $_GET['desconto'] / 100;

    $resultado = $n1 - ($n1 * $desconto);

    echo "<div class='py-2'><hr></div>";
    echo "<div class='alert alert-info mt-4'>
    Desconto embutido: <strong>" . number_format($resultado,2,",",".") . "</strong>
    </div>";
}
?>

</form>
</body>
</html>
