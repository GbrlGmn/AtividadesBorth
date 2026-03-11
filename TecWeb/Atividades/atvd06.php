<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <title>Verificador de maior idade</title>
</head>
<body>
    <div>
    <form method="get">
        <div class=".container mt-5">
<div class="mb-3">
    <label for="n1" class="form-label">Qual sua idade</label>
    <input name="n1" type="text" class="form-control" id="n1">
</div>  


<div>  
<button type="submit" class="btn btn-primary">Calcular</button>
</div>

<?php 
if(isset($_GET['n1'])){
    $n1 = $_GET['n1'];
    if($n1 < 16){
        $resultado = "Menor de idade";
    } else {
        $resultado = "Maior de idade";
    }

    echo "<div class='py-2'><hr></div>";
    echo "<div class='alert alert-info mt-4'>
    Resultado: <strong>" . $resultado . "</strong>
    </div>";
}
?>

</form>
</body>
</html>
