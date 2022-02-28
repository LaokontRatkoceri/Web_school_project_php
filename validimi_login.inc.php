
<?php

// if(isset($_POST['loginBtn'])){
//    require 'dbh.inc.php';

//    $username = $_POST['username'];
//    $password = $_POST['password'];
//    //$roli=$_POST['roli'];

   

//  if(empty($_POST['username']) || empty($_POST['password'])){
//      echo "Fill all fields!";
//  }else{
     
//      $sql = "SELECT * FROM user WHERE username=?";

//      $stmt = mysqli_stmt_init($conn);

//    if(!mysqli_stmt_prepare($stmt, $sql)){
//        header("Location:index.php");

//        exit();
//    }else{
//        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
//        mysqli_stmt_execute($stmt);
//        $result = mysqli_stmt_get_result($stmt);
//        if($row = mysqli_fetch_assoc($result)){
//            $pwdCheck = password_verify($password, $row['password']);
//            if($pwdCheck == false){ 
//                header("Location:index.php");
//                echo 'gabim je o dost'; 

//                exit();
//            }else if($pwdCheck == true){
//             echo $username;
//             echo $password;

//              session_start();
//              $_SESSION['username']= $row['username'];
//              $_SESSION['password']= $row['password'];
//             //  $_SESSION['role']=$user['role'];
//             //  setcookie("username","$username",time()+(30*60));
//             //  setcookie("username","$username",time()+(60*60));
//             header("location:home.php");
//              exit();

//            }else{
//             header("location:index.php");
//              echo "aaaaa";
//              echo 'gabim je o dost'; 
//            }
//        }else{
//            header("location:index.php");

//              exit();
//        }
//       }
//   }
// }
    
// require_once "dbh.inc.php";
 
// // Define variables and initialize with empty values
// session_start();
 
// // Check if the user is already logged in, if yes then redirect him to welcome page
// if(isset($_SESSION["loginBtn"]) && $_SESSION["loginBtn"] === true){
//     header("location: welcome.php");
//     exit;
// }
 
 
// // Define variables and initialize with empty values
// $username  = "";
// $password  = "";
 
// // Processing form data when form is submitted
// if($_SERVER["REQUEST_METHOD"] == "POST"){
 
//     // Check if username is empty
//     if(empty(trim($_POST["username"]))){
//         $username_err = "Please enter username.";
//     } else{
//         $username = trim($_POST["username"]);
//     }
    
//     // Check if password is empty
//     if(empty(trim($_POST["password"]))){
//         $password_err = "Please enter your password.";
//     } else{
//         $password = trim($_POST["password"]);
//     }
    
//     // Validate credentials
//     if(empty($username_err) && empty($password_err)){
//         // Prepare a select statement
//         $sql = "SELECT * FROM user WHERE username = ?";
        
//         if($stmt = mysqli_prepare($link, $sql)){
//             // Bind variables to the prepared statement as parameters
//             mysqli_stmt_bind_param($stmt, "s", $param_username);
            
//             // Set parameters
//             $param_username = $username;
            
//             // Attempt to execute the prepared statement
//             if(mysqli_stmt_execute($stmt)){
//                 // Store result
//                 mysqli_stmt_store_result($stmt);
                
//                 // Check if username exists, if yes then verify password
//                 if(mysqli_stmt_num_rows($stmt) == 1){                    
//                     // Bind result variables
//                     mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
//                     if(mysqli_stmt_fetch($stmt)){
//                         if(password_verify($password, $hashed_password)){
//                             // Password is correct, so start a new session
//                             session_start();
                            
//                             $_SESSION['username']= $row['username'];
//                             $_SESSION['password']= $row['password'];
//                             $_SESSION['role']=$user['role'];
//                             setcookie("username","$username",time()+(30*60));
//                             setcookie("username","$username",time()+(60*60));
//                             header("location:home.php");
//                             exit();
//                             // Store data in session variables
//                             $_SESSION["loginBtn"] = true;
//                             $_SESSION["id"] = $id;
//                             $_SESSION["username"] = $username;                            
                            
//                             // Redirect user to welcome page
//                             header("location: welcome.php");
//                         } else{
//                             // Password is not valid, display a generic error message
//                             $login_err = "Invalid username or password.";
//                         }
//                     }
//                 } else{
//                     // Username doesn't exist, display a generic error message
//                     $login_err = "Invalid username or password.";
//                 }
//             } else{
//                 echo "Oops! Something went wrong. Please try again later.";
//             }

//             // Close statement
//             mysqli_stmt_close($stmt);
//         }
//     }
    
//     // Close connection
//     mysqli_close($link);
// }




//    $result = mysql_query($sql);


