<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSAP Carousel Slider</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="app">
		
	<nav class="navbar navbar-expand-lg">
		<div class="container lg-12 md-4 sm-6" style="height:20vw;"> 

	  <ul class="navbar-nav navbar-brand text-white"style="display:flex;align-content: center;align-items:center;padding:1rem;gap:12rem;font-size:25px;margin-top:-430px;list-style-type: none;">
	  	<a class="navbar-brand " style="text-decoration: none;list-style-type: none;" href="Home.php"><img src="photos/Jays.gif"/ style="border-radius:50%;height:100px;width:120px;"></a>
	  	<li>
	  		<a href="Home.php" style="text-decoration: none; color:white;" class="text-white">Home</a>
	  	</li>
	  	<li>
	  		<a href="Signup.php"style="text-decoration: none; color:white; color:white;"class="text-white">SignUp</a>
	  	</li>
	  	<li>
	  		<a href="Login.php"style="text-decoration: none; color:white; color:white; color:white;"class="text-white">Login</a>
	  	</li>
	  	<li>
	  		<a href="About.php"style="text-decoration: none; color:white; color:white; color:white; color:white;"class="text-white">About</a>
	  	</li>
	  	<li>
	  		<a href="Help.php"style="text-decoration: none; color:white;"class="text-white">Help</a>
	  	</li>
	  </ul>	
	  </div>
	</nav>


	<div class="cardList">
		<button class="cardList__btn btn btn--left">
			<div class="icon">

				<svg>
					<use xlink:href="#arrow-left"></use>
				</svg>
			</div>
		</button>


		<div class="cards__wrapper">
			<div class="card current--card">
				<div class="card__image">
					<img src="https://images.unsplash.com/photo-1528806290983-2c003d438fb3" alt="" />
				</div>
			</div>

			<div class="card next--card">
				<div class="card__image">
					<img src="https://images.unsplash.com/photo-1530999811698-221aa9eb1739" alt="" />
				</div>
			</div>

			<div class="card previous--card">
				<div class="card__image">
					<img src="https://images.unsplash.com/photo-1530738270955-2ed78de5c2a9" alt="" />
				</div>
			</div>
		</div>

		<button class="cardList__btn btn btn--right">
			<div class="icon">
				<svg>
					<use xlink:href="#arrow-right"></use>
				</svg>
			</div>
		</button>
	</div>

	<div class="infoList">
		<div class="info__wrapper">
			<div class="info current--info">
				<h1 class="text name">Highlands</h1>
				<h4 class="text location">Scotland</h4>
				<p class="text description">The mountains are calling</p>
			</div>

			<div class="info next--info">
				<h1 class="text name">Machu Pichu</h1>
				<h4 class="text location">Peru</h4>
				<p class="text description">Adventure is never far away</p>
			</div>

			<div class="info previous--info">
				<h1 class="text name">Chamonix</h1>
				<h4 class="text location">France</h4>
				<p class="text description">Let your dreams come true</p>
			</div>
		</div>
	</div>
	<div class="app__bg">
		<div class="app__bg__image current--image">
			<img src="https://images.unsplash.com/photo-1528806290983-2c003d438fb3" alt="" />
		</div>
		<div class="app__bg__image next--image">
			<img src="https://images.unsplash.com/photo-1530999811698-221aa9eb1739" alt="" />
		</div>
		<div class="app__bg__image previous--image">
			<img src="https://images.unsplash.com/photo-1530738270955-2ed78de5c2a9" alt="" />
		</div>
	</div>
</div>
<div class="loading__wrapper">
	<div class="loader--text">Loading...</div>
	<div class="loader">
		<span></span>
	</div>
</div>
<svg class="icons" style="display: none;">
	<symbol id="arrow-left" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
		<polyline points='328 112 184 256 328 400'
					 style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
	</symbol>
	<symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
		<polyline points='184 112 328 256 184 400'
					 style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
	</symbol>
</svg>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>
<script src="script.js"></script>

</body>
</html>