<?php
session_start();
if(isset($_SESSION['user'])){
echo '<div><p style="text-align: center;font-size: xx-large;">Hello, '.$_SESSION['user'] .'</p> </div>';
echo '<div>
<p style="text-align: center;font-size: xx-large;"><a href="/projects/abee-offers-app.php">Angular SML App - Mockup</a></p>
<p style="text-align: center;font-size: xx-large;"><a href="/projects/index.php">HTML / CSS / JS - Mockup</a></p>
<p style="text-align: center;font-size: xx-large;"><a href="logout.php">Logout</a></p>
</div>
';
} else{
        header("Location: /login.php");
}
