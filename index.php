<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <title>SShop</title>

    <style>
        #product{
            padding-bottom: 1rem;
        }
        #nav{
            padding-bottom: 1rem;
        }
        #proPic{
            height: 150px;
            width: 150px;
          
        }
    </style>
  </head>
  <body>
    <div class="container bg-info">
        <!-- nav -->
      <div class="row" id='nav'>
        <div class="col-12">
          <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
              <img
                src="/docs/4.0/assets/brand/bootstrap-solid.svg"
                width="30"
                height="30"
                class="d-inline-block align-top"
                alt=""
              />
              SShop
            </a>
          </nav>
        </div>
      </div>
      <!-- end nav -->

      <!-- carousel -->
      <div class="row">
        <div class="col-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/Ad.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/Ad.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/Ad.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
      </div>
      <!-- end causel -->
      <hr>
      <?php include 'connect.php' ?>
      <!-- catalog -->
        <div class="row ">
          <?php  
            $sql = 'select * from product';
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result)){
              echo '<div class="col-6 col-sm-4 text-center" id="product">
                <div class="card" style="width:100%;"><a href="detail.php?p_id='.$row['p_id'].'">
                    <img id="proPic" class="card-img-top" src="img/'.$row['p_pic'].'" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">'.$row['p_name'].'</h5>
                      <p class="card-text">'.$row['p_price'].'</p>
                    </div>
                </div></a>
                </div>';
            }
          ?>


      <!-- end catalog -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
