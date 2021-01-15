<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tabbed Content</title>
	<style type="text/css">
		h1 {
			text-align: center;
			margin-top: 4rem;
		}
		body {
			background: #f0f0f0;
		}
		.tab-wrapper {
			width: 70%;
			margin: 2% auto;
			padding: 1rem;
			box-sizing: border-box;
			border: 1px solid #ddd;
			background: #fff;
		}
		.tab-header {
			display: flex;
		}
		.tab-header-item {
			cursor: pointer;
			padding: 0.9rem 1.2rem;
			border-top: 1px solid #999;
			border-left: 1px solid #999;
			border-right: 1px solid #999;
		}
		.tab-header-item:hover, .tab-header .active {
			background: #ddd;
		}
		.tab-content {
			padding: 1rem;
			border: 1px solid #999;
		}
		.tab-content-item {
			display: none;
		}
		.tab-content .active {
			display: block;
		}
	</style>
</head>
<body>
	<h1>Tabbed Content</h1>
	<div class="tab-wrapper">
		<div class="tab-header">
			<a onclick="openTab(this, 'tab1')" class="tab-header-item active">Tab 1</a>
			<a onclick="openTab(this, 'tab2')" class="tab-header-item">Tab 2</a>
			<a onclick="openTab(this, 'tab3')" class="tab-header-item">Tab 3</a>
		</div>
		<div class="tab-content">
			<div class="tab-content-item active" tab="tab1">
				Gingerbread muffin gummies gingerbread macaroon. Lollipop candy applicake toffee faworki. Bear claw topping jelly toffee toffee powder tiramisu candy chupa chups. Chupa chups dragee icing applicake chupa chups dessert. Croissant jelly faworki marzipan tootsie roll marshmallow. Marshmallow toffee sweet roll fruitcake.
			</div>
			<div class="tab-content-item" tab="tab2">
				Chocolate faworki croissant brownie halvah macaroon gummi bears wypas. Chupa chups icing gummies pudding dessert carrot cake. Cupcake jelly beans sweet roll icing ice cream apple pie tootsie roll gummi bears marzipan. Brownie gummies chupa chups pie. Cupcake jujubes topping.
			</div>
			<div class="tab-content-item" tab="tab3">
				Cheesecake jelly beans ice cream lollipop sweet pastry. Chupa chups dessert cheesecake sesame snaps. Cookie ice cream candy canes pastry cake muffin. Icing chocolate sweet gummi bears powder oat cake oat cake lemon drops.
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function openTab(e, tab) {
			var tabHeaders = document.getElementsByClassName('tab-header-item');
			var tabContents = document.getElementsByClassName('tab-content-item');

			for (var i=0; i<tabHeaders.length; i++) {
				tabHeaders[i].classList.remove('active')
			}

			e.classList.add('active')

			for (var i=0; i<tabContents.length; i++) {
				tabContents[i].classList.remove('active')

				if (tabContents[i].getAttribute('tab') == tab) {
					tabContents[i].classList.add('active');
				}
			}
		}
	</script>
</body>
</html>
