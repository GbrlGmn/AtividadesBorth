<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <title>Média das Notas</title>
</head>
<body>
    <div>
    <form method="get">
        <div class=".container mt-5">
<div class="mb-3">
    <label for="n1" class="form-label">Nota 1</label>
    <input name="n1" type="text" class="form-control" id="n1">
</div>  
<div class="mb-3">
    <label for="n2" class="form-label">Nota 2</label>
    <input name="n2" type="text" class="form-control" id="n2">
</div>  
<div class="mb-3">
    <label for="n3" class="form-label">Nota 3</label>
    <input name="n3" type="text" class="form-control" id="n3">
</div>  
<button type="submit" class="btn btn-primary">Calcular</button>
</div>

<?php 
    if(isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['n3'])){
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $n3 = $_GET['n3'];
        $resultado = ($n1 + $n2 + $n3) / 3 ; 

        echo "<div class='py-2'><hr></div>";
        echo "<div class='alert alert-info mt-4'>Resultado da media: <strong>" . number_format($resultado) . "</strong></div>";
    }
?>
</div>
</form>
</body>
</html>
