<?php 

//Подключаем класс GalleryAsset, чтоб использовать
use frontend\assets\GalleryAsset; 

//Вызвать метод подключения, он называется register()
//Принимает на вход экземпляр текущего класса View
GalleryAsset::register($this);

$this->registerJsFile('@web/js/gallery/script.js', [
	'depends' => GalleryAsset::className()
]);

?>
 
 
<h1>Gallery</h1>

<div class="portfolioFilter">

	<a href="#" data-filter="*" class="current">All Categories</a>
	<a href="#" data-filter=".people">People</a>
	<a href="#" data-filter=".places">Places</a>
	<a href="#" data-filter=".food">Food</a>
	<a href="#" data-filter=".objects">Objects</a>

</div>

<div class="portfolioContainer">

	<div class="objects">
		<img src="/upload/photos/isotope/watch.jpg" alt="image">
	</div>
	
	<div class="people places">
		<img src="/upload/photos/isotope/surf.jpg" alt="image">
	</div>	

	<div class="food">
		<img src="/upload/photos/isotope/burger.jpg" alt="image">
	</div>
	
	<div class="people places">
		<img src="/upload/photos/isotope/subway.jpg" alt="image">
	</div>

	<div class="places objects">
		<img src="/upload/photos/isotope/trees.jpg" alt="image">
	</div>

	<div class="people food objects">
		<img src="/upload/photos/isotope/coffee.jpg" alt="image">
	</div>

	<div class="food objects">
		<img src="/upload/photos/isotope/wine.jpg" alt="image">
	</div>	
	
	<div class="food">
		<img src="/upload/photos/isotope/salad.jpg" alt="image">
	</div>	
	
</div>

 

 