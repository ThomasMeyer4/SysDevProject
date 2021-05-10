<?php
    namespace App\controllers;

    class LoginController extends \App\core\Controller {
        function index() {
            header('location:'.BASE.'/Login/login');
        }

        function register(){ 
            if(isset($_POST['action'])){
                $user = new \App\models\User();
                // Checks for unique username
                if ($user->findByUsername($_POST['username']) != null) {
                    header('location:'.BASE.'/Login/register?error=Username Already Taken');
                    exit(1);
                }
                $user->username = $_POST['username'];
                // Checks if the two password fields match
                if($_POST['password'] == $_POST['confirm_password']) {
                    $user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $user->insert();
                    $user = $user->findByUsername($user->username);
                    $_SESSION['username'] = $user->username;
                    $_SESSION['user_id'] = $user->user_id;
                } else
                    header('location:'.BASE.'/Login/register?error=Passwords Dont Match');
            } else {
                $this->view('Login/register');                 
            }
        }

        function login(){
            if(isset($_POST['action'])){
                $user = new \App\models\User();
                $user = $user->findByUsername($_POST['username']);
                if($user != null && password_verify($_POST['password'], $user->password_hash) && $user->is_staff == 1) {
                    $staff = new \App\models\Staff();
                    $staff = $staff->findByUserId($user->user_id); 
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['user_id'] = $user->user_id;
                    $_SESSION['staff_id'] = $staff->staff_id;
                    header('location:'.BASE.'/Home/staffHomepage');
                } else if ($user != null && password_verify($_POST['password'], $user->password_hash) && $user->is_staff == 0) {
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['user_id'] = $user->user_id;
                    header('location:'.BASE.'/Default/index');
                } else{
                    header('location:'.BASE.'/Login/login?error=Username/Password Mismatch');
                }
            }else{
                $this->view('Login/login');
            }
        }

        function home(){   
            // $this->view('Home/home');
            header('location:'.BASE.'/Home/staffHomepage');
        }
    
        function logout(){
            session_destroy();
            header('location:'.BASE.'/Default/index');
        }        
    }
?>