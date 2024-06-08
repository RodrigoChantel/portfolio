<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <link rel="stylesheet" href="Assets/CSS/bootstrap.css">
    <title>Rodrigo Chantel Hora</title>
</head>
<body class="bg-black-custom">
    <?php include('Layouts/themes/default/header.php') ?>
    <main>
        <div>
            <div class="container">
                <div class="row text-white py-5">
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <div>
                            <p class="fs-1 p-0 m-0">I'm Rodrigo Chantel</p>
                            <h1>Back-end Developer</h1>
                            <p class="w-75 d-flex justify-content-between">
                                <span class="ps-1"><span class="text-danger">0</span> projects</span>
                                <span class="ps-1"><span class="text-danger">27</span> y/o</span>
                                <span class="ps-1"><span class="text-danger">He/His</span> pronouns</span>
                            </p>
                            <p class="ps-1">Computer science student at the FAM university center</p>
                            <p class="ps-1 pt-3"><a class="btn btn-danger px-4" href="#">Hire me</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center d-flex justify-content-center align-items-center">
                        <img height="350" src="Assets/images/Rodrigo-profile-ex.webp" alt="">
                    </div>
                </div>
                <div class="row">
                    <hr class="text-secondary">
                    <div class="col-md-12">
                        <ul class="nav justify-content-center">
                            <li id="portfolio" class="nav-item"><a id="portfolioLink" class="nav-link text-white" href="#"><i class="fa-solid fa-bars"></i> Portfolio</a></li>
                            <li id="about" class="nav-item"><a id="aboutLink" class="nav-link text-white" href="#"><i class="fa-solid fa-user"></i> About me</a></li>
                            <li id="contact" class="nav-item"><a id="contactLink" class="nav-link text-white" href="#"><i class="fa-solid fa-envelope"></i> Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div id="contentAbout" class="col-md-12" style="display: none;">
                        <?php include_once('about.php'); ?>
                    </div>
                    <div id="contentPortfolio" class="col-md-12" style="display: none;">
                        <?php include_once('portfolio.php'); ?>
                    </div>
                    <div id="contentContact" class="col-md-12" style="display: none;">
                        <?php include_once('about.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('Layouts/themes/default/footer.php') ?>
</body>
<script src="Assets/JS/bootstrap.bundle.js"></script>
<script src="Assets/JS/fontawesome.js"></script>
<script src="Assets/JS/popper.min.js"></script>
<script src="Assets/Js/contents.js"></script>
</html>