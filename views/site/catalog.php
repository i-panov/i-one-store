<?php require 'template-parts/views/blocks/c-breadcrumbs.php'; ?>

<div class="container pb-7">
	<h1 class="c-title">Продажа новых автомобилей в Санкт-Петербурге</h1>
	<div class="row">
		<div class="col-auto">
			<p class="c-text c-text--fz rare-color pt-3 mb-5">Показаны 4722 автомобиля</p>
			<?php require 'template-parts/views/blocks/c-sidebar.php'; ?>
		</div>
		<div class="col">
			<div class="row row--1 align-items-center justify-content-between">
				<div class="col-auto">
					<!-- c-text -->
					<div class="c-text c-text--fz d-flex align-items-center">
						<span class="d-block rare-color mr-2">Сортировать по:</span>

						<div>
							<select class="js-c-select c-select c-select--simple simple">
							  <?php for ($i=0; $i < 10; $i++) { ?>
							  	<option value="test<?=$i ?>">популярности<?=$i ?></option>
							  <?} ?>
							</select>
						</div>
					</div>
				</div>
				<div class="col-auto d-flex">
					<p class="mr-2">Показать:</p>
					<ul class="row row--1">
						<li class="col-auto"><a href="" class="default-color-primary color-hover">12</a></li>
						<li class="col-auto"><a href="" class="default-color-primary color-hover font-weight-700">24</a></li>
						<li class="col-auto"><a href="" class="default-color-primary color-hover">48</a></li>
					</ul>
				</div>
			</div>
			<div class="row  row--1 pt-6 pb-5 align-items-center justify-content-between">
				<div class="col-auto">
					<div class="d-flex align-items-center c-text c-text--fz"><a href="" class="c-dagger c-dagger--bg"></a><span class="pl-2">Hyundai</span></div>
				</div>
				<div class="col-auto">
					<a href="" class="c-reset default-color-primary color-hover">
						Сбросить фильтр
						<?php require 'images/icons/icon-refresh.svg'; ?>
					</a>
				</div>
			</div>
			<div class="row row--1">
				<?php for ($i=0; $i < 10; $i++) { ?>
					<div class="col-4 mb-3">
						<?php require 'template-parts/views/blocks/c-cart.php'; ?>
					</div>
				<? } ?>

			</div>
			<div class="row row--1 py-5 align-items-center justify-content-between">
				<div class="col-auto">
					<p class="c-text c-text--fz rare-color">Показаны 4722 автомобиля</p>
				</div>
				<div class="col-auto d-flex">
					<p class="mr-2">Показать:</p>
					<ul class="row row--1">
						<li class="col-auto"><a href="" class="default-color-primary color-hover">12</a></li>
						<li class="col-auto"><a href="" class="default-color-primary color-hover font-weight-700">24</a></li>
						<li class="col-auto"><a href="" class="default-color-primary color-hover">48</a></li>
					</ul>
				</div>
			</div>
			<div class="c-pagination">
				<a href="" class="c-pagination__prev"><?php require $src.'/images/views/blocks/c-pagination/block-object.svg'; ?></a>
				<ul class="c-pagination__list">
					<li><a href="" class="c-pagination__link active">1</a></li>
					<li><a href="" class="c-pagination__link">2</a></li>
					<li><a href="" class="c-pagination__link">3</a></li>
				</ul>
				<a href="" class="c-pagination__next"><?php require $src.'/images/views/blocks/c-pagination/block-object.svg'; ?></a>
			</div>
		</div>
	</div>
</div>
<?php require 'template-parts/views/blocks/c-loader.php'; ?>
