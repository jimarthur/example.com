<?php
//include non-vendor files
require '../core/About/src/Validation/Validate.php';

use About\Validation;

$valid = new Validate();

$input = filter_input_array(INPUT_POST);

$message = null;

if(!empty($input)){

    $valid->validation = [
        'first_name'=>[[
            'rule'=>'notEmpty',
            'message'=>'Please enter your first name'
        ]],
        'last name'=>[[
            'rule'=>'notEmpty',
            'message'=>'Please enter your last name'
            ]],
            'email'=>[[
                'rule'=>'email',
                'message'=>'Please enter a valid email'
            ],[
                'rule'=>'notEmpty',
                'message'=>'Please enter an email'
            ]],
            'subject'=>[[
                'rule'=>'notEmpty',
                'message'=>'Please enter a subject'
            ]],
            'message'=>[[
                'rule'=>'notEmpty',
                'message'=>'Please add a message'
            ]],
    ];
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
          <div style="color: #ff0000;"><?php echo $valid->error('first_name'); ?>
      </div>
      <div>
          <label for="lastName">Last Name</label><br>
          <input type="text" name="last name" id="lastName">
          <div style="color: #ff0000;"><?php echo $valid->error('last_name'); ?>
      </div>
      <div>
          <label for="email">Email</label><br>
          <input type="text" name="email" id="email">
          <div style="color: #ff0000;"><?php echo $valid->error('email'); ?>
      </div>
      <div>
          <label for="subject">Subject</label><br>
          <input type="text" name="subject" id="subject">
          <div style="color: #ff0000;"><?php echo $valid->error('subject'); ?>
      </div>
      <div>
          <label for="message">Message</label><br>
          <input type="text" name="message" id="message">
          <div style="color: #ff0000;"><?php echo $valid->error('message'); ?>
      </div>
  </div>
  <input type="submit">

  </form>
  </body>
  </html>
