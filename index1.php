<?php
include ("db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Index</title>
  <style>
    p {
      text-align: center;

    }
  </style>
</head>

<body>
  <!-- Navbar Start -->


  <nav class="navbar navbar-light  sticky-top navbar-expand-lg justify-content-center fs-3 mb-5"
    style="background-color: #ffa500;">
    <div class="container-fluid">
      <p><b>Welcome To Booking</b></p>
      <div class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php"><b>Logout </b></a>
      </div>
    </div>

  </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="customer detail.php" class="btn btn-primary mb-3">Add Product</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">ProductName</th>
          <th scope="col">Discount</th>
          <th scope="col">Price</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // $sql = "SELECT * FROM `booking` ";
        $sql = "SELECT id, ProductName, discount, price, description FROM `booking`";

        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["ProductName"]?></td>
            <td><?php echo $row["discount"] ?></td>
            <td><?php echo $row["price"] ?></td>
            <td><?php echo $row["description"] ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-primary"><i
                  class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-danger"><i
                  class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

</body>

</html>