<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Ajouter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

    <div id="container" class="formulaire">
        <form name="formAdd" action="" method="POST" class="formulaire" enctype="multipart/form-data">
            <h2 align="center">Ajouter Nouvelle Produit</h2>
            <!-- <label><b>Id :</b></label>
            <input type="text" name="txtId" class="zonetext" placeholder="Entrer Id" required> -->

            <label><b>Nom :</b></label>
            <input type="text" name="txtnom" class="zonetext" placeholder="Entrer Le Nom" required>

            <label><b>Prix :</b></label>
            <input type="number" name="txtprix" class="zonetext" placeholder="Entrer Prix" required>

            <label><b>Quantité min:</b></label>
            <input type="number" name="txtqmin" class="zonetext" placeholder="Entrer Quantité minimale" required>

            <label><b>Quantité max:</b></label>
            <input type="number" name="txtqmax" class="zonetext" placeholder="Entrer Quantité maximale" required>

            <label><b>Catégory :</b></label>
            <input type="text" name="txtcatg" class="zonetext" placeholder="Entrer Catégory" required>


            <label><b>Photo :</b></label>
            <input type="file" name="txtphoto" class="zonetext" placeholder="Choisir Photo" required>

            <input type="submit" name="btadd" value="Ajouter" class="submit">


            <?php
            require_once('./db_conn.php');
            if (isset($_POST['btadd'])) {
                $id = $_POST['txtId'];
                $name = $_POST['txtnom'];
                $prix = $_POST['txtprix'];
                $Quantite_min = $_POST['txtqmin'];
                $Quantite_max = $_POST['txtqmax'];

                $catagorie = $_POST['txtcatg'];
                $image = $_FILES['txtphoto']['tmp_name'];
                $traget = "les images/" . $_FILES['txtphoto']['name'];
                move_uploaded_file($image, $traget);
                $reqAdd = "INSERT INTO produit(id,name, prix, Quantite_min,Quantite_max,catagorie,img) 
                    VALUES ('$id','$name','$prix','$Quantite_min','$Quantite_max','$catagorie','$traget')";

                $resultat = mysqli_query($conn, $reqAdd);
                if ($resultat) {
                    header("location: home.php");
                    echo "Insertion des données validés";
                } else {
                    echo "Echec d Insertion des données";
                }
            }
            ?>



        </form>
    </div>


</body>

</html>