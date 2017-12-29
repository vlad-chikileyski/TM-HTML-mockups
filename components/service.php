<?php
   function getAuthCredential($inputLogin, $inputPassword)
    {
        $paramsPath = 'config/login_params.php';
        $params = include($paramsPath);
        $login = "{$params['login']}";
        $password = "{$params['password']}";
        if(isset($inputLogin) && $inputLogin!='' && isset($inputPassword) && $inputPassword!=''){
            if($inputLogin==$login && $inputPassword==$password){
                    auth($inputLogin);
                    if(isset($_SESSION['user'])){
                     header("Location: /index.php");
                    echo '<p><a href="logout.php">Logout</a></p>';
                    } else{
                    echo ":(";
                    }
            } else {
                     echo '<div><p style="color: red;text-align: center;font-size: xx-large;">Access is denied</p> </div>';
                     }
        } else {
        echo '<div><p style="color: red;text-align: center;font-size: xx-large;">Access is denied</p> </div>';
        }
        return true;
    }

     function auth($userName)
     {
            $_SESSION['user'] = $userName;
     }

