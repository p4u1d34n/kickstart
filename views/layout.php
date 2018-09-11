<DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <header>
      <a href='/kickstart/'>Home</a>
      <a href='?controller=posts&action=index'>Posts</a>
    </header>

    <?php 
    
    print_r($_SERVER);
    
    require_once('routes.php'); ?>

    <footer>
      Copyright
    </footer>
  <body>
<html>