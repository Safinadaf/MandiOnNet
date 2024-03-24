<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mandi_On_Net Store</title>

<link rel="icon" type="image/icon" href="image/favicon.png">

<!--Code For font awesome cdn  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Code For font awesome cdn  -->

<!-- code for linking css file-->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--Code For font awesome cdn  -->



<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>


<meta name="viewport" content="width=device-width,initial-scale=1.0">


</head>
<body>



<!--header section-->

<header class="header">
	<a href="#" class="logo"><i class="fa fa-shopping-basket"></i> Mandi On Net
	</a>

<nav class="navbar">
	<a href="#home">home</a>
	<a href="#features">features</a>
	<a href="#product">product</a>
	<a href="#categories">categories</a>
	<a href="#suppoters">Suppoters</a>
	<a href="#shop">Shop</a>
</nav>

<div class="icons">
	<div class="fa fa-bars" id="menu-btn"></div>
	<div class="fa fa-search" id="search-btn"></div>
	<div class="fa fa-shopping-cart" id="cart-btn"></div>
	<div class="fa fa-user" id="login-btn"></div>
</div>

<form class="search-form">
	<input type="search" id="search-box" placeholder="Search Here ........">
	<label for="search-box" class="fa fa-search"></label>
</form>



<div class="shopping-cart">
	<div class="box">
		<i class="fa fa-trash"></i>
		<img src="image/cart-img-1.png">
		<div class="content">
			<h3>Watermelon</h3>
			<span class="Price">5rs/-</span>
			<span class="Quantity">Qty : 3</span>

		</div>
	</div>



	<div class="box">
		<i class="fa fa-trash"></i>
		<img src="image/cart-img-2.png">
		<div class="content">
			<h3>Onions</h3>
			<span class="Price">20rs/-</span>
			<span class="Quantity">Qty : 2kg</span>

		</div>
	</div>

	<div class="total"> total : 85rs/-</div>
	<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" class="btn">CheckOut</a>


	</div>


<form class="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<h3>login Now</h3>
	<input type="text" name="username" placeholder="Your Username" class="box">
	<input type="password" name="password" placeholder="Your Password" class="box">
	<p>Forgot Your Password <a href="#">Click Here</a></p>
	<p>Dont Have an Account <a href="/grocessary/Responsive%20Registration%20Form/Farmer%20registration/">Create Now</a></p>
	<p>Farmer registration-Form <a href="/grocessary/Responsive%20Registration%20Form/Responsive%20Registration%20Form/index.php">Click Here</a></p>


	<input type="Submit" name="login" value="Login Now" class="btn">

		
</form>


</header>

<!--header section-->

<!--banner section-->
<section class="home" id="home">
	<div class="content">
		<h3>Fresh And <span>Organic</span> Products For You</h3>>
		<p>products as fresh as in farms and shopping as easy as in your local market. Bridging
		the gap between producers and consumers.</p>>

		<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" class="btn">shop now</a>
	</div>>
</section>>

<!--our features section section-->
<section class="features" id="features">
	<h1 class="heading"> our <span>features</span> </h1>

	<div class="box-container">
		<div class="box">
			<img src="image/feature-img-1.png">>
			<h3>fresh and organic</h3>

			<p>The best food for the best price.Only the best quality food for you.</p>

			<a href="#" class="btn">read more</a>
		</div>

		<div class="box">
			<img src="image/feature-img-2.png">>
			<h3>free delivery</h3>

			<p>Delivered fresh to your door.Your grocery shopping list is off the to-do list.</p>

			<a href="#" class="btn">read more</a>
		</div>

		<div class="box">
			<img src="image/feature-img-3.png">>
			<h3>easy payments</h3>

			<p>Hazel free,Cash Free Payment Methods Available</p>

			<a href="#" class="btn">read more</a>
		</div>


	</div>


</section>
<!--our features section-->



