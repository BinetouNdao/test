<?php
function connectDB(){
    if($conn->connect_error){
        die("Connection failed:" .$conn->connect_error);
    }

    //verification si les formulaires ont été soumis
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //insertion des données dans la table livre
        if(isset($_POST['isbn']) && isset($_POST['titre']) && isset($_POST['auteur'])){
            $isbn = $_POST['isbn'];
            $titre = $_POST['titre'];
            $auteur = $_POST['auteur'];

            $sql = "INSERT INTO Livre (ISBN, Titre, Auteur)
            VALUES ('$isbn', '$titre', '$auteur')";
            if($conn->query($sql) === TRUE){
                echo"Les données sont inserer dans la table Livre avec succés. <br>";
            }else{
                echo"Erreur leur ce l'insertion dans la livre: " . $conn->error;
            }
        }
    }
}

    //fermer la connexion
    $conn->close;
?>