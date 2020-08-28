<?php
    session_start();
    include 'connect.php';
    if($_REQUEST['action']=='success'){
        unset($_SESSION['cart']);
    }

?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <title>Document</title> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  </head>
  <body>

    <script>
      Swal.fire({
        title: "ดำเนินการสั่งซื้อเรียบร้อย",
        icon: "success",
        confirmButtonText: "OK",
        onClose:()=>{
            window.location.assign('index.php');
        }
      });
    </script>
  </body>
</html>
