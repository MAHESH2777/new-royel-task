<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include 'config.php';?>
  <!-- Start your project here-->
  <form action="" method="POST">
  <div style="height: 100vh">
    <div class="container pt-4">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="card">

            <h5 class="card-header info-color white-text text-center py-4">
              <strong>oder item</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">

              <!-- Form -->
              <form class="text-center" style="color: #757575;" action="#!">

                <!-- Name -->
                <div class="md-form mt-3">
                  <input type="text" name="productname" id="materialContactFormName" class="form-control">
                  <label for="materialContactFormName">Product Name</label>
                </div>

             

                <!--Message-->
                <div class="md-form">
                  <textarea id="materialContactFormMessage" name="text" class="form-control md-textarea" rows="3"></textarea>
                  <label for="materialContactFormMessage">Message</label>
                </div>
                <div class="stock ml-auto">
                <p>if the item is avalible or not</p>
                  <input name="stock" type="radio" id="materialContactFormName" value="yes">
                  <label for="yes">Yes</label>
                  <br>
                  <input type="radio" name="stock" id="isstokeno" value="no">
                  <label  for="no">No</label>
                  </div>
                  <div class="color">
                  <span>Choose Color</span>
                <select name="color" class="mdb-select">
                  <option value="" disabled>default color</option>
                  <option value="black" selected>black</option>
                  <option value="blue">blue</option>
                  <option value="green">Green</option>
                  <option value="pink">pink</option>
                </select>
               
                  </div>
                  <br>
                  <div class="size">
                  <span>Choose Size</span>
                <select name="size" class="mdb-select">
                  <option value="default" disabled>default sizw</option>
                  <option value="sm" selected>SM</option>
                  <option value="l">L</option>
                  <option value="xl">XL</option>
                  <option value="xxl">XXL</option>
                </select>
               
                  </div>
                  <br>
                  <br>
          
                <!-- Copy -->
                <div class="form-check">
                  <input type="checkbox" name="accept" class="form-check-input" id="materialContactFormCopy">
                  <label class="form-check-label" name="accept" for="materialContactFormCopy">Please conform your oder</label>
                </div>
                <div class="shipping-type md-form">
                <label for="">shipping type</label>
                <input type="text" name="shipping" id="" class="form-control">
                 

                </div>

                <!-- Send button -->
                <button name="submit" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Send</button>

              </form>
              <!-- Form -->

            </div>

          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
    <!-- Material form contact -->

    <!-- Material form contact -->




  </div>
  <!-- End your project here-->
  </form>
  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>

</html>