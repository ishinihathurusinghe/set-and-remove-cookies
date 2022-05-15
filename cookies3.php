<?php

if (isset($_COOKIE['language'])){

    $language = $_COOKIE['language'];

    echo "selected language :{$language}"; 
}

else {

    setcookie('language','sinhala',time()+60*60*24*7);
}




?>

<html>
   <head>
         <title>  cookies </title>
</head>

<body>

</body>
</html>