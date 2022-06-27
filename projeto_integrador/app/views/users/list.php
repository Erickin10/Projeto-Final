<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

    <?php

        $data['titulo'];

    ?>

    </title>
</head>
<body>


    <h1>Usuários</h1>
    <a href="../views/users/create.php">Criar novo Usuario</a>

    <ul>
        <?php foreach($data['usuarios'] as $user): ?>

            <li>
                <?= $user['id'] ?>
                <?= $user['username'] ?>
                <?= $user['email'] ?>
                <?= $user['password'] ?>
                <?= $user['phone'] ?>
                <?= $user['adress'] ?>
                <?= $user['name'] ?>
                <a href="userController.php?action=findUserById&id=<?= $user['id'] ?>">Editar</a>
                <a href="userController.php?action=deleteUserById&id=<?= $user['id'] ?>">Excluir</a>
            </li>

        <?php endforeach; ?>
    </ul>
    
</body>
</html>