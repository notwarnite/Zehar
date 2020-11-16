<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    <?php include 'header.php'; ?>
    <div style="background-image: url('./assets/img/2.jpeg');background-repeat: no-repeat;  
    background-attachment: fixed; 
  background-size: cover; height: 690px; background-blend-mode:  "  >
      <div class="offset-md-4 col-md-4 col-8 offset-2 " >
        <div class="row"></div>
        <form style="margin-top: 30%" class="bg-light px-4 py-4 card">

          <div class="row">
          <input type="text" name="name" class="col-12 offset-md-0 col-md-12 my-4 form-control" placeholder="Name"> 
          <input type="number" name="age" class="col-12 offset-md-0 col-md-12 my-4 form-control" placeholder=" Age">
            <input type="number" name="adl" class="col-12 offset-3 offset-md-0 col-md-6 my-2 mx-auto form-control" placeholder=" No. of Adults">
            <input type="number" name="chl" class="col-12 offset-3 offset-md-0 col-md-6 my-2 mx-auto form-control" placeholder=" No. of Children">
          <input type="text" name="phn" class="col-12  offset-md-0 col-md-12 my-4 form-control" placeholder="Phone number">
          </div>
            Dates: 
          <div class="row">
            <input type="date" name="ari" class="col-6 offset-3 offset-md-0 col-md-5 my-1 mx-auto form-control" placeholder="Checkin Date">
            <input type="date" name="dep" class="col-6 offset-3 offset-md-0 col-md-5 my-1 mx-auto form-control" placeholder="Checkout Date">
          </div>
          <br>
          <input type="submit" name="take_res" class="col-4 offset-4 btn btn-primary">
        </form>
      </div>
    </div>

    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>