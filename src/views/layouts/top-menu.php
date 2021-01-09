<?php
	use yii\helpers\Html;
	use app\models\CatalogSearch;
	use yii\widgets\Menu;
	use yii\widgets\ActiveForm;

	$menu = [
		'Пункт1' => '',
		'Пункт2' => '',
	];
?>

<div class="top-menu">
	<div class="container">
		<div class="row">
			<ul class="top-memu-list">
				<li>
					<a href="/">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li>
					  <a href="/about.html">О компании</a>
				</li>
				<li>
					  <a href="/catalog">Продукция</a>
				</li>
				<li>
					  <a href="/news">Новости</a>
				</li>
				<li>
					  <a href="/sales">Акции</a>
				</li>
				<li>
					<a href="/fotogalereya">Фотогалерея</a>
				</li>
				<li>
					<a href="/3d-models">3D-модели</a>
				</li>
			</ul>
		</div>
	</div>
</div>
		
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="logo">
				<a href="/">
					<img src="images/logo.png" alt="Логотип" />
				</a>
			</div>
			<div class="address">
				МО, г. Подольск,
				поселок Подольской МИС,
				ул. Академика Горячкина, д. 120 А
			</div>
		</div>
		<div class="col-sm-6">
			<h1 class="main_h1">Строительные материалы оптом</h1>
			<?= Html::beginForm(['/search'], 'post', ['class' => 'search-wrap']); ?>
			<?= Html::input('text', 'search', '', ['class' => 'search', 'placeholder' => 'Поиск строительных материалов']) ?>
			<?= Html::submitButton('', ['class' => 'btn-search']) ?>
			<?= Html::endForm(); ?>

		</div>
		<div class="col-sm-3 right">
			<div class="phone"><span>8(495) </span>123-45-67</div>
			<div class="work-time-cap">Время работы:</div>
			<div class="work-time"><i class="fa fa-clock clock" aria-hidden="true"></i>9:00 - 18:00</div>
		</div>
	</div>
	<ul class="second-menu row">
		<li class="col-md-3">
			<?= Menu::widget([
				'items' => $menu, 
				'options' => [
					'class' => 'catalog'
				], 
				'activeCssClass'=>'active'
			]); ?>
		</li>
		<li class="col-md-3"><a href="/contacts.html">Контакты</a></li>
		<li class="col-md-3"><a href="/partner.html">Партнерская программа</a></li>
		<li class="col-md-3 call-back"><a>Оставить заявку</a></li>
	</ul>
</div>