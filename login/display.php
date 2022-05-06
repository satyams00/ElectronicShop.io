<?php
include 'log.php';


$q = " SELECT * FROM tbl_users WHERE 1";

$result = mysqli_query($conn, $q);

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>Display page</title>
  </head>
  <body >
    <div class="container">
        <table style="border: 2px solid black"> 
            <thead>
                <tr>
                    <th class="px-5">id</th>
                    <th class="px-5">Name</th>
                    <th class="px-5">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                
                <tr>
                    <td class="px-5"> <?php echo $row['id'] ?> </td>
                    <td class="px-5"> <?php echo $row['name'] ?> </td>
                    <td class="px-5"> <?php echo $row['email'] ?> </td>
                </tr>


                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
