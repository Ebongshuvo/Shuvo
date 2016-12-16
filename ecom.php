<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/fonts/glyphicons-halflings-regular">
	 


	<!-- <style type="text/css">
		.navbar-default{
			background-color:#fff;
			margin-right: 2cm;
			margin-left: 2cm;
		}
	</style> -->
	<link rel="stylesheet" type="text/css" href="ecom.css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
   <!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

</head>
<body>
	
 <script src="bootstrap/js/bootstrap.min.js"></script>
 <div class="container">
 
<nav class="navbar navbar-default" style="color:red">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button> 
      <a class="navbar-brand" href="#">Shuvo</a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  
     <ul class="nav navbar-nav">
       
         <ul class="dropdown-menu">
           <li><a href="#">Action</a></li>
           <li><a href="#">Another action</a></li>
           <li><a href="#">Something else here</a></li>
           <li role="separator" class="divider"></li>
           <li><a href="#">Separated link</a></li>
           <li role="separator" class="divider"></li>
           <li><a href="#">One more separated link</a></li>
         </ul>
       </li>
     </ul> 
     <form class="navbar-form navbar-left">
       <div class="form-group">
         
       </div>
        
     </form>
     <ul class="nav navbar-nav navbar-right">
        <li><a href="#"> <span class="glyphicons glyphicons-earphone"></span>01747304332</a></li> 
       <li><a href="#">Ebongshuvo@gmail.com</a></li>
       <!-- <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="#">Action</a></li>
           <li><a href="#">Another action</a></li>
           <li><a href="#">Something else here</a></li>
           <li role="separator" class="divider"></li>
           <li><a href="#">Separated link</a></li>
         </ul>
       </li> -->
     </ul>
    <!--  </div>/.navbar-collapse
     </div>/.container-fluid   -->
     
</nav>
 
 <div class="dropdown">
  <button class="dropbtn">Home</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Men</button>
  <div class="dropdown-content">
    <a href="#">Clothing</a>
    <a href="#">Footware</a>
    <a href="#">Watches</a>
    <a href="#">Accessories</a>
  </div>
</div>
  
  <div class="dropdown">
  <button class="dropbtn">Women</button>
  <div class="dropdown-content">
    <a href="#">ethnic ware</a>
    <a href="#">westren ware</a>
    <a href="#">beauty & wellness</a>
    <a href="#">all jewellery</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">kids</button>
  <div class="dropdown-content">
    <a href="#">clothing</a>
    <a href="#">footware</a>
    <a href="#">accessories</a>
    
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">sale</button>
  <div class="dropdown-content">
    <a href="#">Clothing</a>
    <a href="#">Footware</a>
    <a href="#">Watches</a>
    <a href="#">Accessories</a>
  </div>
</div>
  <div class="dropdown">
  <button class="dropbtn">About us</button>
  </div>
  <div class="dropdown">
  <button class="dropbtn">Support</button>
  </div>

   <div class="dropdown">
<form>
<input type="text" required="" onblur="if (this.value == '') {this.value = 'Search...';}" onfocus="this.value = '';" value="Search...">
</form>
</div>


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/fashion1.jpeg" width="100%" alt="shuvo">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="img/fashion2.jpg" width="100%" alt="3D">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="row">
	<div class="col-md-4">
		<img src="img/3.jpg" width="100%" >
		<h2 class="head"> Football</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing, vivamus congue nulla leo, quis imperdiet magna.</p>
	</div>

	<div class="col-md-4">
		<img src="img/7.jpg" width="100%">
		<h2 class="head">Modern Cloths</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing, vivamus congue nulla leo, quis imperdiet magna.</p>
	</div>
	<div class="col-md-4">
		<img src="img/5.jpg" width="100%">
		<h2 class="head">Baggs and accessories</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing, vivamus congue nulla leo, quis imperdiet magna.</p>
	</div>

</div>

<div class="row" style="margin-left:4cm;margin-right:3cm">
	<div class="col-md-4" style="padding-top:1cm">--------------</div>
	<div class="col-md-4"><h1>Product</h1></div>
	<div class="col-md-4" style="padding-top:1cm">--------------</div>
  </div>
  <div class="row ">
  	<div class="col-md-4 boxed">
  		 <img src="img/winter_1.jpeg" width="100%">
  		 <h2>NIKE G87</h2>
  		 <p>The Nike Tailwind Loose Women's Running Tank Top is made with sweat-wicking fabric to help you stay dry and comfortable on your run.</p>
  		 <h4>Price=3000/=</h4>
  	</div>
  	<div class="col-md-4 boxed">
  	     <img src="img/winter_2.jpg" width="100%">
  	     <h2>NIKE I-BEAM SWOOSH</h2>
  	     <p>The Nike Tailwind Loose Women's Running Tank Top is made with sweat-wicking fabric to help you stay dry and comfortable on your run.</p>
  	     <h4>Price=2000/=</h4>

  	 </div>
  	<div class="col-md-4 boxed"> 
  	<img src="img/winter_3.jpeg" width="100%">
  	<h2> NIKE LUX</h2>
  	<p>The Nike Tailwind Loose Women's Running Tank Top is made with sweat-wicking fabric to help you stay dry and comfortable on your run.</p>
  	<h4>Price=4000/=</h4>

  	</div>

  </div>
  <div>
  	<div class="row" style="background-color:#000">
  	<div class="col-md-3">
  		<h2>OUR STORIES</h2>
  		<p>Feel free to visit our stores or contact us.
1401 South Grand Avenue
Los Angeles, CA 90015
(213) 748-2411
100 Fairview Drive
Franklin, VA 23851
(757) 569-6100</p>
</div>
<div class="col-md-3">
	<h2>BLOG POSTS</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed auctor elit.</p>
</div>
 <div class="col-md-3">
   <h2>Support</h2>
 	<ul class="list">
 		<li>Terms & conditions</li>
 		<li>Faq</li>
 	</ul>
 </div>
 <div class="col-md-3"></div>
  	</div>



  </div>
  </div>
 

   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
  
</body>
</html>