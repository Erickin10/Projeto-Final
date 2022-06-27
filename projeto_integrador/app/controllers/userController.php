<?php

    // Exibe os erros em uma página web (DEVERIA ESTAR AQUI?).
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once __DIR__ . "/../repository/UserRepository.php";
    require_once __DIR__ . "/Controller.php";

    function create(){

        $user = new UserModel();
        $user->setUsername($_POST["username"]);
        $user->setEmail($_POST["email"]);
        $user->setPassword($_POST["password"]);
        $user->setPhone($_POST["phone"]);
        $user->setAdress($_POST["adress"]);
        $user->setName($_POST["name"]);

        $userRepository = new UserRepository();
        $id = $userRepository->create($user);
        
        header("Location: userController.php?action=findAll");

    }

    function update(){

        $user = new UserModel();
        $user->setId($_POST["id"]);       
        $user->setUsername($_POST["username"]);
        $user->setEmail($_POST["email"]);
        $user->setPassword($_POST["password"]);
        $user->setPhone($_POST["phone"]);
        $user->setAdress($_POST["adress"]);
        $user->setName($_POST["name"]);

        $userRepository = new UserRepository();
        $id = $userRepository->update($user);

        header("Location: userController.php?action=findAll");

    }

    function findAll()
    {
        $userRepository = new UserRepository();

        $usuarios = $userRepository->findAll();

        $data['titulo'] = "listar usuarios";
        $data['usuarios'] = $usuarios;

        Controller::loadView("users/list.php", $data);
    }

    function findUserById()
    {
        $idParam = $_GET['id'];

        $userRepository = new UserRepository();
        $usuario = $userRepository->findUserById($idParam);

        $data['usuario'] = $usuario;
        Controller::loadView("users/edit.php", $data);
    }

    function deleteUserById()
    {
        $idParam = $_GET['id'];
        $userRepository = new UserRepository();    

        $userRepository->deleteById($idParam);

        header("Location: userController.php?action=findAll");
    }

    function preventDefault() {
        print "call preventDefault()";
        //Controller::loadView("users/list.php", $data);
    }
