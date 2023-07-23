<?php 
    require "models/user.model.php";

    class UserController {

        static public function register(){
            if (isset($_POST["register"])) {
                
                $table = "users";

                $data = array("name"=>$_POST["name"],
                             "email" => $_POST["email"],
                             "password"=>$_POST['password']
                );
                $response = UserModel::create($table,$data);

                return $response;
            }
        }

        static public function login() {
            if (isset($_POST["login"])) {
                $table = "users";
                $response = UserModel::getUser($table,$_POST['email']);
                if(!$response || ($response["password"] != $_POST["password"])){
                    echo '<script>
                        if(window.history.replaceState){
                            window.history.replaceState(null,null,window.location.href);
                        }
                    </script>';
                    echo '<div class="alert alert-danger">Email y contraseña no coinciden</div>';
                }else {
                    $_SESSION["validate"] = "ok";
                    header("Location:index.php?page=home");
                }
            }
            
        }
        static public function getUsers() {
            $table = "users";
            $response = UserModel::getUsers($table);
            return $response;
        }
    }

?>