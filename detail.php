<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Product Detail</title>
    <style>
        #proPic {
            height: 288px;
            width: 288px;

        }
        #detail{
            padding-top: 10rem;
        }
    </style>
</head>

<body>

    <?php
        include 'connect.php';
        $product_id = $_REQUEST['p_id'];
        $sql = 'select * from product where p_id='.$product_id.'';
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);  
      ?>
    <div class="container">
        <!-- nav -->
        <div class="row" id='nav'>
            <div class="col-12">
                <nav class="navbar navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">
                        <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30"
                            class="d-inline-block align-top" alt="" />
                        SShop
                    </a>
                </nav>
            </div>
        </div>
        <!-- end nav -->

        <!-- detail -->
        <div class="row" id='detail'>
            <div class="col-6">
                <img id='proPic' src=<?php echo 'img/'.$row['p_pic'];?> alt="">
            </div>
            <div class="col-6">
                <h1><?php echo $row['p_name'];?></h1>
                <h4><?php echo $row['p_price'];?></h4>
                <a href=<?php echo 'cart.php?p_id='.$row['p_id'].'&&action=add'?> class="btn btn-info">เพิ่มในตะกร้า</a>
            </div>

        </div>
        <!-- end detail -->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>