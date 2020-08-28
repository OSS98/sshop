<?php
    session_start();
    include 'connect.php';
    $p_id = $_REQUEST['p_id'];
    if($_REQUEST['action']=='add'){
        // echo 'add complete';
        if(isset($_SESSION['cart'][$p_id])){
            $_SESSION['cart'][$p_id]++;
        }else{
            $_SESSION['cart'][$p_id]=1;
        }
    }
    // if($_REQUEST['action']=='success'){
    //     unset($_SESSION['cart']);
    //     header('location:alert.html');
    // }
    // print_r($_SESSION)
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Your Cart</title>
</head>

<body>
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
        <!-- cart detail -->
        <div class="row justify-content-center">
            <div class="col-8  text-center" style="padding-top: 3rem;">
                <h1>รายละเอียดการสั่งซื้อ</h1>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">ราคา</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total=0;
                            foreach ($_SESSION['cart'] as $p_id => $qty){
                                $sql = 'select * from product where p_id='.$p_id.'';
                                $result = mysqli_query($conn,$sql);
                                $row = mysqli_fetch_array($result);

                                $sum_money = $row['p_price'] * $qty;
                                $total+=$sum_money;
                                echo '<tr>
                                <th scope="row">'.$row['p_id'].'</th>
                                <td>'.$row['p_name'].'</td>
                                <td>'.$row['p_price'].' บาท</td>
                                <td>'.$qty.' ชิ้น</td>
                                <td>'.$sum_money.'บาท</td>
                            </tr>';
                            }
                            echo '<tr scope="row">
                            <td></td>
                            <td></td>
                            <td></td>
                            <th>รวมทั้งสิ้น</th>
                            <td>'.$total.' บาท</td>
                            </tr>';
                        ?>

                    </tbody>
                </table>

                <a href="index.php" class="btn btn-info">Back to Shop</a>
                <a href="alert.php?action=success" class="btn btn-info">Buy</a>
            </div>
        </div>
        <!-- end cart detail -->
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