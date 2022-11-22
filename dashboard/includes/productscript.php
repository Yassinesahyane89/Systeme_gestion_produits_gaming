<?php
    include_once 'database.php';

    if(isset($_POST['save']))  saveProduct();
    if(isset($_POST['update'])) updateproduct();
    if(isset($_GET['delete'])) delete();



    function getproduct(){
        global $conn;
        $sql = "SELECT id_product,image_product,Nom_product,prix_product,Nom_categorie,quantite_product FROM product,categorie where code_categorie=id_categorie";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        }else{
            return 0;
        } 
    }
    
    function saveProduct(){
        global $conn;
        $nom = $_POST["nom"];
        $prix = $_POST["prix"];
        $categorie = $_POST["categorie"];
        $quantite = $_POST["quantite"];
        $filename = $_FILES["imageproduct"]["name"];
        $tempname = $_FILES["imageproduct"]["tmp_name"];
        $folder = "./image/" . $filename;

        $insert_query="INSERT INTO product (`Nom_product`,`image_product`, `prix_product`, `code_categorie`,`quantite_product`)
        VALUES ('$nom','$filename', '$prix', '$categorie', '$quantite')";
        $query_run = mysqli_query($conn,$insert_query);
        move_uploaded_file($tempname, $folder);

        if($query_run){
            header('location: ../products.php');
        }
    }
    function editTask($id){
    global $conn;

        $sql = "SELECT * FROM `product` WHERE id_product='$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            return $result;
        }

        $conn->close();
    }

    function updateproduct(){
            global $conn;
            $id = $_POST["id"];
            $nom = $_POST["nom"];
            $prix = $_POST["prix"];
            $categorie = $_POST["categorie"];
            $quantite = $_POST["quantite"];
            echo $filename = $_FILES["imageproduct"]["name"];
            echo  $tempname = $_FILES["imageproduct"]["tmp_name"];
            $folder = "./image/" . $filename;
            $sql = "UPDATE product SET Nom_product='$nom',image_product='$filename',prix_product='$prix',code_categorie='$categorie',quantite_product='$quantite' WHERE id_product='$id'";
            $query_run = mysqli_query($conn,$sql);
            echo move_uploaded_file($tempname, $folder);
            if($query_run){
                header('location: ../products.php');
            }
    }

    function delete(){
        global $conn;

        $id = $_GET["delete"];
        $sql = "DELETE FROM product WHERE id_product=$id";
        $query_run = mysqli_query($conn,$sql);
        if($query_run){
            $_SESSION['message'] = "Task has been added successfully !";
            header('location: ../products.php');
        }
    }
