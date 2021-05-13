@extends ('layout/main') 
@secction ('Search') 


<h2> Private Search Results </h2>
<h3> Prvivate Search Results hide your identity online. 
You won't use tracking cookies so other websites can't add your computers' 
cookie files. 

Our next iteration update will include a VPN which will act as a cookie track
and an IP address blocker and proxy to completely hide your Keyword
searches. </h3>  

<?php
 
$cookie_name = "JSearchNull";
$cookie_value = "JSearchNull";

// Set the expiration date to one hour ago
setcookie("JSearchNull", "", time() - 3600);
 
 echo $_POST['PrivateSearch'];?> 

 <html>
  
<body>
  
    <?php
    echo "Cookie 'JSearchNull' is deleted.";
    ?>
  
</body>
  
</html>  


  

