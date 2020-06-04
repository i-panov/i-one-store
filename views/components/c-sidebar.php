<?php
/** @var yii\web\View $this */

use app\models\CarBrand;
use app\models\DriveWheel;
use app\models\EngineType;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\widgets\ListView; ?>

<div class="c-sidebar">
	<ul class="c-sidebar__list">
		<li>
			<h5 class="c-sidebar__title">Вид транспорта</h5>
			<select class="js-c-select c-select">
			  <?php for ($i=0; $i < 10; $i++) { ?>
			  	<option data-value="<?=$i  ?> VALUE" data-html='<span class="c-select__item"><?= $i ?>МОТОЦИКЛЫ</span>' data-text="<?= $i  ?><span></span>"></option>
			  <?} ?>
			</select>
		</li>
		<li>
			<h5 class="c-sidebar__title">Марка</h5>
            <?= ListView::widget([
                'dataProvider' => new ActiveDataProvider(['query' => CarBrand::find()]),
                'options' => ['tag' => 'select', 'class' => 'js-c-select c-select'],
                'itemView' => function(CarBrand $model, $key, int $index) {
                    $dataHtml = Html::tag('span', "${index}{$model->name} <sup>42</sup>", ['class' => 'c-select__item']);
                    return Html::tag('option', '', ['data' => ['value' => "$index VALUE", 'html' => $dataHtml, 'text' => "$index<span></span>"]]);
                },
            ]) ?>
		</li>
		<li>
			<h5 class="c-sidebar__title">Тип кузова</h5>
			<?php
				$c_type_bodywork = ['Седан','Хетчбэк','Универсал','Внедорожник','Кроссовер','Пикап','Лифтбэк','Минивэн','Купе','Кабриолет','Родстер'];
			?>
			<ul class="c-type-bodywork">
				<?php foreach ($c_type_bodywork as $key => $type): ?>
					<li>
						<label>
							<span class="c-type-bodywork__quantity"><?= $key ?>13</span>
							<input class="c-type-bodywork__checkbox" type="checkbox" name="">
							<span class="c-type-bodywork__nesting">
                                <img src="/images/views/blocks/c-type-bodywork/bodywork-<?=$key?>.svg">
								<span><?= $type ?></span>
							</span>
						</label>
					</li>
				<?php endforeach ?>
			</ul>
		</li>
		<li>
			<h5 class="c-sidebar__title">Типы КПП</h5>
			<select class="js-c-select mb-4 c-select">
			  <?php for ($i=0; $i < 10; $i++) { ?>
			  	<option data-value="<?=$i  ?> VALUE" data-html='<span class="c-select__item"><?= $i ?>ВСе типы кпп <sup>42</sup></span>' data-text="<?= $i  ?><span></span>"></option>
			  <?} ?>
			</select>
			<h5 class="c-sidebar__title">Типы двигателя</h5>
            <?= ListView::widget([
                'dataProvider' => new ActiveDataProvider(['query' => EngineType::find()]),
                'options' => ['tag' => 'select', 'class' => 'js-c-select mb-4 c-select'],
                'itemView' => function(EngineType $model, $key, int $index) {
                    $dataHtml = Html::tag('span', "${index}{$model->name} <sup>42</sup>", ['class' => 'c-select__item']);
                    return Html::tag('option', '', ['data' => ['value' => "$index VALUE", 'html' => $dataHtml, 'text' => "$index<span></span>"]]);
                },
            ]) ?>
			<h5 class="c-sidebar__title">Типы привода</h5>
            <?= ListView::widget([
                'dataProvider' => new ActiveDataProvider(['query' => DriveWheel::find()]),
                'options' => ['tag' => 'select', 'class' => 'js-c-select c-select'],
                'itemView' => function(DriveWheel $model, $key, int $index) {
                    $dataHtml = Html::tag('span', "${index}{$model->name} <sup>42</sup>", ['class' => 'c-select__item']);
                    return Html::tag('option', '', ['data' => ['value' => "$index VALUE", 'html' => $dataHtml, 'text' => "$index<span></span>"]]);
                },
            ]) ?>
		</li>
		<li>
			<h5 class="c-sidebar__title">Наличие</h5>
			<?php for ($i=0; $i < 3; $i++) { ?>
				<label class="c-checkbox mb-4">
					<input class="c-checkbox__checkbox" type="checkbox" name="">
					<span class="c-checkbox__nesting">
						<span class="c-checkbox__icon"></span>
						<span class="c-checkbox__text">
							В наличии
							<sup>1695</sup>
						</span>
					</span>
				</label>
			<? } ?>
		</li>
		<li>
			<h5 class="c-sidebar__title">Акции</h5>
			<?php for ($i=0; $i < 3; $i++) { ?>
				<label class="c-checkbox mb-4">
					<input class="c-checkbox__checkbox" type="checkbox" name="">
					<span class="c-checkbox__nesting">
						<span class="c-checkbox__icon"></span>
						<span class="c-checkbox__text">
							Акция
							<sup>1695</sup>
						</span>
					</span>
				</label>
			<? } ?>
		</li>
		<li>
			<label class="c-checkbox">
				<input class="c-checkbox__checkbox" type="checkbox" name="">
				<span class="c-checkbox__nesting">
					<span class="c-checkbox__icon"></span>
					<span class="c-checkbox__text">
						Новинка
						<sup>1695</sup>
					</span>
				</span>
			</label>
		</li>
		<li>
			<h5 class="c-sidebar__title">Цвет кузова</h5>
			<ul class="c-body-color">
				<?php for ($i=0; $i < 10; $i++) { ?>
					<li>
						<label>
							<input class="c-body-color__check" type="checkbox" name="">
							<span class="c-body-color__color" data-tippy-content="Another Tooltip (<?= $i ?>)" data-tippy-placement="right" style="background: green;"></span>
						</label>
					</li>
				<?php } ?>
			</ul>
		</li>
		<li>
			<h5 class="c-sidebar__title">Цвет салона</h5>
			<?php for ($i=0; $i < 2; $i++) { ?>
				<label class="c-checkbox mb-4">
					<input class="c-checkbox__checkbox" type="checkbox" name="">
					<span class="c-checkbox__nesting">
						<span class="c-checkbox__icon"></span>
						<span class="c-checkbox__text">
							Темный
							<sup>1695</sup>
						</span>
					</span>
				</label>
			<? } ?>
		</li>
		<li>
			<h5 class="c-sidebar__title">Материал салона</h5>
			<select class="js-c-select c-select">
			  <?php for ($i=0; $i < 10; $i++) { ?>
			  	<option data-value="<?=$i  ?> VALUE" data-html='<span class="c-select__item"><?= $i ?>Все материалы <sup>42</sup></span>' data-text="<?= $i  ?><span></span>"></option>
			  <?} ?>
			</select>
		</li>
		<li>
			<h5 class="c-sidebar__title">Цена</h5>
			<div class="row row--1">
				<div class="col-6">
					<div class="c-input js-c-input--placeholder c-input--placeholder" data-placeholder="от">
						<input type="text" name="s" class="c-input__input">
					</div>
				</div>
				<div class="col-6">
					<div class="c-input js-c-input--placeholder c-input--placeholder" data-placeholder="до">
						<input type="text" name="s" class="c-input__input">
					</div>
				</div>
			</div>
		</li>
		<li>
			<h5 class="c-sidebar__title">Цена</h5>
			<a href="" class="c-btn c-btn--bg-primary font-weight-700">Расширенный фильтр</a>
		</li>
	</ul>
</div>
