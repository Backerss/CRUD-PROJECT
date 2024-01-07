<?php

include_once("sql/dbcon.php");











?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
  />
  <link rel="stylesheet" href="css/custom.css" />
  <script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"
  ></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>

    <div class="container">

        <div class="row mt-5">
            <div class="col-lg-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ลำดับ</th>
                    <th scope="col">ชื่อจริง</th>
                    <th scope="col">นามสกุล</th>
                    <th scope="col">เพศ</th>
                    <th scope="col">อายุ</th>
                    <th scope="col">ที่อยู่</th>
                    <th scope="col">ตำแหน่ง</th>
                    <th scope="col">แก้ไข</th>
                    <th scope="col">ลบ</th>
                </tr>
                </thead>
                <tbody>
                  <?php

                    $sql = "SELECT * FROM `list_name`";
                    $result = mysqli_query($conn, $sql);

                      while($row = mysqli_fetch_array($result)) {
                      ?>
                    <tr>
                        <th scope="row"><?php echo $row['list_id']; ?></th>
                        <td><?php echo $row['list_firstname']; ?></td>
                        <td><?php echo $row['list_lastname']; ?></td>
                        <td><?php echo $row['list_sex']; ?></td>
                        <td><?php echo $row['list_age']; ?></td>
                        <td><?php echo $row['list_address']; ?></td>
                        <td><?php echo $row['list_rank']; ?></td>
                        <td><a type="button" class="btn btn-warning" href="edit?id<?php echo $row['list_id']; ?>">แก้ไข</a></td>
                        <td><a type="button" class="btn btn-danger" href="delete?id<?php echo $row['list_id']; ?>">ลบ</a></td>
                    </tr>
                    <?php
                      }
                    ?>


                  
                </tbody>
            </table>
            </div>
        </div>

    </div>
    
</body>

<script src="js/crud.js"></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"
></script>
<script
  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
  crossorigin="anonymous"
></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
  crossorigin="anonymous"
></script>
</html>