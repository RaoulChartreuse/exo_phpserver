<html>
 <head>
  <title>Liste des stagiaire</title>
 </head>
 <body>
 <?php echo '<p>Bonjour le monde</p>'; ?>
 <ul>
 <?php
for ($i=0; $i<10; $i++){
       echo '<li> ';
       echo $i ;
       echo '  test </li>';
}
// dfssdfdfs d 
?>
</ul>

 <?php
include configDb.php;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nom, prenom FROM stagiaire";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["prenom"]. " " . $row["nom"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<a href = "formulaire_add.php"> Ajouter un stagiaire </a></br>






 </body>
</html> 
