<?php
/**
 * Created by PhpStorm.
 * User: Ochieng_Derrick
 * Date: 5/2/2018
 * Time: 9:34 AM
 */

 $hostname = gethostname();
 $ip = gethostbyname($hostname);

?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/index.css">
    <link rel="stylesheet" type="text/css" href="animate/animate.css">
</head>
<body>
 <div class="container">
     <div class="jumbotron text-center">
         <?php
          echo '<p class="lead" style="font-size: 40px;">' . $hostname . '</p>';
          echo '<p class="lead animated infinite fadeIn" style="font-size: 35px;">' . $ip . '</p>';
         ?>
     </div>
 </div>
</body>
</html>
