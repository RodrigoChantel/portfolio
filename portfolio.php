<?php
    include_once('Layouts/app.php');
    echo $section;
        include('Layouts/themes/default/header.php');
        include_once('Layouts/themes/default/main.php'); //Inclui arquivo do main
        echo $main;
?>
    <div class='row'>
        <hr class='text-secondary'>
        <div class='col-md-12'>
            <ul class='nav justify-content-center'>
                <li id='portfolio' class='nav-item'><a id='portfolioLink' class='nav-link text-danger' href='portfolio.php'><i class='fa-solid fa-bars'></i> Portfolio</a></li>
                <li id='about' class='nav-item'><a id='aboutLink' class='nav-link text-white' href='index.php'><i class='fa-solid fa-user'></i> About me</a></li>
                <li id='contact' class='nav-item'><a id='contactLink' class='nav-link text-white' href='contact.php'><i class='fa-solid fa-envelope'></i> Contact</a></li>
            </ul>
        </div>
    </div>
    <div class='row mt-3'>
        <h4 class="text-white">Websites</h4>
        <div class="col-md-12 py-3 d-flex flex-wrap justify-content-center justify-content-xxl-start">
            <div class="card bg-dark text-white m-2 shadow" style="width: 18rem;">
                <img src="Assets/images/projects/bgkristta.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Website Kristta</h5>
                    <p class="card-text">Meu projeto principal em andamento, com a participação de mais dois sícios</p>
                    <div class="mb-3">
                        <a class="text-white" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="HTML 5"><i class="fa-brands fa-html5"></i></a>
                        <a class="text-white" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="CSS 3"><i class="fa-brands fa-css3-alt"></i></a>
                        <a class="text-white" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="JavaScript"><i class="fa-brands fa-js"></i></a>
                        <a class="text-white" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Bootstrap"><i class="fa-brands fa-bootstrap"></i></a>
                        <a class="text-white" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="PHP"><i class="fa-brands fa-php"></i></a>
                        <!--<a class="text-white" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Laravel"><i class="fa-brands fa-laravel"></i></a>-->
                        <!--<a class="text-white" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="MySql"><i class="fa-solid fa-database"></i></a>-->
                    </div>
                    <div class="w-100 d-flex justify-content-center align-items-center">
                        <a href="#" class="btn btn-primary">Ver projeto</a>
                        <a href="https://www.kristta.com.br" class="fs-3 ms-3 text-white"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class='row'>
        <h4 class="text-white">Sistemas</h4>
        <div class="col-md-12 py-3 d-flex flex-wrap justify-content-center justify-content-xxl-start">
        <div class="card bg-dark text-white m-2 shadow" style="width: 18rem;">
                <img src="Assets/images/projects/sistemakristta.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sistema MVC Kristta</h5>
                    <p class="card-text">Meu projeto principal em andamento, com a participação de mais dois sícios</p>
                    <div class="mb-3">
                        <a class="text-white" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="HTML 5"><i class="fa-brands fa-html5"></i></a>
                        <a class="text-white" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="CSS 3"><i class="fa-brands fa-css3-alt"></i></a>
                        <a class="text-white" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="JavaScript"><i class="fa-brands fa-js"></i></a>
                        <!--<a class="text-white" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Bootstrap"><i class="fa-brands fa-bootstrap"></i></a>-->
                        <a class="text-white" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="PHP"><i class="fa-brands fa-php"></i></a>
                        <a class="text-white" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Laravel"><i class="fa-brands fa-laravel"></i></a>
                        <a class="text-white" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="MySql"><i class="fa-solid fa-database"></i></a>
                    </div>
                    <div class="w-100 d-flex justify-content-center align-items-center">
                        <a href="#" class="btn btn-primary">Ver projeto</a>
                        <a href="https://www.kristta.com.br" class="fs-3 ms-3 text-white"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> 

<?php
        echo $endMain; //Finaliza o main
        include('Layouts/themes/default/footer.php');
    echo $endSection; 
?>