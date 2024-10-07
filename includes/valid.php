<?php
    if(isset($_SESSION["authentication"]) && $_SESSION['register'] == true && isset($_SESSION["email"])){
        if($_SESSION["authentication"] == true){
            if($_SESSION["usertype"] == 0){
                header('Location:index.php');
            }else if($_SESSION["usertype"] == 1){
                header('Location:admin/index.php');
            }else{
                header('location:logout.php');
            }
        }
    }else{
        header('location:logout.php');
    }
    
    if (isset($_POST["btnVerify"])){
        $num1 = $_POST["num1"]; 
        $num2 = $_POST["num2"]; 
        $num3 = $_POST["num3"]; 
        $num4 = $_POST["num4"]; 
        $num5 = $_POST["num5"]; 
        $num6 = $_POST["num6"]; 
        $num7 = $_POST["num7"]; 
        
        require_once 'includes/user.php';
        $user = new User();
        $user->setEmail($_SESSION["email"]);
        $rowCode = $user->retrieveUseremail();
        
        $_SESSION["code"] = $rowCode[0]['userotp'];
        
        $totalCode = "$num1$num2$num3$num4$num5$num6$num7";
        
        if($totalCode == $_SESSION["code"]){
            $_SESSION["authentication"] = true;
            $_SESSION["username"] = $rowCode[0]['username'];
            $_SESSION["email"] = $rowCode[0]['useremail'];
            $_SESSION['userid'] = $rowCode[0]['userid'];
            $_SESSION['userimage'] = $rowCode[0]['userimage'];
            $_SESSION['usertype'] = $rowCode[0]['usertype'];
            
            $user->setEmail($_SESSION["email"]);
            $user->verifyUser("verified");
            header('Location:index.php');
            
        }else{
            $_SESSION['error'] = "* Incorrect code!";
        }
    }
?>