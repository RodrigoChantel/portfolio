<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <link rel="stylesheet" href="Assets/CSS/bootstrap.css">
    <title>Rodrigo Chantel Hora</title>
    <style>
        #title {
            cursor: pointer;
        }
        .confirm-mid-box {
            display: none;
            width: 300px;
            background-color: white;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border-radius: 30px;
            color: black;
            text-align: center;
            padding: 20px;
        }
        .confirm-mid-box img {
            width: 200px;
            margin: auto;
            display: block;
        }
    </style>
</head>
<body class="bg-black-custs">
    <?php include('Layouts/themes/default/header.php') ?>
    <main class="text-black py-2">
        <div id="confirmPaymentBox" class="confirm-mid-box">
            <h1>Pagamento confirmado!</h1>
            <img id="confirm-gif" src="Assets/images/tete/7efs.gif" alt="confir payment">
            <div class="d-none" id="img-link-payment-confirm">{{ asset('img/admin2/others/7efs-static.png') }}</div>
            <span>Você será redirecionado...</span>
        </div>
    </main>
    <?php include('Layouts/themes/default/footer.php') ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="Assets/JS/bootstrap.bundle.js"></script>
    <script src="Assets/JS/fontawesome.js"></script>
    <script src="Assets/JS/popper.min.js"></script>
    <script>
        if(1 === 1) {
            document.addEventListener('DOMContentLoaded', function() {

                document.getElementById('confirmPaymentBox').style.display = 'block';

                setTimeout(function() {
                    window.location.href = 'index.php';
                }, 3000);

            });
        }
    </script>
</body>
</html>
