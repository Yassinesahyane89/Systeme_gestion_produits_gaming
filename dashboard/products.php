<?php
    session_start();
    $title = 'Product';
    include_once 'header.php';
    // $_SESSION["title"] = "Product";
?>

             <div class="recent-orders">
                <h1>Products</h1>
                <table>
                    <thead>
                        <tr>
                            <th>ID PRODUIT</th>
                            <th>Name Produit</th>
                            <th>categorie Produit</th>
                            <th>Nomber Produit</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>FIFA 22</td>
                            <td>Sprort</td>
                            <td>2</td>
                        </tr>  
                    </tbody>
                </table>
            </div>
    
<?php
  include_once 'footer.php'
?>