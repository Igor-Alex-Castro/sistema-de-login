<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
<a href="home.php">Voltar</a>
    <div class="tela-login">
    
        <div class="box">
       
            <h1>Login</h1>
            <form action="TesteLogin.php" method="POST">
                <input type="text" name="email" placeholder="email">
                <br>
                <br>
                <input type="password" name="senha" placeholder="senha">
                <br>
                <br>
                <div class="box-button">
                   <input class="btn" type="submit" name="submit" value="entrar">
                </div>
            </form>
        </div>
    </div>
</body>

</html>