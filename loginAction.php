<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/cssfont-awesome.min.css">
    <title>Entrando...</title>
</head>
<body>
    <div class="w3-center">
    <?php 
        session_start();
        $email = $_POST['txtEmail'];
        $senha = $_POST['txtSenha'];
        require_once 'conexao.php';
        $sql = "SELECT * FROM Usuario WHERE email = '" . $email . "';";
        $resultado = $conexao->query($sql);
        $linha = mysqli_fetch_array($resultado);

        if($linha['senha'] == $senha){
            echo '<a href="principal.php"><h1 class="w3-button w3-center w3-teal">Seja Bem-Vindo! </h1></a>';
        } else {
            echo '<a href="index.php"><h1 class="w3-button w3-center w3-teal">Login Inválido! </h1></a>';
        }
        $conexao -> close();
    ?>
    </div>
</body>
</html>