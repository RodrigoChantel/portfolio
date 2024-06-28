<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Console</title>
</head>
<body>
    <div id="field"></div>
    <div id="field2"></div>

    <script>
        let show = document.getElementById('field');
        let show2 = document.getElementById('field2');
        const data = [
            {
                "nome": "Rodrigo",
                "idade": 27,
                "nascimento": "06/07/1996",
                "vivo": true,
                "habilidades": ["php", "hml", "css", "javascript"],
                "detalhes": {
                    "profissao": "desenvolvedor",
                    "empresa": "kristta"
                }
            }
        ];

        //Converter objeto para json
        const jsonData = JSON.stringify(data);

        show.innerHTML = jsonData;

        //Converter Json para objeto
        const objData = JSON.parse(jsonData);

        objData.map((pessoa) =>{
            console.log(pessoa.nome)
            show2.innerHTML = pessoa.nome;
        })
        
    </script>
</body>
</html>