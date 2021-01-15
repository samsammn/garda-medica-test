<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Image Rotator</title>
	<style type="text/css">
		h1 {
			text-align: center;
			margin-top: 4rem;
		}
		body {
			background: #f0f0f0;
		}
		.image-wrapper {
			width: 450px;
			margin: 2% auto;
			padding: 1rem;
			border: 1px solid #ddd;
			background: #fff;
		}
		.image-rotator-item {
			display: none;
			position: relative;
			overflow: hidden;
			-webkit-animation-name: fade;
			-webkit-animation-duration: 1.5s;
			animation-name: fade;
			animation-duration: 1.5s;
		}
		.image-rotator-item.active {
			display: block;
		}
		.image-info {
			left: 0;
			right: 0;
			bottom: 5px;
			padding: 1rem;
			position: absolute;
			background: rgba(0, 0, 0, 0.4);
		}
		.image-info h3 {
			margin: 0;
			color: #fff;
			-webkit-animation-name: leftToRight;
			-webkit-animation-duration: 2s;
			animation-name: leftToRight;
			animation-duration: 2s;
		}
		.image-info div {
			color: #eee;
			-webkit-animation-name: bottomToTop;
			-webkit-animation-duration: 0.5s;
			animation-name: bottomToTop;
			animation-duration: 0.5s;
		}
		@-webkit-keyframes fade {
			from {opacity: .4} 
			to {opacity: 1}
		}
		@keyframes fade {
			from {opacity: .4} 
			to {opacity: 1}
		}
		@-webkit-keyframes leftToRight {
			from {margin-left: -100px} 
			to {margin-left: 0px}
		}
		@keyframes leftToRight {
			from {margin-left: -100px} 
			to {margin-left: 0px}
		}
		@-webkit-keyframes bottomToTop {
			from {margin-bottom: -100px} 
			to {margin-bottom: 0px}
		}
		@keyframes bottomToTop {
			from {margin-bottom: -100px} 
			to {margin-bottom: 0px}
		}
	</style>
</head>
<body>
	<h1>Image Rotator</h1>
	<div class="image-wrapper">
		<div class="image-rotator-item active">
			<img src="http://frontend.gardamedica.id/img/kat_2.jpg">
			<div class="image-info">
				<h3>Monkey D Luffy</h3>
				<div>Haki gear 5?</div>
			</div>
		</div>
		<div class="image-rotator-item">
			<img src="http://frontend.gardamedica.id/img/kat_3.jpg">
			<div class="image-info">
				<h3>Naruto</h3>
				<div>Sage Mode</div>
			</div>
		</div>
		<div class="image-rotator-item">
			<img src="http://frontend.gardamedica.id/img/kat_4.jpg">
			<div class="image-info">
				<h3>Roronoa Zoro</h3>
				<div>Where am I?</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var counterImage = 1;
		var imageRotators = document.getElementsByClassName('image-rotator-item');

		setInterval(() => {
			if (counterImage === 3) {
				counterImage = 0;
			}
			counterImage++;

			for (var i=0; i<imageRotators.length; i++) {
				imageRotators[i].classList.remove('active');
			}

			imageRotators[counterImage-1].classList.add('active');

		}, 3000)
	</script>
</body>
</html>
