<?php
include_once 'user.php';
include_once 'user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "Hay sesión";
    $user->setUser($userSession->getCurrentUser());
    include_once 'plantilla/pagina.php'; 
}else if(isset($_POST['usuario']) && isset($_POST['contrasena'])){
    //echo "Validación de login";

    $userForm = $_POST['usuario'];
    $passForm = $_POST['contrasena'];

    if($user->userExists($userForm, $passForm)){
        //echo "usuario validado";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        //header("Location: plantilla/pagina.php"); 
        include_once 'plantilla/pagina.php';

    }else{
        //echo "nombre de usuario y/o password incorrecto";
        $errorLogin = "Nombre de usuario y/o contraseña es incorrecto";
        //header("Location: vistas/login.php"); 
        include_once('plantilla/paginaLogin.php');
    }

}else{
    //echo "Login"; 
    include_once('plantilla/paginaLogin.php');

}

?>
