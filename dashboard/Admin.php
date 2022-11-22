<?php
    session_start();
    $title = "Costomers";
    include_once 'header.php';
?>

             <div class="tableau-bd">
                <h1>Customers</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Id user</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>yassine sahyane</td>
                            <td>yassine.sahyane89@gmail.com</td>
                            <td>12345678</td>
                        </tr>
                    </tbody>
                </table>
            </div>
<?php
  include_once 'footer.php'
?>