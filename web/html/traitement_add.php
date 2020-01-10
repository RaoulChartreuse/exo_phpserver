<html>
 <head>
  <title>Traitement add</title>
 </head>
 <body>
 <?php echo '<p>Bonjour le monde</p>'; ?>

Bonjour, Ton prenom est <?php echo htmlspecialchars($_POST['prenom']); ?>.
Et ton nom est <?php echo $_POST['nom']; ?> .

 <?php
include 'configDb.php';
$Xnom = $_POST['prenom'];
$Xprenom = $_POST['nom'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo 'Test';
echo $Xnom;
$sql = "INSERT INTO stagiaire (nom, prenom) VALUES ('$Xnom', '$Xprenom')";
$result = $conn->query($sql);

$conn->close();
?>

<a href = "bonjour.php"> Retour a la liste </a></br>
 </body>
</html> 
