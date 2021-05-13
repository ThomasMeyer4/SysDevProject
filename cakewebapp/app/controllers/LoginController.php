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
                    $client = new \App\models\Client();
                    $client->user_id = $_SESSION['user_id'];
                    $client->first_name = $_POST["first_name"];
                    $client->last_name = $_POST["last_name"];
                    $client->phone = $_POST["phone"];
                    $client->address = $_POST["address"];
                    $client->username = $_SESSION['username'];
                    //$client->password_hash = $_SESSION['password_hash'];
                    $client->insert();
                    header('location:'.BASE.'/Default/login');
                } else
                    header('location:'.BASE.'/Login/register?error=Passwords Dont Match');
            } else
                $this->view('Login/register');                
        }

        function registerStaff(){ 
            if(isset($_POST['action'])){
                $user = new \App\models\User();
                // Checks for unique username
                if ($user->findByUsername($_POST['username']) != null) {
                    header('location:'.BASE.'/Login/registerStaff?error=Username Already Taken');
                    exit(1);
                }
                $user->username = $_POST['username'];
                // Checks if the two password fields match
                if($_POST['password'] == $_POST['confirm_password']) {
                    $user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $user->is_staff = 1;
                    $user->insertStaff();
                    $user = $user->findByUsername($user->username);
                    $_SESSION['username'] = $user->username;
                    $_SESSION['user_id'] = $user->user_id;
                    $staff = new \App\models\Staff();
                    $staff->user_id = $_SESSION['user_id'];
                    $staff->first_name = $_POST["first_name"];
                    $staff->last_name = $_POST["last_name"];
                    $staff->position = $_POST["position"];
                    //$client->password_hash = $_SESSION['password_hash'];
                    $staff->insert();
                    header('location:'.BASE.'/Default/login');
                } else
                    header('location:'.BASE.'/Login/registerStaff?error=Passwords Dont Match');
            } else 
                $this->view('Login/registerStaff');                 
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
                    $_SESSION['is_staff'] = $user->is_staff;
                    header('location:'.BASE.'/Home/staffHomepage');
                } else if ($user != null && password_verify($_POST['password'], $user->password_hash) && $user->is_staff == 0) {
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['user_id'] = $user->user_id;
                    header('location:'.BASE.'/Client/homepage');
                } 
                else{
                    header('location:'.BASE.'/Login/login?error=Username/Password Mismatch');
                }
            }else{
                $this->view('Login/login');
            }
        }

        function createClient(){
            if(isset($_POST["action"])){
                $client = new \App\models\client();
                $client->user_id = $_SESSION['user_id'];
                $client->first_name = $_POST["first_name"];
                $client->last_name = $_POST["last_name"];
                $client->phone = $_POST["phone"];
                $client->address = $_POST["address"];
                $client->username = $_SESSION['username'];
                $client->insert();
                header("location:".BASE."/Default/login");
            }else{
                $this->view('Login/createProfile');
            }
        }

        function home(){   
            header('location:'.BASE.'/Home/staffHomepage');
        }
    
        function logout(){
            session_destroy();
            header('location:'.BASE.'/Website/homepage');
        }
        
        #[\App\core\LoginFilter]
        function changePassword() {
            if(isset($_POST['action'])){
                $user = new \App\models\User();
                $user = $user->findByUsername($_SESSION['username']);
                if($user != null && password_verify($_POST['current_password'], $user->password_hash)){
                    if ($_POST['new_password'] == $_POST['confirm_password'])
                    {
                        $user->password_hash = password_hash($_POST['confirm_password'],PASSWORD_DEFAULT);
                        $user->updatePassword();
                        header('location:'.BASE.'/Settings/index?valid=Password Changed');
                    }
                    else {
                        header('location:'.BASE.'/Login/changePassword?error=new/confirm password mismatch!');
                    }
                }else
                    header('location:'.BASE.'/Login/changePassword?error=Current password mismatch!');
            }else{
                $this->view('Login/changePassword');
            }
        }
    }
?>