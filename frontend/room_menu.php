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
    <?php include 'header.php'; 
    
   ?>
    <div>
	    <div class="col-md-8 offset-md-2 col-10" style="">
	    	<ul style="list-style-type: none;">
	    		<div class = "row">
	    		<?php 
	    		for ($i=0; $i < 12; $i++) { ?>
		    		<li class="col-md-4 col-6 card my-2" >
	    			<a href="#">
		    			<img src="/assets/img/2.jpeg" class="col-10 mt-2 offset-1">
		    			<center>
		    			<h3> <?php echo $i; ?>th room </h3>
		    			<p><?php echo $i; ?>th price</p>
		    			</center>
			    	</a>
		    		</li>
	    	<?php } ?>
	    		</div>
	    	</ul>
	    </div>
    </div>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>