<?php
   

   if(strlen($_POST["pass"]) < 6 || !isset($_POST["pass"]) || !isset($_POST["email"]) || !isset($_POST["name"])) {
       header("location: index.php");
   } else {
       echo '
        <h1>Login</h1>
        <form action="account.php" method="post">
        <input type="email" name="email">
        <input type="password" name="pass">
        <button>Register</button>
        </form
       ';

   }
?>