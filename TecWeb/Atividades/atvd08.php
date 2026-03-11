<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <title>Área do Terreno</title>
</head>
<body>
    <div>
    <form method="get">
        <div class=".container mt-5">
<div class="mb-3">
    <label for="largura" class="form-label">Largura</label>
    <input name="largura" type="text" class="form-control" id="largura">
</div>  
<div class="mb-3">
    <label for="comprimento" class="form-label">Comprimento</label>
    <input name="comprimento" type="text" class="form-control" id="comprimento">
</div>  
<div>  
<button type="submit" class="btn btn-primary">Calcular</button>
</div>

<?php 
if(isset($_GET['largura']) && isset($_GET['comprimento'])){
    $largura = $_GET['largura'];
    $comprimento = $_GET['comprimento'];
    $area = $largura * $comprimento;

    echo "<div class='py-2'><hr></div>";
    echo "<div class='alert alert-info mt-4'>
    Área do terreno: <strong>" . number_format($area,2) . " m²</strong>
    </div>";
}

?>

</form>
</body>
</html>
