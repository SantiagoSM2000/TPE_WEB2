<?php
require_once './app/views/auth.view.php';
require_once './app/models/user.model.php';

class AuthController {
    private $view;
    private $model;
    
    public function __construct() {
        $this->model = new UserModel();
        $this->view = new AuthView();
    }

    public function showFormLogin() {
        $this->view->showFormLogin();
    }

    public function validateUser() {
        $user = $_POST['user'];
        $password = ($_POST['password']);      
    
        // verifico que el usuario existe y que las contraseñas son iguales
        if ($user && password_verify($password, $user->password)) {

            // inicio una session para este usuario - guardo datos en el arreglo de sesión
            session_start();
            $_SESSION['USER_ID'] = $user->id_user;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL . "listProduct");
            
        } else {
            // si los datos son incorrectos muestro el form con un error
           $this->view->showFormLogin("Usuario o contraseña incorrecta.");
        } 
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}
