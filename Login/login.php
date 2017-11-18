<?php
   include("db.php");
   session_start();
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
      $myusername = mysqli_real_escape_string($conn,$_POST['Email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['Password']); 
      
      $sql = "SELECT * FROM login WHERE Email = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      echo $count;
      
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['pfj']=$_POST['Disease'];
         $_SESSION['login_user'] = $myusername;
         
         header("location: member.php");
      }

      else {


         $error = "Check Your Login Credential Yaar!";
       
       $_SESSION["error"]=$error;
         echo $_SESSION["error"];      
         header("location: index.php");
      }
   }
   
?>