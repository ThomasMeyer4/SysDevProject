<?php
    namespace App\controllers;

    class LoginController extends \App\core\Controller {
        
        function index() {
            header('location:'.BASE.'/Login/login');
        }

        function register(){ 
            if(isset($_POST['action'])){
                $staff = new \App\models\Staff();
                // Checks for unique username
                if ($staff->findByUsername($_POST['username']) != null) {
                    header('location:'.BASE.'/Login/register?error=Username Already Taken');
                    exit(1);
                }
                $staff->username = $_POST['username'];
                $staff->first_name = $_POST['first_name'];
                $staff->last_name = $_POST['last_name'];
                $staff->position = $_POST['position'];
                // Checks if the two password fields match
                if($_POST['password'] == $_POST['confirm_password']) {
                    $staff->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $staff->insert();
                    $staff = $staff->findByUsername($staff->username);
                    $_SESSION['username'] = $staff->username;
                    $_SESSION['staff_id'] = $staff->staff_id;
                } else
                    header('location:'.BASE.'/Login/register?error=Passwords Dont Match');
            } else {
                $this->view('Login/register');                 
            }
        }

        function login(){
            if(isset($_POST['action'])){
                $staff = new \App\models\Staff();
                $staff = $staff->findByUsername($_POST['username']);    
                if($staff != null && password_verify($_POST['password'], $staff->password_hash)) {
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['staff_id'] = $staff->staff_id;
                    header('location:'.BASE.'/Home/index');
                }else
                    header('location:'.BASE.'/Login/login?error=Username/Password Mismatch');
            }else{
                $this->view('Login/login');
            }
        }

        function home(){   
            // $this->view('Home/home');
            header('location:'.BASE.'/Home/index');
        }
    
        function logout(){
            session_destroy();
            header('location:'.BASE.'/Default/index');
        }        
    }
?>