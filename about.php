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
            <div class="bg-white rounded rounded-2 p-2" style="width: 500px; height: 400px;">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-end">
                        <span class="text-black">Digite um número entre 1 e 100</span>
                        <input class="rounded rounded-2" id="data" type="number" placeholder="Digite o número aqui">
                        <button class="rounded rounded-2" onclick="insertData()">Adicionar</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 pt-3">
                        <select class="w-50 rounded rounded-2" name="showData" id="showData" size="9">
                            
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
            function isNumber(n) {
                
            }

            function insertData() {
                var data = document.getElementById('data').value;
                var showData = document.getElementById('showData');
                var newOption  = document.createElement('option');

                if (isNumber(data.value) && !onList(data.value)) {
                    newOption.value = data;
                    newOption.text = data;

                    showData.add(newOption);
                }
            }
    </script>

<?php
        echo $endMain; //Finaliza o main
        include('Layouts/themes/default/footer.php');
    echo $endSection; 
?>