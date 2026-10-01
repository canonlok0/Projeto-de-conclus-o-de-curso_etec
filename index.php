<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/cssfont-awesome.min.css">
    <title></title>
</head>
<body style="margin-top: 10px;">
    <div class="w3-container w3-center">
        <img src="src/dinheirizeLogo.png" alt="Logo Dinheirize" class="w3-image w3-center" style="width: 300px;">
    </div>
    <div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-third w3-margin">
        <form class="w3-container " action="loginAction.php" method="post">
            <div class="w3-section">
                <label style="font-weight: bold;">Usuário</label>
                <input class="w3-input w3-border w3-marginbottom" type="text" placeholder="Digite o email" name="txtEmail" required>
                <label style="font-weight: bold;">Senha</label>
                <input class="w3-input w3-border" type="password" placeholder="Digite a Senha" name="txtSenha" required>
                <button class="w3-button w3-block w3-section w3-padding" style="background-color: #15BE01; color: white;" type="submit">Entrar</button>
                <p class="w3-center">Ou crie uma conta!</p>
                <a href="" class="w3-button w3-block w3-section w3-padding" style="background-color: #15BE01; color: white;">Criar conta</a>
            </div>
        </form>
        <br>
    </div>
</body>

</html>