<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <h3 class="text-center mb-4 text-primary">Calcular IMC</h3>
                
                <form method="GET">
                    <div class="mb-3">
                        <label class="form-label">Altura</label>
                        <input type="number" name="altura" class="form-control" placeholder="Ex: 10" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Peso</label>
                        <input type="number" name="peso" class="form-control" placeholder="Ex: 5" required>
                    </div>
                    <button type="submit" name="calcular" class="btn btn-primary w-100">Calcular Agora</button>
                </form>

                <?php
                if (isset($_GET['calcular'])) {
                    $altura = $_GET['altura'];
                    $peso = $_GET['peso'];
                    

                    // que gambiarra é essa? kkkk , mas é pra evitar que o usuário digite a altura em centímetros, e o sistema calcular um IMC absurdo
                    if ($altura > 3) {
                        $altura = $altura / 100;
                        }
                    $IMC = $peso / ($altura * $altura) ;
                    echo "<div class='py-2'><hr></div>";
                    echo "<div class='alert alert-info mt-4'>o seu IMC é: <strong>" . number_format($IMC, 0) . "</strong></div>";
                    
                    $altura = 0;
                    $peso = 0;
                }
                ?>
                
            </div>
        </div>
    </div>
</div>

</body>
</html>