<!--our products section-->
<section class="product" id="product">
	<h1 class="heading"> our <span>product</span></h1>

	<div class="swiper product-slider">

		<div class="swiper-wrapper">
			<div class="swiper-slide box">
				<img src="image/product-1.png">
				<h1>fresh orange</h1>
				<div class="Price"> 30rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>




			<div class="swiper-slide box">
				<img src="image/product-9.png">
				<h1>fresh Apples</h1>
				<div class="Price"> 40rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>



			<div class="swiper-slide box">
				<img src="image/product-11.png">
				<h1> Bananas </h1>
				<div class="Price"> 20rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="image/product-13.png">
				<h1>fresh Grapes</h1>
				<div class="Price"> 25rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="image/product-12.png">
				<h1> Chickoo</h1>
				<div class="Price"> 25rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>


			<div class="swiper-slide box">
				<img src="image/product-14.png">
				<h1>Sweet Lime</h1>
				<div class="Price"> 35rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>

		</div>
	</div>

	<!---Second class---->

	<div class="swiper product-slider">

		<div class="swiper-wrapper">
			<div class="swiper-slide box">
				<img src="image/product-4.png">
				<h1>fresh Cabage</h1>
				<div class="Price"> 15rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>




			<div class="swiper-slide box">
				<img src="image/product-15.png">
				<h1> Tomato </h1>
				<div class="Price"> 20rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="image/product-5.png">
				<h1> Potatoes</h1>
				<div class="Price"> 10rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="image/product-2.png">
				<h1>fresh Onions</h1>
				<div class="Price"> 20rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="image/product-8.png">
				<h1>fresh Lemons</h1>
				<div class="Price"> 2rs per/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>


			<div class="swiper-slide box">
				<img src="image/product-7.png">
				<h1>Carrots</h1>
				<div class="Price"> 25rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html"
				 class="btn">add to cart</a>
			</div>

		</div>
	</div>
	<!---Third class---->

	<div class="swiper product-slider">

		<div class="swiper-wrapper">
			<div class="swiper-slide box">
				<img src="image/product-16.png">
				<h1> Capsicum </h1>
				<div class="Price"> 15rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="image/product-17.png">
				<h1> Peas </h1>
				<div class="Price"> 20rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="image/product-20.png">
				<h1> Coriander</h1>
				<div class="Price"> 10rs per/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="image/product-21.png">
				<h1>Green Chillies</h1>
				<div class="Price"> 5rs per/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="image/product-10.png">
				<h1>Garlic</h1>
				<div class="Price"> 20rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>


			<div class="swiper-slide box">
				<img src="image/product-19.png">
				<h1>Ginger</h1>
				<div class="Price"> 5rs per/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>
		</div>
	</div>
<!---Fourth class------>
	<div class="swiper product-slider">

		<div class="swiper-wrapper">
			<div class="swiper-slide box">
				<img src="image/product-22.png">
				<h1> Wheat </h1>
				<div class="Price"> 30rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="image/product-23.png">
				<h1> Rice </h1>
				<div class="Price"> 40rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="image/product-24.png">
				<h1> Jowar</h1>
				<div class="Price"> 28.50rs per/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="image/product-26.png">
				<h1> Shabudana</h1>
				<div class="Price"> 35rs per/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="image/product-27.png">
				<h1>Corn Grains</h1>
				<div class="Price"> 37rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>
		</div>
	</div>
			
<!---Fourth class------>

<!---fifth class---->
	<div class="swiper product-slider">

		<div class="swiper-wrapper">
			

			<div class="swiper-slide box">
				<img src="image/product-32.png">
				<h1>  Cumin Seeds</h1>
				<div class="Price"> 40rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="image/product-29.png">
				<h1> Chilli Powder</h1>
				<div class="Price"> 55rs per/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="image/product-28.png">
				<h1> Turmeric</h1>
				<div class="Price"> 50rs per/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="image/product-31.png">
				<h1>Cloves</h1>
				<div class="Price"> 40rs per kg/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
				class="btn">add to cart</a>
			</div>
		</div>
	</div>

			


<!--fifth class------>
</section>




		</div>
	</div>

</section>
<!--our products section-->

<!--our categories section-->
<section class="categories" id="categories">
	<h1 class="heading"> product <span>Categories</span></h1>
	<div class="box-container">
		<div class="box">
			<img src="image/cat-1.png">
			<h3>Vegetables</h3>
			<p>Upto 10% off</p>
			<a href="#" class="btn">Shop now</a>
		</div>
		<div class="box">
			<img src="image/cat-2.png">
			<h3>Fruits</h3>
			<p>Upto 10% off</p>
			<a href="#" class="btn">Shop now</a>
		</div>

		<div class="box">
			<img src="image/cat-9.png">
			<h3>Grains</h3>
			<p>Upto 10% off</p>
			<a href="#" class="btn">Shop now</a>
		</div>

		<div class="box">
			<img src="image/cat-8.png">
			<h3>Spices</h3>
			<p>Upto 10% off</p>
			<a href="#" class="btn">Shop now</a>
		</div>
	</div>
</section>
<!--our categories section-->

