<?php
    session_start();
    require_once '../includes/conn.php';
    require_once '../includes/user.php';
    
    if(isset($_POST['username'])){

        $username = $_POST['username'];
        
        $user = new User();
        $user->setUsername($username);
        $rowUsername = $user->countUsername();

        if($rowUsername[0]['count'] > 0){
            echo "<div class='countFalse'><i class='bx bx-x-circle'></i></div>";
        }else{
            echo "<div class='countTrue'><i class='bx bx-check-circle'></i></div>";
        }
    }
    
    if(isset($_POST['email'])){

        $email = $_POST['email'];
        
        $user = new User();
        $user->setEmail($email);
        $rowUseremail = $user->countUseremail();
        
        $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
        
        if (!preg_match ($pattern, $email)){  
            echo "<div class='countFalse'><i class='bx bx-x-circle'></i></div>";
        }else{
            if($rowUseremail[0]['count'] > 0){
                echo "<div class='countFalse'><i class='bx bx-x-circle'></i></div>";
            }else{
                echo "<div class='countTrue'><i class='bx bx-check-circle'></i></div>";
            }
        }

    }
    
    if(isset($_POST['password'])){
        $password = $_POST['password'];
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialchars = preg_match('@[^\w]@', $password);
        
        if(!$uppercase || !$lowercase || !$number || !$specialchars) {
            $response = "<div class='errorpass'>* Password must atleast include: <br> - an uppercase<br> - a lowercase<br> - a number<br> - a special character</div>";
        }else{
            $response = "<div class='successpass'>* Strong password</div>";
        }
    echo $response;
    die;
    }
    
    if(isset($_POST['scope'])){
        $scope = $_POST['scope'];
        
        switch($scope){
            case "signup":
                if((!empty($_POST["user_name"])) && (!empty($_POST["user_email"])) && (!empty($_POST["user_password"]))){
                    $username = $_POST["user_name"];
                    $email = $_POST["user_email"];
                    $password = $_POST["user_password"];
                    $userimage = "placeholder.png";
                    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
                    $uppercase = preg_match('@[A-Z]@', $password);
                    $lowercase = preg_match('@[a-z]@', $password);
                    $number    = preg_match('@[0-9]@', $password);
                    $specialchars = preg_match('@[^\w]@', $password);
        
                    if (!preg_match ($pattern, $email)){  
                        $error = "* Email is not valid!"; 
    
                    }else if(!$uppercase || !$lowercase) {
                        //$error = "* Weak password!";
     
                    }else if(!$number) {
                        //$error = "* Weak password!";
    
                    }else if(!$specialchars) {
                        //$error = "* Weak password!";

                    }else{
                        $user = new User();
                        $user->setUsername($username);
                        $user->setEmail($email);
                        $rowUsername = $user->retrieveUsername();
                        $rowEmail = $user->retrieveUseremail();
        
                        if ($rowUsername){
                            $error = '* Username already taken!';
                            
                        }else if ($rowEmail){
                            $error = '* Email already taken!';
        
                        }else{
                            $_SESSION['register'] = true;
                            $_SESSION['username'] = $username;
                            $_SESSION['email'] = $email;
                            $user = new User();
                            $password = password_hash($password, PASSWORD_DEFAULT);
                            
                            // Function to generate OTP
                            function generateNumericOTP($n) {
                                  
                                // Take a generator string which consist of
                                // all numeric digits
                                $generator = "1357902468";
                              
                                // Iterate for n-times and pick a single character
                                // from generator and append it to $result
                                  
                                // Login for generating a random character from generator
                                //     ---generate a random number
                                //     ---take modulus of same with length of generator (say i)
                                //     ---append the character at place (i) from generator to result
                              
                                $result = "";
                              
                                for ($i = 1; $i <= $n; $i++) {
                                    $result .= substr($generator, (rand()%(strlen($generator))), 1);
                                }
                              
                                // Return result
                                return $result;
                            }
                              
                            // Number of otp digits
                            $n = 7;
                            $_SESSION["code"] = generateNumericOTP($n);
                            
                            $user->addUser($userimage,$username,$email,$password,0,"not verified");
                            $error = "verification";
                        }
                    }
                    
                }else{
                    $error = "* Empty field!";
                }

                break;
                
                case "login":
                if((!empty($_POST["log_username"])) && (!empty($_POST["log_password"]))){
                    $log_username = $_POST["log_username"];
                    $log_password = $_POST["log_password"];
                    $user = new User();
                    $user->setUsername($log_username);
                    $row = $user->retrieveUsername();
        
                    if($row){
                        if(password_verify($log_password, $row[0]['userpass'])){
                            if($row[0]['status'] == "verified"){
                                $_SESSION['authentication'] = true;
                                $_SESSION['register'] = true;
                                $_SESSION['userid'] = $row[0]['userid'];
                                $_SESSION['userimage'] = $row[0]['userimage'];
                                $_SESSION['username'] = $row[0]['username'];
                                $_SESSION['email'] = $row[0]['useremail'];
                                $_SESSION['usertype'] = $row[0]['usertype'];
                                $error = "index"; 
                            }else{
                                $error = "verification"; 
                                $_SESSION['username'] = $row[0]['username'];
                                $_SESSION['email'] = $row[0]['useremail'];
                            }
                            
                        }else{
                            $error = "* Your credentials are incorrect!"; 
                        }
                    }else{
                        $error = "* Your credentials are incorrect!"; 
                    }
                    
                }else{
                    $error = "* Empty field!";
                }
                
                break;

            default:
                $error = "* Something went wrong!";
        }
        //echo error
        if(isset($error)){
            echo $error;
            die;
        }
    }
    
?>
        