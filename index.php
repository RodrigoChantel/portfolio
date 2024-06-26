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
                <li id='portfolio' class='nav-item'><a id='portfolioLink' class='nav-link text-white' href='portfolio.php'><i class='fa-solid fa-bars'></i> Portfolio</a></li>
                <li id='about' class='nav-item'><a id='aboutLink' class='nav-link text-danger' href='index.php'><i class='fa-solid fa-user'></i> About me</a></li>
                <li id='contact' class='nav-item'><a id='contactLink' class='nav-link text-white' href='contact.php'><i class='fa-solid fa-envelope'></i> Contact</a></li>
            </ul>
        </div>
    </div>
    
   <div class="row">
        <div class="col-md-12 text-white">
            <h5 class="my-3">SOBRE:</h5>
            <p>
                Sou desenvolvedor back end de 27 anos, com habilidades também em front end. No desenvolvimento back end, tenho conhecimentos
                em MySQL, SQL Server, PHP e Laravel. No desenvolvimento front end, utilizo HTML, CSS, JavaScript e Bootstrap. Atualmente, 
                estou aprendendo Vue para me tornar um programador full stack.
            </p>
            <p>
                Entre meus projetos pessoais que comprovam minha experiência com desenvolvimento, destaco o site e sistema da Kristta. 
                O que começou como um projeto de portfólio transformou-se em minha fonte de renda extra. Juntamente com dois sócios, 
                Wilkerson Berg e Weslei Santos, formamos a agência de marketing Kristta. Através do site www.kristta.com.br, oferecemos 
                serviços de criação de sites, pequenos sistemas, criação de identidade visual, estratégia de marketing geral e tráfego 
                pago, embora este último não seja nosso foco principal.
            </p>
            <p>
                Estou cursando Ciências da Computação, com previsão de término em agosto de 2025, e pretendo fazer uma pós-graduação 
                logo após concluir a graduação.
            </p>
            <p>
                Sou pai de um garoto chamado André, atualmente com dois anos e meio de idade, que é minha maior fonte de alegria, 
                junto com minha esposa.
            </p>
        </div>
        <div class="col-md-12 text-white">
            <h5 class="mb-3 mt-5">FORMAÇÃO ACADÊMICA:</h5>
            <p>
                FAM Oficial
                Bacharelado, Ciência da Computação · (agosto de 2021 - agosto de 2025)
            </p>

            <h5 class="mb-3 mt-5">CERTIFICADOS:</h5>
            <p>Html 5 e Css 3</p>
            <p>Javascript</p>
            <p>Introdução ao PHP</p>
            <p>POO PHP - Programação Orientada a Objetos com PHP</p>
            <p>PHP Framework - LARAVEL</p>
            <p>GitHub Tutorial for Beginners</p>

            <h5 class="mb-3 mt-5">EXPERIÊNCIA:</h5>
            <p>
                Atualmente, estou em busca da minha primeira oportunidade profissional na área de desenvolvimento. Embora eu ainda não tenha 
                experiência prática em empresas, estou extremamente motivado e comprometido a aplicar e expandir meus conhecimentos adquiridos 
                através de estudos e projetos pessoais. Estou ansioso para contribuir com minha paixão por tecnologia e aprendizado contínuo, 
                enquanto adquiro experiência valiosa em um ambiente profissional.
            </p>
        </div>
   </div>
   <div class="row">
        <div class="col-md-12 text-white">
            <h5 class="mb-3 mt-5">Habilidades</h5>
            <span>LINGUAGENS DE PROGRAMAÇÃO & FERRAMENTAS</span>
        </div>
        <div class="col-md-6 mb-5 mt-3 text-white d-flex justify-content-between">
            <a class="text-white fs-1" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="HTML 5"><i class="fa-brands fa-html5"></i></a>
            <a class="text-white fs-1" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="CSS 3"><i class="fa-brands fa-css3-alt"></i></a>
            <a class="text-white fs-1" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="JavaScript"><i class="fa-brands fa-js"></i></a>
            <a class="text-white fs-1" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Bootstrap"><i class="fa-brands fa-bootstrap"></i></a>
            <a class="text-white fs-1" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="PHP"><i class="fa-brands fa-php"></i></a>
            <a class="text-white fs-1" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Laravel"><i class="fa-brands fa-laravel"></i></a>
            <a class="text-white fs-1" href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="MySql"><i class="fa-solid fa-database"></i></a>
        </div>
    </div>


<?php
        echo $endMain; //Finaliza o main
        include('Layouts/themes/default/footer.php');
    echo $endSection; 
?>