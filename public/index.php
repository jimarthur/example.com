<?php
$meta = [];
$meta['title'] = 'James\'s Website';
$meta['description'] = 'hello, my name is James';
$meta['keywords'] = 'PHP, Linux, Artist, javacript';

$content = <<<EOT
 <h1>Hello World</h1>
 <p>Welcome to my Web Page</p>
EOT;

 require '../core/layout.php';
