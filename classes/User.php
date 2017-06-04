<?php
// This class handles the users and login functionality
class User {
    private $rights;
    private $firstName;
    private $lastName;
    private $password;
    private $userName;

// Function Verifies Login from login.php and sets the $_SESSION['username']  acordingly
    public function login($conn, $userName, $password){
      echo $userName;
      $sql = "SELECT * FROM users";
      $result = $conn->query($sql);
      if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
          //if ($userName == $row["userName"]){echo "User Name mactch";}
          //if (password_verify('mirus',$row["password"])){echo 'Heslo je na Pizdec';}
          if($userName == $row["userName"] && password_verify($password,$row["password"])){
          $_SESSION['valid'] = true;
          $_SESSION['timeout'] = time();
          $_SESSION['username'] = 'Admin';//$userName;

          echo 'You have entered valid use name and password';
          if (isset($_SESSION['status'])){
            unset($_SESSION['status']);
          }
          break;
        }
        if (!isset($_SESSION['username'])) {
          echo "Username or password dont match our records";
          $_SESSION['status']='badPswdOrUsr';
        }

      }
        } else {
          # code...
          echo "Ops. There is something wrong with the database!";
          $_SESSION['status']='dbNotConn';
        }

      }


    public function createUser($userName, $password, $firstName, $lastName, $rights) {
      //password hash function needed
      $values = $userName."','".$firstName."','".$lastName."','".$rights."','".$password;
      $arguments = "userName,firstName,lastName,rights,password";
      $bot = new Lilly;
      $bot->saveObject($this->type,$arguments,$values);
    }
    public function deleteUser($id){
      $bot = new Lilly;
      $bot->deleteObject($id,$this->type);
    }
    public function editUser() {

    }


}


?>
