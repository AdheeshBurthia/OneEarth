<?php 
    require_once 'includes/user.php';
    
    if (isset($_POST["btnSignup"])){
        if((!empty($_POST["email"])) && (!empty($_POST["password"]))){

            $username = $_POST ["username"];  
            $email = $_POST ["email"];  
            $password = $_POST['password'];
            $userimage = "placeholder.png";
            $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialchars = preg_match('@[^\w]@', $password);

            if (!preg_match ($pattern, $email)){  
                $_SESSION['username'] = $username;
                $_SESSION['error'] = "* Email is not valid!"; 
                
                
            }else if(!$uppercase || !$lowercase) {
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                
                
            }else if(!$number) {
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                
                
            }else if(!$specialchars) {
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                
                
            //}else if(strlen($password) < 8) {
                //$_SESSION['username'] = $username;
                //$_SESSION['email'] = $email;
                //$_SESSION['error'] = "* Password must have atleast 8 characters!";
                

            }else{
                require_once 'includes/user.php';
                $user = new User();
                $user->setUsername($username);
                $user->setEmail($email);
                $rowUsername = $user->retrieveUsername();
                $rowEmail = $user->retrieveUseremail();

                if ($rowUsername){
                    $_SESSION['username'] = $username;
                    $_SESSION['email'] = $email;
                    $_SESSION['error'] = '* Username already taken!';
                    
                }else if ($rowEmail){
                    $_SESSION['username'] = $username;
                    $_SESSION['email'] = $email;
                    $_SESSION['error'] = '* Email already taken!';

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
                    header('Location:verification.php');
                }
            }

        }else{
            $_SESSION['error'] = "* Fill up the form first!";
        }
    }
    
    if (isset($_POST["btnLogin"])){
        $username = $_POST ["username"];  
        $password = $_POST['password'];
        
        if((!empty($username)) && (!empty($password))){
    
            require_once 'includes/user.php';
            $user = new User();
            $user->setUsername($username);
            $row = $user->retrieveUsername();

            if($row){
                    if(password_verify($password, $row[0]['userpass'])){
                        if($row[0]['status'] == "verified"){
                            $_SESSION['authentication'] = true;
                            $_SESSION['register'] = true;
                            $_SESSION['userid'] = $row[0]['userid'];
                            $_SESSION['userimage'] = $row[0]['userimage'];
                            $_SESSION['username'] = $row[0]['username'];
                            $_SESSION['email'] = $row[0]['useremail'];
                            $_SESSION['usertype'] = $row[0]['usertype'];
                        }else{
                            header('Location:verification.php');
                            $_SESSION['username'] = $row[0]['username'];
                            $_SESSION['email'] = $row[0]['useremail'];
                        }
                        
                    }else{
                        $_SESSION['username'] = $row[0]['username'];
                        $_SESSION['error'] = "* Your credentials are incorrect!"; 
                    }
            }else{
                $_SESSION['error'] = "* Your credentials are incorrect!"; 
            }
            
        }else{
            $_SESSION['error'] = "* Fill up the form first!";
        }
    }
    
?>