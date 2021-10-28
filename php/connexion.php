<?php      
    //include('connection.php');  
	// database connection code
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'db_connect');
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($con === false){
    die("ERROR: Connection impossible à la BD . " . mysqli_connect_error());
}
// get the post records

if(isset($_POST['submit'])){ 
$email =trim($_POST['login']);
$pwd = trim($_POST['mdp']); }
else {
	echo "<h1><center> Probleme lors du passage des paramétres POST</center></h1>";
	return false ;
	}
	
  
//on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
		$email = stripcslashes($email);  
        $pwd = stripcslashes($pwd);  
        $email = mysqli_real_escape_string($con,htmlspecialchars($email));  
        $pwd = mysqli_real_escape_string($con,htmlspecialchars($pwd));  
		
		$hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);

        $sql = "select * from tbl_users where Email = '$email' and Password ='$pwd'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
         

		
        if($count == 1){  
            echo "<h1><center> Bienvenue dans votre compte </center></h1>";  
        }  
        else{  
            echo "<h1><center> Email ou mot de passe incorrect</center></h1>"; 

        }     
		
	echo '<p><a href="javascript:history.go(-1)" title="Retourner à la page">LOGOUT</a></p>';

?>  