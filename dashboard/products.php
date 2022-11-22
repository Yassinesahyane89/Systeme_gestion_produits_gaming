<?php
    session_start();
    $title = 'Product';
    include_once 'header.php';
    include_once 'includes/productscript.php';
      $result = getproduct();
?>

             <div class="tableau-bd">
                <div class="headProduct">
                    <h1>Products</h1>
                        <div class="">
                            <button class=""  data-bs-toggle="modal" data-bs-target="#modal"><i class="fa fa-plus"></i> Add Task</button>
                        </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>image</th>
                            <th>Nom</th>
                            <th>prix</th>
                            <th>categorie</th>
                            <th>quantite</th>
                            <th>change</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($result!='0'){ while($row = $result->fetch_assoc()) {?>
                            <tr>
                                <td><?php echo $row["id_product"] ?></td>
                                <td><div class="profil_product"><img src="includes/image/<?php echo $row["image_product"] ?>" alt=""></div></td>
                                <td><?php echo $row["Nom_product"] ?></td>
                                <td><?php echo '$'.$row["prix_product"] ?></td>
                                <td><?php echo $row["Nom_categorie"] ?></td>
                                <td><?php echo $row["quantite_product"] ?></td>
                                <td>
                                    <a href="Update.php?id=<?php echo $row['id_product'] ?>"><button  type="submit" class="btn btn-success" name="update">Edit</button></a>
                                    <a href="includes/productscript.php?delete=<?php echo $row['id_product'] ?>"><button  type="submit" class="btn btn-danger" name="delete">delete</button></a>
                                </td>
                            </tr>  
                        <?php }} ?>
                    </tbody>
                </table>
            </div> 
            <div class="modal fade" id="modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="includes/productscript.php" method="POST" id="form-task" enctype="multipart/form-data">
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
                                <input type="hidden" id="product-id">
                                <div class="mb-3">
                                    <label class="form-label">Nom</label>
                                    <input type="text" value="" class="form-control" name="nom" id="product-title" oninput="checkName()"/>
                                </div>

                                <div class="errorForm errorNom">
                                    <P style="color: #ab0d02;">Entrer a string entre 2 est 20 caracter</P>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Prix</label>
                                    <input type="text" value="" class="form-control" name="prix" id="product-prix" oninput="checkPrix()"/>
                                </div>
                                <div class="errorForm errorPrix">
                                    <P style="color: #ab0d02;">Entrer a Number</P>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">categorie</label>
                                    <select class="form-select" id="product-categorie" name="categorie">
                                        <option value="">Please select</option>
                                        <option value="1">Action</option>
                                        <option value="2">Action-adventures</option>
                                        <option value="3">Adventure</option>
                                        <option value="4">Puzzle</option>
                                        <option value="5">Role-playing</option>
                                        <option value="6">simulation</option>
                                        <option value="7">sport</option>
                                    </select>
                                </div>
                                
                                <div class="errorForm errorcategorie">
                                    <P style="color: #ab0d02;">Select a categorie</P>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">quantite</label>
                                    <input type="text" value="" class="form-control" name="quantite" id="product-quantite" oninput="checkQuantite()"/>
                                </div>
                                <div class="errorForm errorquantite">
                                    <P style="color: #ab0d02;">Entrer a Number</P>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Image product</label>
                                    <input type="file" value="" class="form-control" name="imageproduct"/>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <a href="index.php" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                                <button  type="submit" name="save" class="btn btn-primary task-action-btn" id="product-save-btn" onclick="valideform()">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    
<?php
  include_once 'footer.php'
?>