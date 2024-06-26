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
        <h2>teste</h2>
        <p id="ex"></p>

        <script>
            var x = 10;

            {
                let x = 2;
            }

            document.getElementById("ex").innerHTML = x;
        </script>
    </main>
    <?php include('Layouts/themes/default/footer.php') ?>
</body>
<script src="Assets/JS/bootstrap.bundle.js"></script>
<script src="Assets/JS/fontawesome.js"></script>
<script src="Assets/JS/popper.min.js"></script>
</html>