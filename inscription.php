<?php

if(isset($_POST['subscribe'])){
           if(empty($_POST["name"]))
       $nameErr='name is required';
        else { $name=test_input($_POST["name"]);}

        if(empty ($_POST["first_name"]))
            $first_nameErr= 'first name is required';
        else {$first_name= test_input($_POST["first_name"]);}

        if(empty($_POST["birthday"]))
            $birthdayErr= 'birthday is required';
        else{ $birthday= test_input($_POST["date_naiss"]);}
        
        if(empty($_POST["email"]))
        $mailErr = "Email is required";
        }else { $email=test_input($_POST["email"]);}
if(isset($_POST["password"]) && isset($_POST["confirm_password"])){
        if(empty($_POST["password"]))
            $passwordErr='password is required';
        else{$pass=test_input($_POST["password"]);}

        if(empty($_POST["confirm_password"]))
            $repassErr = 'Confirm the password';
        else { 
            $repass = test_input($_POST["confirm_password"]);
            
        }}
function test_input($data)// la fonction qui nous permettra de controler les variables
{
       $data = trim($data);// supprime les espace à gauche et à droite dans les champs
       $data = stripslashes($data);//supprime les anti shlash dans un champ
       $data = htmlspecialchars($data);//empêche les caractères spéciaux comme les balises de html de s'exécuter une fois insérées dans les champs
       return $data;
}

?>
<Doctype html>
    <head>
        <meta charset="uft-8">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="ma2emeinscription.css">
    <title> Mon app</title>
    </head>
    <body>
        <h1>CREATE A NEW ACCOUNT</h1>
    <div class="form_box">
        <form method="POST" action="ma2emeinscription.php">
            <input placeholder="Name" type="text" name="name"><?php echo $nameErr ?>
            <input placeholder="First name" type="text" name="first_name"><?php echo " $first_nameErr"?>
            <input placeholder="Your birthday" type="text" name="birthday"><?php echo " $birthdayErr"?>
            <input placeholder="Email" type="email" name="email"><?php echo " $mailErr"?>
            <input placeholder="Your password" type="password" name="password"><?php echo " $passwordErr"?>
            <input placeholder="confirm your password" type="password" name="confirm_password"><?php echo " $repassErr"?>
            <input type="submit" name="subscribe" value=" Subscribe " id="submit">
         </form>
         <hr>    
         <div class="login">
            <a href="facebook.php">Log in </a>
        </div>
       </div>  
    </body>