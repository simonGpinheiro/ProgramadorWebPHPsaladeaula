<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Senac - Curso de PHP</title>
    <script>
        function validar(){
            var msg = "";
            var flag = 0;

            if(f.nome.value == ""){
                flag = 1;
                msg = "Preencha o campo Login!";
            }
            if(f.cpf.value == ""){
                flag = 1;
                msg = msg + "<br>Preencha o campo Senha!";
            }

            if(flag == 0){
                document.getElementById("resposta").style.display = 'none';
                return true;
            } else {
                document.getElementById("resposta").style.display = 'block';
                document.getElementById("resposta").innerHTML = msg;
                return false;
            }
        }

        function mascara(i){ 
            //console.log(i);
            //console.log(i.value);
            var v = i.value;

    </script>
</head>

<body>
    <div>

        <h3 style="text-align: center;">
            Login
        </h3>
        <hr>
        <br>
        </section>
            <label class="form-label">Login:</label>
            <input type="text" name="login" class="form-control">
            
            <label class="form-label">Senha:</label>
            <input type="text" name="senha" oninput="mascara(this)" class="form-control">
            <br>
            <input type="submit" value="Enviar" class="btn btn-primary">
        
        </form>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></>
</body>

</html>