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
                <li id='portfolio' class='nav-item'><a id='portfolioLink' class='nav-link text-white' href='index.php'><i class='fa-solid fa-bars'></i> Portfolio</a></li>
                <li id='about' class='nav-item'><a id='aboutLink' class='nav-link text-danger' href='about.php'><i class='fa-solid fa-user'></i> About me</a></li>
                <li id='contact' class='nav-item'><a id='contactLink' class='nav-link text-white' href='contact.php'><i class='fa-solid fa-envelope'></i> Contact</a></li>
            </ul>
        </div>
    </div>
    <div class='row'>
        <div class="col-md-12">
            about
        </div>
    </div>

<?php
        echo $endMain; //Finaliza o main
        include('Layouts/themes/default/footer.php');
    echo $endSection; 
?>