
	//verifier si l'email existe déja dans la bd
	
	 $sql = "select * from tbl_users where Email = '$email'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        

        if($count >= 1){  
            echo "<h1><center> Cet email existe déja, essayez de vous connectez </center></h1>";  
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

echo '<p><a href="javascript:history.go(-1)" title="Retourner à la page">HOME</a></p>';
?>
