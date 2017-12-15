<?php

$validEmail = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";

$data = $_POST;

$errors = [];

#var_dump($data);
foreach($data as $key => $value){
    echo "{$key} {$value}";

    switch($key) {
        case 'email':
        if(preg_match($validEmail, $value)!==1) {
            $errors[$key] = "Invalid Email";
        }
        break;

        default:
            if(empty($value)){
                $errors[$key] = "Invalid {$key}";
            }
        break;
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
<!-- meta data goes here -->
<title>Contact</title>
<META NAME="viewport" content="width=device-width, inital-scale=1.0">
</head>
<body>
  <nav>
    <a href="/">Home</a>
    <a href="resume.html">Resume</a>
    <a href="contact.php">Contact</a>
  </nav>
  <hl id="header" class="header">Hello I'm a Contact form</hl>
<button onclick="document.getElementById('header').style='color:#ff0000;'">click me
</button>
  <p>Welcome to my contact page.</p>
  <form>
      <div>
          <label for="firstName">First Name</label><br>
          <input type="text" name="first name" id="firstName">
      </div>
      <div>
          <label for="email">Email</label><br>
          <input type="text" name="last name" id="lasstName">
      </div>
      <div>
          <label for="lastName">Last Name</label><br>
          <input type="text" name="email" id="email">
      </div>


  </form>
  </body>
  </html>
