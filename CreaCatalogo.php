<?php
    $servername = "localhost";
    $user = "root";
    $pwd = "";
    $db = "negozio";
    $conn = new mysqli($servername, $user, $pwd, $db);
	
	
$sql= " CREATE TABLE IF NOT EXISTS catalogo(
		IDcatalogo int (15) NOT NULL ,
		nomeCatalogo varchar(50),
		descrizioneCatalogo varchar (50),
		PRIMARY KEY (IDcatalogo)

);";

if($conn->query($sql)== TRUE)
{
	echo "<br>Tabella catalogo creata correttamente.";
}
else
{
	echo "<br>Errore nella creazione della tabella catalogo: " . $conn->error;
}



$conn->close();

?>