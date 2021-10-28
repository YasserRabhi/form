

function verif1() {
const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var nom = document.forms["form1"]["nom"].value;
var email = document.forms["form1"]["login"].value;
var pwd = document.forms["form1"]["mdp"].value;

if (nom.length == 0)
{
alert("Veuillez ajouter votre nom");
return false;
}
if (email.length == 0)
{
alert("Veuillez ajouter votre email");
return false;
}

if (!re.test(String(email).toLowerCase())) {
	alert("Format E-mail erronée");
	return false;
}

if (pwd.length <5 || pwd.length > 25)
{
alert("Veuillez ajouter un mot de passe entre 5 et 25 chiffres");
return false;
}

return true;
}


function verif2() {
const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var email = document.forms["form1"]["login"].value;
var pwd = document.forms["form1"]["mdp"].value;


if (email.length == 0)
{
alert("Veuillez ajouter votre email");
return false;
}

if (!re.test(String(email).toLowerCase())) {
	alert("Format E-mail erronée");
	return false;
}

if (pwd.length <5 || pwd.length > 25)
{
alert("Veuillez ajouter un mot de passe entre 5 et 25 chiffres");
return false;
}

return true;
}
