<?php
// Connexion à la base de données
$servername = "localhost";
$username = "nom_utilisateur";
$password = "mot_de_passe";
$dbname = "nom_base_de_donnees";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}   

// Récupérer les données de la base de données
$sql = "SELECT nom, age FROM utilisateurs";
$result = $conn->query($sql);

// Afficher les données dans la table HTML
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nom"] . "</td><td>" . $row["age"] . "</td></tr>";
    }
} else {
    echo "Aucun utilisateur trouvé.";
}

// Fermer la connexion à la base de données
$conn->close();
?>
