<html>
   <head>
      <title>Fruits</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      <link rel = "stylesheet" href = "https://www.w3schools.com/lib/w3.css">
      <link rel="stylesheet" type="text/css" href="css/product.css">
      <link rel="stylesheet" type="text/css" href="css/featuredproduct.css">
   </head>
   
<body style="background-color:#CCEEFF;">
      <header class = "w3-container w3-red">
         <?php include('header.php');?>
      </header>
     
     <!-- Featured Prdocut -->
      <div class = "w3-container w3-border">
      <center><h3 >Featured Products</h3></center>
      <div style="position:relative">
	<div id="slider-container" class="slider">
	<div class="slide">
			<img src="images/apple.jpg"  alt="">
 	</div>

	<div class="slide">
			<img src="images/orange.jpg" alt="">
	</div>
	<div class="slide">
			<img src="images/pineapple.jpg" alt="">
	</div>
	<div class="slide">
			<img src="images/papaya.jpg" alt="">
	</div>
	<div class="slide">
			<img src="images/guava.jpg" alt="">
	</div>
	<div class="slide">
			<img src="images/plum.jpg" alt="">
	</div>
	<div class="slide">
			<img src="images/peach.jpg" alt="">
	</div>
	<div class="slide">
			<img src="images/mango.jpg" alt="">
	</div>
	<div class="slide">
			<img src="images/lemon.jpg" alt="">
	</div>
	<div class="slide">
			<img src="images/kivi.jfif" alt="">
	</div>
	<div class="slide">
			<img src="images/grapes.jpg" alt="">
	</div>
	<div class="slide">
			<img src="images/banana.jfif" alt="">
	</div>
	<div class="slide">
			<img src="images/strawberry.jpg" alt="">
	</div>
	<div class="slide">
			<img src="images/cherry.jpg" alt="">
	</div>
	<div class="slide">
			<img src="images/fig.jpg" alt="">
	</div>
	<div class="slide">
			<img src="images/custardapple.jpg" alt="">
	</div>
	<div onclick="prev()" class="control-prev-btn">
		 <i class="fas fa-arrow-left"><<</i>
	</div>
	<div onclick="next()" class="control-next-btn">
		<i class="fas fa-arrow-right">>></i>
	</div>
</div>
<div class="overlay"></div>

</div>
<!-- Product -->	
<center><h3 >Product</h3>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/apple.jpg"  class="circular--square">
      <center><img src="images/apple.jpg" class="circular--square" width="10" height="10">
    </a>
    <div class="desc">APPLE <br>Rs.45/-</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/orange.jpg"  class="circular--square">
      <center><img src="images/orange.jpg" class="circular--square" width="10" height="10">
    </a>
    <div class="desc">ORANGE <br>Rs.80/-</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/pineapple.jpg"  class="circular--square">
     <center> <img src="images/pineapple.jpg" class="circular--square" width="10" height="10">
    </a>
    <div class="desc">PINEAPPLE <br>Rs.55/-</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/guava.jpg"  class="circular--square">
      <center><img src="images/guava.jpg" class="circular--square" width="10" height="10">
    </a>
    <div class="desc">GUAVA <br>Rs.60/-</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/papaya.jpg"  class="circular--square">
      <center><img src="images/papaya.jpg" class="circular--square" width="10" height="10">
    </a>
    <div class="desc">PAPAYA <br>Rs.50/-</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/plum.jpg"  class="circular--square">
      <center><img src="images/plum.jpg" class="circular--square" width="10" height="10">
    </a>
    <div class="desc">PLUM <br>Rs.70/-</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/peachjpg"  class="circular--square">
      <center><img src="images/peach.jpg" class="circular--square" width="10" height="10">
    </a>
    <div class="desc">PEACH <br>Rs.65/-</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/mango.jpg"  class="circular--square">
      <center><img src="images/mango.jpg" class="circular--square" width="10" height="10">
    </a>
    <div class="desc">MANGO<br>Rs.40/-</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/kivi.jfii"  class="circular--square">
      <center><img src="images/kivi.jfif" class="circular--square" width="10" height="10">
    </a>
    <div class="desc">KIVI<br>Rs.55/-</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/grapes.jpg"  class="circular--square">
      <center><img src="images/grapes.jpg" class="circular--square" width="10" height="10">
    </a>
    <div class="desc">GRAPES <br>Rs.30/-</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/banana.jfif"  class="circular--square">
      <center><img src="images/banana.jfif" class="circular--square" width="10" height="10">
    </a>
    <div class="desc">BANANA <br>Rs.20/-</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/lemon.jpg"  class="circular--square">
      <center><img src="images/lemon.jpg" class="circular--square" width="10" height="10">
    </a>
    <div class="desc">LEMON <br>Rs.10/-</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/strawberry.jpg"  class="circular--square">
      <center><img src="images/strawberry.jpg" class="circular--square" width="10" height="10">
    </a>
    <div class="desc">STRAWBERRY <br>Rs.85/-</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/fig.jpg"  class="circular--square">
      <center><img src="images/fig.jpg" class="circular--square" width="10" height="10">
    </a>
    <div class="desc">FIG <br>Rs.50/-</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/cherry.jpg"  class="circular--square">
      <center><img src="images/cherry.jpg" class="circular--square" width="10" height="10">
    </a>
    <div class="desc">CHERRY <br>Rs.75/-</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/custardapple.jpg"  class="circular--square">
      <center><img src="images/custardapple.jpg" class="circular--square" width="10" height="10">
    </a>
    <div class="desc">CUSTARDAPPLE <br>Rs.60/-</div>
  </div>
</div>
<div class="clearfix"></div>
<div style="padding:6px;">
</div>

<script type="text/javascript" src="js/featuredproduct.js"></script> 
