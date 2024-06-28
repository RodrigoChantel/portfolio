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
                <li id='about' class='nav-item'><a id='aboutLink' class='nav-link text-white' href='index.php'><i class='fa-solid fa-user'></i> About me</a></li>
                <li id='contact' class='nav-item'><a id='contactLink' class='nav-link text-danger' href='contact.php'><i class='fa-solid fa-envelope'></i> Contact</a></li>
            </ul>
        </div>
    </div>
    <div class='row my-5'>
        <div class="col-md-6 text-white">
            <h3 class="mb-4">
                Podemos conversar
            </h3>
            <a target="__blank" class="btn btn-dark text-center d-flex justify-content-center align-items-center w-100" href="#">
                <span class="text-white" style="font-size: 40px;"><i class="fa-brands fa-whatsapp"></i></span>
                <h4 class="ms-4">Whatsapp</h4>
            </a>
            <a class="btn btn-dark text-center mt-3 d-flex justify-content-center align-items-center w-100" id="copy-text">
                <span class="text-white" style="font-size: 40px;"><i class="fa-solid fa-envelope"></i></span>
                <h4 class="ms-4">rodrigo.hora@kristta.com.br</h4>
            </a>
            <a target="__blank" class="btn btn-dark contact-link-btn mt-3 text-center d-flex justify-content-center align-items-center w-100" href="https://www.kristta.com.br/">
                <img src="Assets/images/icons/logowhite.png" alt="">
            </a>
        </div>
        <div class="col-md-6 custom-mt text-white">
            <h3 class="mb-3">Ou se preferir:</h3>
            <form class="" action="form-control">
                <div class="mb-3 text-white">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="email" name="name" placeholder="Informe seu nome">
                </div>
                <div class="mb-3 text-white">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
                </div>
                <div class="mb-3 text-white">
                    <div class="row">
                        <div class="col-md-7">
                            <label for="contact" class="form-label">Telefone para contato</label>
                            <input type="tel" maxlength="15" onkeyup="handlePhone(event)" class="form-control" id="contact" name="contact" placeholder="(99) 99999-9999">
                        </div>
                        <div class="col-md-5 d-flex align-items-end">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Whatsapp
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 text-white">
                    <label for="message" class="form-label">Mensagem</label>
                    <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                </div>
                <button class="btn btn-danger">Enviar</button>
            </form>
        </div>
    </div>

<?php
        echo $endMain; //Finaliza o main
        include('Layouts/themes/default/footer.php');
    echo $endSection; 
?>