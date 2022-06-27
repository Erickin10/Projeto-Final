<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1> Cadastrar </h1>

    <form method="POST" action="../../controllers/userController.php?action=create">

        <label for="username">Nome de Usuario</label>
            <input type="text" name="username" id="username">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="password">Senha</label>
            <input type="text" name="password" id="password">
            <label for="usernname">Phone</label>
            <input type="tel" name="phone" id="phone">
            <label for="adress">Enderço</label>
            <input type="text" name="adress" id="adress">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">
            <input type="submit" value="cadastrar">


    </form>

</body>
</html>