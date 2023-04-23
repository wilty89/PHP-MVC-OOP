<style>
nav {
  background: linear-gradient(to right, #00ff00, #0000ff);
  padding: 9px;
 
}

ul {
  list-style: none;
  display: flex;
  justify-content: space-between;
  padding: 0;
  margin: 0;
}

li {
  margin: 0 10px;
}

a {
  color: white;
  text-decoration: none;
  font-weight: bold;
  padding: 10px;
  transition: all 0.3s ease-in-out;
}

a:hover {
  background: white;
  color: black;
}

</style>
<nav>
  <ul>
    <li><a href="/">Inicio</a></li>
    <li><a href="/about">about</a></li>
    <li><a href="/indexHtml">indexHtml</a></li>
    <li><a href="/first">First</a></li>
    <li><a href="/second">Second</a></li>
    <li><a href="/third">Third</a></li>
  </ul>
</nav>

<?php
$loginSuccessful=false;

if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){ 
    $userName=$_SERVER['PHP_AUTH_USER']; 
    $password=$_SERVER['PHP_AUTH_PW']; 
    if($userName=='Marines' && $password='123'){ 
        $loginSuccessful=true; 
    } 
} 

if(!$loginSuccessful){ 
    header('WWW-Authenticate:Basic'); 
    header('HTTP/1.0 401 Unauthorized'); 
    echo "Error"; 
}
    else{ 
        //echo 'Bienvenido'; 
        //echo __DIR__;
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '/indexHtml' :
        require __DIR__ . '/views/index.html';
        break;
    case '/about' :
        require __DIR__ . '/views/about.html';
        break;
        case '/first' :
            require __DIR__ . '/views/template/first.php';
            break;        
    case '/second' :
        require __DIR__ . '/views/template/second.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}    
    }