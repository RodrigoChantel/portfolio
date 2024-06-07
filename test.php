<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <link rel="stylesheet" href="Assets/CSS/bootstrap.css">
    <title>Rodrigo Chantel Hora</title>
    <style>
        #title{
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-black-custs">
    <?php include('Layouts/themes/default/header.php') ?>
    <main class="text-black py-2">
        <div class="calculator w-100 d-flex justify-content-center">
            <form class="form-control" style="width:300px;">
                <h1 class="fs-4">Caluladora</h1>
                <input class="form-control mb-2" type="text" id="display" disabled>
                <input class="form-control mb-2" name="numberOne" value="1" id="numberOne" type="number">
                <select class="form-control mb-2" name="operator" id="operator">
                    <option value="+">Somar</option>
                    <option value="*">Multiplicar</option>
                    <option value="/">Dividir</option>
                </select>
                <input class="form-control mb-2" name="numberTwo" id="numberTwo" type="number">
                <div id="calculate" class="btn btn-success">Calcular</div>
            </form>
        </div>
        <script>
            var calculate = document.getElementById('calculate');

            calculate.addEventListener('click', calcular);
            
            function calcular(){
                var numberOne = parseFloat(document.getElementById('numberOne').value);
                var operator = document.getElementById('operator').value;
                var numberTwo = parseFloat(document.getElementById('numberTwo').value);
                
                
                var result;

                switch (operator) {
                    case "+":
                        result = numberOne + numberTwo;
                        var display = document.getElementById('display').value = result;
                        break;
                    case "*":
                        result = numberOne * numberTwo;
                        var display = document.getElementById('display').value = result;
                        break;
                    case "/":
                        result = numberOne / numberTwo;
                        var display = document.getElementById('display').value = result;
                        break;
                    default:
                    var display = document.getElementById('display').value = "Algo deu errado";
                        break;
                }

                
            }
            
        </script>
    </main>
    <?php include('Layouts/themes/default/footer.php') ?>
</body>
<script src="Assets/JS/bootstrap.bundle.js"></script>
<script src="Assets/JS/fontawesome.js"></script>
<script src="Assets/JS/popper.min.js"></script>
</html>