// session_start();
// require_once "dbh.inc.php";
// // if(isset($_SESSION['user_id'])!="") {
// // header("Location: home.php");
// // }
// if (isset($_POST['loginBtn'])) {
// $username = mysqli_real_escape_string($conn, $_POST['username']);
// $password = mysqli_real_escape_string($conn, $_POST['password']);
// $roli = mysqli_real_escape_string($conn, 'roli');
// $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '" . $username. "' and pass = '" . md5($password). "'");
// if(!empty($result)){
// if ($row = mysqli_fetch_array($result)) {

// $_SESSION['username'] = $row['username'];
// $_SESSION['password'] = $row['password'];
// $_SESSION['roli']= $row['roli'];
// header("Location: dashboard.php");
// } 
// }else {
// $error_message = "Incorrect Email or Password!!!";
// }
// }




  //  if(isset($_POST['loginBtn'])){
  //      if(empty($_POST['username']) || empty($_POST['password'])){
  //          echo "Fill all fields!";
  //      }else{
  //          $username = $_POST['username'];
  //          $password = $_POST['password'];

  //          include_once 'users.php';

  //          $i=0;
  //          foreach($users as $user){
  //              $i++;
  //              if($username == $user['username'] && $password == $user['password']){
  //                  echo $username;
  //                  echo $password;

  //                  session_start();
  //                  $_SESSION['username'] = $username;
  //                  $_SESSION['password'] = $password;
  //                  $_SESSION['role'] = $user['role'];
  //                  setcookie("username","$username",time()+(30*60));
  //                  setcookie("username","$username",time()-(60*60));
  //                  header("location:home.php");
  //                  exit();

  //              }else{
                   
  //                  if($i == sizeof($users)){
  //                   echo "Incorrect Username or Password!";
  //                   exit();
  //                  }
                   
  //              }
  //          }
  //      }
  //  }
 
  session_start();

  require 'users.php';
  
  if(isset($_POST['loginBtn'])){
      $username = $_POST['username']; // e merr vleren e userit - email
      $password = $_POST['password']; // e merr vleren e user - spassword
  
      if(validateEmptyData($username,$password)){
          header("Location: login.inc.php");
      }else if(validateData($username,$password)){
          header("Location: home.php");
      }
  
      else {
          header("Location: login.inc.php");
      }
  }
  
  function validateEmptyData($username,$password){
      if(empty($username) || empty($password)){ // empty e pranon ni string edhe e kontrollon a osht empty
          return true;
      }
  
      return false;
  }
  
  function validateData($username,$password){
  
      global $allUsers;
  
      foreach($allUsers as $user){
          if($user['username'] == $username && $user['password'] == $password){
             
              $_SESSION['roli'] = $user['role'];
              $_SESSION['emri'] = $user['name'];
              return true;
          }
          
      }
      return false;
      
  }


// if(isset($_POST['loginBtn'])){
//     if(empty($_POST['username']) || empty($_POST['password'])){
//         echo "Fill all fields!";
//     }else{
//       include 'dbh.inc.php';
//       include 'userRepository.php';
//         $username = $_POST['username'];
//         $password = $_POST['password'];
//         $userRepository = new UserRepository();
//         $user  = $userRepository->getAllUsers();
//         //$i=0;
//             if ($username  == $user['username'] && $password == $user['password']) {
//               echo $username;
//               echo $password;
//               //$i++;
              
//               session_start();
//               $_SESSION['username']=$username;
//               $_SESSION['password']=$password;
//               // $_SESSION['role']=$user['role'];
//               setcookie("username","$username",time()+(30*60));
//               setcookie("username","$username",time()+(60*60));
//               header("location:home.php");
//               exit();
            
//           }         

//    }
//   }
  
// session_start();


// include_once 'userRepository.php';

// if(isset($_POST['loginBtn'])){
//   $username = $_POST['username']; // e merr vleren e userit - email
//   $password = $_POST['password']; // e merr vleren e user - spassword

//   if(validateEmptyData($username,$password)){
//       header("Location: login.php");
//   }else if(validateData($username,$password)){
//       header("Location: home.php");
//   }

//   else {
//       header("Location: home.php");
//   }
// }

// function validateEmptyData($username,$password){
//   if(empty($username) || empty($password)){ // empty e pranon ni string edhe e kontrollon a osht empty
//       return true;
//   }

//   return false;
// }

// function validateData($username,$password){

//   global $getUser;

//   foreach($getUser as $user){
//       if($username['username'] == $username && $username['password'] == $password){
         
//           $_SESSION['roli'] = $user['role'];
//           $_SESSION['emri'] = $user['name'];
//           return true;
//       }
//   }
//   return false;
  


// }

?>
