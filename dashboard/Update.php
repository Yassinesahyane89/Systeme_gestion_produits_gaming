<?php
    session_start();
    include_once 'header.php';
    include_once 'includes/productscript.php';
    $id = $_GET['id']; 
    $result = editTask($id);
?>

<!-- TASK MODAL -->
<?php
$row = $result->fetch_assoc();{
?>

<div class="updateproduct">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="includes/productscript.php" method="POST" id="form-product" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">Add Product</h5>
                    <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                </div>
                <div class="validation-input">
                    <div>
                        <i class="fa-solid fa-circle-exclamation"></i>
                    </div>
                    <div class="message-content">
                        <h4>vous pouvez pas ajouter a product</h4>
                        <p>Veuillez remplir les champs ci-dessous.</p>
                </div>
                </div>
                <div class="modal-body">
                    <!-- This Input Allows Storing Task Index  -->
                    <input type="hidden" name="id" value="<?php echo $row['id_product'] ?>" id="product-id">
                    <div class="mb-3">
                        <label class="form-label">Nom</label>
                        <input type="text" value="<?php echo $row['Nom_product'] ?>" class="form-control" name="nom" id="product-title" oninput="checkName()"/>
                    </div>

                    <div class="errorForm errorNom">
                        <P style="color: #ab0d02;">Entrer a string entre 2 est 20 caracter</P>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Prix</label>
                        <input type="text" value="<?php echo $row['prix_product'] ?>" class="form-control" name="prix" id="product-prix" oninput="checkPrix()"/>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">categorie</label>
                        <select class="form-select" id="product-categorie" name="categorie">
                            <option value="">Please select</option>
                            <option <?php echo $row['code_categorie']=='1' ? 'selected' :''?> value="1">Action</option>
                            <option <?php echo $row['code_categorie']=='2' ? 'selected' :''?> value="2">Action-adventures</option>
                            <option <?php echo $row['code_categorie']=='3' ? 'selected' :''?> value="3">Adventure</option>
                            <option <?php echo $row['code_categorie']=='4' ? 'selected' :''?> value="4">Puzzle</option>
                            <option <?php echo $row['code_categorie']=='5' ? 'selected' :''?> value="5">Role-playing</option>
                            <option <?php echo $row['code_categorie']=='6' ? 'selected' :''?> value="6">simulation</option>
                            <option <?php echo $row['code_categorie']=='7' ? 'selected' :''?> value="7">sport</option>
                        </select>
                    </div>

                    <div class="errorForm errorcategorie">
                        <P style="color: #ab0d02;">Select a categorie</P>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">quantite</label>
                        <input type="text" value="<?php echo $row['quantite_product'] ?>" class="form-control" name="quantite" id="product-quantite" oninput="checkQuantite()"/>
                    </div>
                    <div class="errorForm errorquantite">
                        <P style="color: #ab0d02;">Entrer a Number</P>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Image product</label>
                        <input type="file" value="image/<?php echo $row["image_product"] ?>" class="form-control" name="imageproduct"/>
                    </div>

                </div>
                <div class="modal-footer">
                    <a href="index.php" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                    <button  type="submit" name="update" class="btn btn-primary task-action-btn" id="product-save-btn" onclick="valideform()">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php } ?>
<?php
    include_once 'footer.php'
?>