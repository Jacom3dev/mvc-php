<?php 
    require_once "database.php";
    
    class UserModel {


        static public function create($table,$data){
            $statement = Database::connect()->prepare("INSERT INTO $table(name,email,password) VALUES (:name,:email,:password)");
            $statement->bindParam(":name",$data["name"],PDO::PARAM_STR);
            $statement->bindParam(":email",$data["email"],PDO::PARAM_STR);
            $statement->bindParam(":password",$data["password"],PDO::PARAM_STR);
            
            if ($statement->execute()) {
              return "ok";
            }else {
                print_r(Database::connect()->errorInfo());
            }
        }

        static public function getUser($table, $email) {
            $statement = Database::connect()->prepare("SELECT * FROM $table WHERE email = :email");
            $statement->bindParam(":email", $email, PDO::PARAM_STR);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        
        static public function getUsers($table){
            $statement = Database::connect()->prepare("SELECT *,DATE_FORMAT(created_at,'%d/%m/%Y') as created_at FROM $table ORDER BY id DESC");
            $statement->execute();
            return  $statement->fetchAll(PDO::FETCH_ASSOC);
        }


    }

?>