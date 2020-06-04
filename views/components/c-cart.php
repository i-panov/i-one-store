<?php
/** @var yii\web\View $this */
/** @var app\models\Car $model */
?>

<div class="c-cart">
	<div class="c-cart__head">
		<div class="c-cart__slider js-c-cart__slider">
			<img src="/images/views/blocks/c-cart/car-1.png" alt="Alt">
			<img src="/images/views/blocks/c-cart/car-3.jpg" alt="Alt">
			<img src="/images/views/blocks/c-cart/car-1.png" alt="Alt">
		</div>
	</div>
	<a href="" class="c-cart__link-block"></a>
	<ul class="c-cart__content">
		<li class="c-cart__item">
			<ul class="row row--1 mb-2">
				<li class="col-auto">
					<a href="#" class="c-cart__color">
						<span style="background-color: #F2994A;"></span><p>Акция</p>
					</a>
				</li>
				<li class="col-auto">
					<a href="#" class="c-cart__color">
						<span style="background-color: #05ACE2;"></span><p>В наличие</p>
					</a>
				</li>
			</ul>
			<h6 class="c-cart__name"><?= $model->brand->name ?></h6>
			<h4 class="c-cart__title mb-2"><?= $model->model->name ?></h4>
			<p class="c-cart__sub-title mb-4">Седан, ӀӀ Рестайлинг</p>
			<ul class="row row--1">
				<li class="col-12 mb-2">
					<div class="c-cart__params">
						<span>
							<img src="/images/views/blocks/c-cart/icon-engine.svg">
						</span>
						<p>2,5 АТ (200 л.с)</p>
					</div>
				</li>
				<li class="col-12 mb-2">
					<div class="c-cart__params">
						<span>
							<img src="/images/views/blocks/c-cart/icon-engine.svg">
						</span>
						<p>XV70</p>
					</div>
				</li>
				<li class="col-6 mb-2">
					<div class="c-cart__params">
						<span>
							<img src="/images/views/blocks/c-cart/icon-engine.svg">
						</span>
						<p><?= $model->engineType->name ?></p>
					</div>
				</li>
				<li class="col-6 mb-2">
					<div class="c-cart__params">
						<span>
							<img src="/images/views/blocks/c-cart/icon-engine.svg">
						</span>
						<p>Автомат</p>
					</div>
				</li>
				<li class="col-6 mb-2">
					<div class="c-cart__params">
						<span>
							<img src="/images/views/blocks/c-cart/icon-engine.svg">
						</span>
						<p><?= $model->driveWheel->name ?></p>
					</div>
				</li>
				<li class="col-6 mb-2">
					<div class="c-cart__params">
						<span>
							<img src="/images/views/blocks/c-cart/icon-engine.svg">
						</span>
						<p>2020</p>
					</div>
				</li>
				<li class="col-auto mb-2">
					<a href="#" class="c-cart__color c-cart__color--primary">
						<span style="background-color: #2D2B4E;"></span><p>Синий</p>
					</a>
				</li>
			</ul>
		</li>
		<li class="c-cart__item">
			<div class="c-cart__price-sale mb-1">- 145 000 <img src="/images/icons/icon-ruble.svg"></div>
			<div class="c-cart__price mb-5">от 2 941 000 <img src="/images/icons/icon-ruble.svg"></div>
			<a href="" class="c-cart__text c-cart__priority">
                <span data-tippy-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis et repudiandae, nihil ipsa dolor perspiciatis, tempora amet repellat quis assumenda aliquid tempore quo velit, adipisci ratione, exercitationem aperiam sapiente vero doloribus dolorem. Fugit eum et quo, reprehenderit, ad libero ea ipsum doloremque facilis vel consectetur! Natus quas aperiam molestias, quaerat pariatur totam rerum facilis unde eos. A nisi, odio explicabo quisquam assumenda iure delectus velit sequi numquam consequatur nam, ab iusto aspernatur nulla asperiores, cum pariatur impedit optio quia itaque possimus deleniti, doloribus tenetur. Minima doloremque molestiae hic nemo, voluptas aut magnam placeat at incidunt porro culpa, repellendus quisquam eum!"
                      data-tippy-placement="right">
                    Кредит от 15 317   /мес.
                </span>
            </a>
		</li>
		<li class="c-cart__item">
			<div class="row row--1 align-items-center justify-content-between">
				<div class="col-auto">
					<a href="" class="c-cart__params c-cart__params--link c-cart__priority">
						<span>
                            <img src="/images/icons/icon-like.svg">
						</span>
						<p>В избранное</p>
					</a>
				</div>
				<div class="col-auto">
					<a href="" class="c-cart__params c-cart__params--link c-cart__priority">
						<span>
                            <img src="/images/icons/icon-lawyer.svg">
						</span>
						<p>В сравнение</p>
					</a>
				</div>
			</div>
		</li>
	</ul>
</div>
