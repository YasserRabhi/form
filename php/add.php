<?php
// database connection code
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'db_connect');
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($con === false){
    die("ERROR:  Connection impossible à la BD . " . mysqli_connect_error());
}
// get the post records

if(isset($_POST['submit'])){ 
$name = trim($_POST['nom']);
$email =trim($_POST['login']);
$pwd = trim($_POST['mdp']); }
else {
	echo "<h1><center> Probleme lors du passage des paramétres POST</center></h1>";
	header("Location : /home.html");
	return false ;
	}
	

  
//on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
		$email = stripcslashes($email);  
        $pwd = stripcslashes($pwd);  
        $email = mysqli_real_escape_string($con,htmlspecialchars($email));  
        $pwd = mysqli_real_escape_string($con,htmlspecialchars($pwd));  
		
	//verifier si l'email existe déja dans la bd
	
	 $sql = "select * from tbl_users where Email = '$email'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        

        if($count >= 1){  
            echo "<h1><center> Cet email existe déja, essayez de vous connectez </center></h1>";  
			echo '<h1><center><p><a href="/projet/home.html" title="Retourner à la page">HOME</a></p></center></h1>';

			return false ;

        }  

	$hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);

// requéte SQL
$sql = "INSERT INTO `tbl_users` (`Id`, `Name`, `Email`, `Password`) VALUES ('0', '$name', '$email', '$pwd')";

// ajouter le compte dans la BD
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "<h1><center> Compte crée , veuillez vous connectez </center></h1>";
}
else echo "<h1><center>  Probléme lors de la création du compte </center></h1>";

echo '<h1><center><p><a href="/projet/home.html" title="Retourner à la page">HOME</a></p></center></h1>';
?>
