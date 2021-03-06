<?php 
include 'read.php';
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>CRUD</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        
        <form action="dobav.php"> 
        
        <div class="col-12">
          <button class="btn btn-success mt-2"><i class="fa fa-plus"></i></button>
          <table class="table table-striped table-hover">
            <thead class="thead-dark">
              <th>ID</th>
              <th>Имя пользователя</th>
              <th>Действие</th>
            </thead>
            <tbody>
              <?php foreach($result as $res) { ?> 
              <tr>
                <td><?php echo $res->id ?></td>
                <td><?php echo $res->username ?></td>
                <td>
                  <a href="delete.php" name='deleted' class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                </td>
              </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  

    <!-- Optional JavaScript; choose one of the two! -->                                                        
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>