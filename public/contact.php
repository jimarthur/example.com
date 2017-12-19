<?php

$meta = [];
$meta['title'] = 'James\'s Website';
$meta['description'] = 'hello, my name is James';
$meta['keywords'] = 'James, James Arthur';

//include non-vendor files
require '../core/processContactForm.php';

$content = <<<EOT
<h1 id="header" class="header">Contact James</h1>
{$message}
  <p>Welcome to my contact page.</p>
  <form method="post">
      <div>
          <label for="firstName">First Name</label><br>
          <input type="text" name="first name" id="firstName">
          <div class="text-error" style="color: #ff0000;">{$valid->error('first_name')}</div>
      </div>
      <div>
          <label for="lastName">Last Name</label><br>
          <input type="text" name="last name" id="lastName">
          <div class="text-error" style="color: #ff0000;">{$valid->error('last_name')}</div>
      </div>
      <div>
          <label for="email">Email</label><br>
          <input type="text" name="email" id="email">
          <div class="text-error" style="color: #ff0000;">{$valid->error('email')}</div>
      </div>
      <div>
          <label for="subject">Subject</label><br>
          <input type="text" name="subject" id="subject">
          <div class="text-error" style="color: #ff0000;">{$valid->error('subject')}</div>
      </div>
      <div>
          <label for="message">Message</label><br>
          <input type="text" name="message" id="message">
          <div class="text-error" style="color: #ff0000;">{$valid->error('message')}</div>
      </div>

  <input type="submit">

  </form>
EOT;
require '../core/layout.php';
