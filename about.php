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
            <div class="bg-white rounded rounded-2 p-2" style="width: 550px; height: 400px;">
                <div class="row">
                    <div class="col-md-12">
                        <span class="text-black me-2">Digite um número entre 1 e 100</span>
                        <input class="rounded rounded-2" id="data" type="number" placeholder="Digite o número aqui">
                        <button class="rounded rounded-2" onclick="insertData()">Adicionar</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 pt-3">
                        <select class="w-100 rounded rounded-2" name="showData" id="showData" size="9">
                            
                        </select>
                        <div>
                            <button id="results" onclick="results()" class="btn btn-success">Finalizar</button>
                        </div>
                    </div>
                    <div id="showResults" class="col-md-6 pt-3">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

            let values = [];

            function isNumber(n) {
                if(Number(n) >= 1 && Number(n) <= 100){
                    return true;
                }else{
                    return false;
                }
            }

            function onList(n, l) {
                if(l.indexOf(Number(n)) != -1){
                    return true;
                }else{
                    return false;
                }
            }

            function insertData() {

                let data = document.getElementById('data');
                let showData = document.getElementById('showData');
                let newOption  = document.createElement('option');

                if (isNumber(data.value) && !onList(data.value, values)) {
                    values.push(Number(data.value));

                    newOption.text = 'Valor ' + data.value + ' foi adicionado';
                    newOption.value = values;

                    showData.add(newOption);
                }else{
                    window.alert('O valor é inválido ou já está na lista.');
                }

                data.value = '';
                data.focus();
            }

            // calcular resultados

            function results() {
                if(values.length == 0){
                    window.alert('Adicione valores antes de finalizar');
                }else{
                    const allNumbers = values;
                    let soma = 0;
                    let showResults = document.getElementById('showResults');
                    let totalLines = allNumbers.length;
                    let maior = values[0];
                    let menor = values[0];

                    for (let i = 0; i<allNumbers.length; i++){
                        soma +=allNumbers[i];
                    }

                    for(let pos in values){
                        if(values[pos] > maior)
                            maior = values[pos];
                        if(values[pos] < menor)
                            menor = values[pos];
                    }

                    showResults.innerHTML = '';
                    showResults.innerHTML += '<p>Existem ' + totalLines + ' valores adicionados</p>';
                    showResults.innerHTML += `<p>O maior valor é ${maior}</p>`;
                    showResults.innerHTML += `<p>O menor valor é ${menor}</p>`;
                    showResults.innerHTML += '<p>A soma total dos valores é ' + soma + '</p>';
                }

            }
    </script>


<?php
        echo $endMain; //Finaliza o main
        include('Layouts/themes/default/footer.php');
    echo $endSection; 
?>