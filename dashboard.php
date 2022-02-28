<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['roli'] != 'admin'){
    header("location:login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<header>

<nav class="navbar">
    <a href="Index.php" class="linkat">Home</a>
            <a href="home.php" class="linkat">Product</a>
            <a href="about-us.php" class="linkat">About us</a>
            <a href="contact-us.php" class="linkat">Contact us</a>
            <a href="logout.php" class="linkat">Log out</a>
    
</nav>

</header>

    <table border="1">
             <tr>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>SURNAME</th>
                 <th>EMAIL</th>
                 <th>USERNAME</th>
                 <th>PASSWORD</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
            include 'userRepository.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
               echo 
                "
                <tr>
                     <td>$user[Id]</td>
                     <td>$user[Name]</td>
                     <td>$user[Surname] </td>
                     <td>$user[Email] </td>
                     <td>$user[Username] </td>
                     <td>$user[Password] </td>
                     <td>$user[roli] </td>

                     <td><a href='edit.php?id=$user[Id]'>Edit</a> </td> 
                     <td><a href='delete.php?id=$user[Id]'>Delete</a></td>
                     
                </tr>
                ";
                }

             
             
             ?>
    </table>
</body>
</html>
<?php
//}

?>