<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula</title>

    <link rel="stylesheet" type="text/css" href="../css/formulario.css" />

<!-- https://www.w3schools.com/html/html_form_input_types.asp -->


</head>
<body id="page-top">
    <nav class="nav-bar" id="page-header">
        <h1 class="titulos-logo">Desenvolvimento web <br>2022.1</h1>
    </nav>
    <div class="titulos" id="page-sub-header">
        <h1>Matrícula</h1>
    </div>
    <div class="container" id="table">
        <form class="form titulos-form" action="">
            <label for="matricula">Matricula: </label>
            <input type="text" id="matricula" name="matricula" placeholder="Digite sua matricula">
            <br><br>
            <label for="matricula">Nome: </label>
            <input type="text" id="nome" name="nome" placeholder="Nome completo">
            <br><br>
            <label for="matricula">Data de nascimento: </label>
            <input type="date" id="data" name="data de nascimento" placeholder="Data de nascimento">
            <br><br>
            <label for="matricula">Telefone: </label>
            <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone" onkeypress="$(this).mask('(00) 9 0000-0000')">
            <br><br>
            <label for="matricula">Email: </label>
            <input type="email" id="email" name="email" placeholder="Email">
            <br><br>
            <label for="matricula">Senha: </label>
            <input type="password" id="password" name="senha" placeholder="Senha">
        </form>
        <a href="frequencia.php"><button class="btn-button">Salvar</button></a>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</body>
</html>