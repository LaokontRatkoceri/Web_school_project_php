<?php 
include_once 'databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }

    private $user;

    function insertUser($user){

        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = $user->getPassword();
        $roli = $user->getRoli();

        $sql = "INSERT INTO user (id,name,surname,email,username,password,roli) VALUES (?,?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

    $statement->execute([$id,$name,$surname,$email,$username,$password,$roli]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id){  
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id,$name,$surname,$email,$username,$password){
         $conn = $this->connection;

         $sql = "UPDATE user SET name=?, surname=?, email=?, username=?, password=? WHERE id=?";

         $statement = $conn->prepare($sql); 

         $statement->execute([$name,$surname,$email,$username,$password,$id]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
    
    function getUser($username, $password){
        $conn = $this->connection;

        $sql = "SELECT * FROM USER WHERE username='$username'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();
        
        if($user && $user['Password'] === $password) {
            $this->user = $user;
            return $user;
        }
        else return false;
    } 

    function isAdmin() {
        if($this->user) {
            return $this->user['roli'] == 'admin';
        } 
        return false;
    }
}

//  $userRepo = new UserRepository;

//  $userRepo->updateUser('1111','SSS','SSS','SSS','SSS','SSS');

?>