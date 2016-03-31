
<?php
function loadContent(){

    global $current_page;
    ob_start();                      // start capturing output
    include('templates/' .$current_page .'Content.php');    // execute the file
    $content = ob_get_contents();    // get the contents from the buffer
    ob_end_clean();

    echo $content;
}

function getConnection(){
  $servername = "localhost";
  $username = "dbi351321";
  $password = "jnP4qZX224";
  $dbname = "dbi351321";
  // Create connection
  

  $url = $_SERVER['HTTP_REFERER'];
  if(fnmatch("*localhost*", $url))
    return new mysqli('127.0.0.1', 'root', '','dbi341243');
  else{
    return new mysqli($servername, $username, $password, $dbname);
  }
  // Check connection
  if ($tempConn->connect_error) {
    die("<br/>Connection to DB failed!" );
  }else{
    return $tempConn;
  }
}

function startSession($email)
{
	session_start();
	$_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
}

function stopSession()
{
	session_start();
	session_unset($_SESSION['loggedin'] = false);
	header("Location: index.php");
}
?>