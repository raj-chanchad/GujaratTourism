<?php
    include 'dbconnect.php';
    include_once 'login.html'; 
  

       if(isset($_POST['submit'])){
        
        $email = $_POST["mail"];
        $secque = $_POST["secque"]; 
        $secans = $_POST["secans"];
        

        $sql = "select *from register where email = '$email' and securityquestion = '$secque' and securityanswer='$secans'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);

        
        if($count == 1){
            $ans = $row["password"] ;
            echo "<script>alert('password is :- $ans')</script>";  
        }  
        else{  
            echo "<script>alert ('Please enter valid details')</script>";
        }  
       }
    
    ?>