<!--our suppoters section-->
<section class="suppoters" id="suppoters">
	<h1 class="heading"> Our <span>suppoters</span></h1>

	<div class="swiper suppoters-slider">
		<div class="swiper-wrapper">
			<div class="swiper-slide box">
				<img src="image/supporter-1.jpg">
				<p>Shop happily with us for your family. Every product is double checked before dispatch,So no default products </p>
				<h3>Dilshad Fashion Gallery </h3>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
			</div>

			<div class="swiper-slide box">
				<img src="image/supporter-2.jpg">
				<p>We Help you to build your buisness on higher level. embedded software service & artificial intelligence since 2020 </p>
				<h3>Sara-Infotech </h3>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
			</div>

			<div class="swiper-slide box">
				<img src="image/supporter-3.png">
				<p>We help students to build there future with teaching programming languages. Students enjoy are  classes very much</p>
				<h3>Pioneer Computer's </h3>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
			</div>
		</div>
	</div>

</section>
<!--our suppoters section-->

<!--our shop section section-->

<section class="shop" id="shop">
	<h1 class="heading"> our <span>Shop</span> </h1>

	<div class="box-container">
		<div class="box">
			<img src="image/shopicon-1.png">>
			<h3>Add to Cart</h3>
			<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
			class="btn" >Shop Now</a>
			
		</div>

		<div class="box">
			<img src="image/shopicon-2.png">>
			<h3>Add Products</h3>
			<a href="file:///D:/Cssmegaproject/grocessary/Add%20product-Form/Add%20product-Form/addproduct.html"
			 class="btn">Shop Now</a>
		</div>

		<div class="box">
			<img src="image/shopicon-3.png">>
			<h3>My Cart</h3>

			<a href="file:///D:/Cssmegaproject/grocessary/addtocardv2-main/addtocardv2-main/index.html" 
			class="btn">Shop Now</a>
		</div>


	</div>


</section>
<!--our shop section-->

<!--our Footer section-->
	<section class="Footer">
	<div class="box-container">
		<div class="box">
		  <h3> Mandi <i class="fa fa-shopping-basket"></i></h3>	
		  <p>
		  	Feel Free To Folow Us On Our Social Media Handlers.All The Links Are Given Below.
		  </p>

		  <div class="share">
		  	<a href="#" class="fa fa-facebook"></a>
		  	<a href="#" class="fa fa-twitter"></a>
		  	<a href="#" class="fa fa-instagram"></a>
		  	<a href="#" class="fa fa-linkedin"></a>

		  </div>
		</div>

		<div class="box">
			<h3> Contact Info </h3>	
		 	<a href="#" class="links"><i class="fa fa-phone"></i> +91 07942627311</a>
		 	<a href="#" class="links"><i class="fa fa-phone"></i> +91 9012243456</a>
		 	<a href="#" class="links"><i class="fa fa-envelope"></i>https://www.Sarainfotech.com</a>
		 	<a href="#" class="links"><i class="fa fa-map-marker"></i> kolhapur,Maharashtra,India</a>	

		 </div>

		 <div class="box">
			<h3> Contact Info </h3>	
		 	<a href="#" class="links"><i class="fa fa-arrow-right"></i> Home </a>
		 	<a href="#" class="links"><i class="fa fa-arrow-right"></i> Features </a>
		 	<a href="#" class="links"><i class="fa fa-arrow-right"></i> Products </a>
		 	<a href="#" class="links"><i class="fa fa-arrow-right"></i> Categories </a>
		 	<a href="#" class="links"><i class="fa fa-arrow-right"></i> suppoters </a>
		 </div>

		 <div class="box">
			<h3> NewsLatter </h3>	
		 	<p>
		 		Subscribe for latest update.
		 	</p>
		 	<input type="email" placeholder="Your Email" class="email">
		 	<input type="submit" value="Subscribe" class="btn ">
		 	<img src="image/payment.png" class="payment-img">
		 </div>		
	</div>

<div class="credit"> Created By<span> Sara Infotech .  </span>  All Rights Reserved.
	</div>
	</section>
<!--our Footer section-->


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>

</body>
</html>

<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
$username = $_POST["username"];
$password = $_POST["password"];


$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "grocerydb";
$conn = mysqli_connect($servername, $username, $pass, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

 $sql = "SELECT username, password FROM farmer_registration WHERE username='$username' AND password='$password'";

   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['password'] === $password) {

                // echo "Logged in Successfully...!";
                echo "<script>alert('Logged in');</script>";

            }
            else if ($row['username'] != $username && $row['password'] != $password) {
            	  echo "<script>alert('Please register First');</script>";
            }
            else{
            	exit();
            }

$conn->close();
}
}
?>