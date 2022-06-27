<?php

    $id = $data['usuario']->getId();
    $username = $data['usuario']->getUsername();
    $email = $data['usuario']->getEmail();
    $password = $data['usuario']->getPassword();
    $phone = $data['usuario']->getPhone();
    $adress = $data['usuario']->getAdress();
    $name = $data['usuario']->getName();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="userController.php?action=update">

    <label for="username">Nome de Usuario</label>
        <input type="text" name="username" id="username" value="<?= $username ?>" required>
    
    <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $email ?>" required>

    <label for="password">Senha</label>
        <input type="text" name="password" id="password" value="<?= $password ?>" required>

    <label for="phone">Phone</label>
        <input type="tel" name="phone" id="phone" value="<?= $phone ?>" required>

    <label for="adress">Endereço</label>
        <input type="text" name="adress" id="adress" value="<?= $adress ?>" required>

    <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="<?= $name ?>" required>

        <input type="submit" value="cadastrar">
        <input type="hidden" name="id" value="<?= $id ?>">

</body>
</html>