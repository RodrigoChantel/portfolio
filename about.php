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
   <div class="row">
        <div class="col-md-12 text-white">
            <p>
                Tenho 27 anos e sou desenvolvedor back end. Além de meu foco principal, também possuo habilidades em desenvolvimento 
                front end. Tenho conhecimentos básicos em MySQL e SQL Server, e as tecnologias que utilizo incluem HTML, CSS, e 
                JavaScript, frequentemente com os frameworks Bootstrap e Laravel. Em breve, pretendo me tornar um programador full 
                stack, iniciando meu aprendizado com Vue.
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
   </div>


<?php
        echo $endMain; //Finaliza o main
        include('Layouts/themes/default/footer.php');
    echo $endSection; 
?>