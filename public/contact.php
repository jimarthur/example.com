<?php
//include non-vendor files
require '../core/processContactForm.php'; ?>



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
  <form method="post">
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
