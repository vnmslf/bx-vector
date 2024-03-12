<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
use Bitrix\Main\Page\Asset;
?>
<section class="product">
	<div class="container">
		<h1><?=$arResult['NAME']?></h1>
	</div>
	<div class="container">
		<div class="product__left">
<?if(!empty($arResult['PP'])) {?>
			<picture>
	<?foreach ($arResult['PP'] as $keyMedia => $valueMedia) {
		if($keyMedia !== 'default') {
			$explode = explode('-', $keyMedia);
			$start = $explode[0];
			$end = $explode[1];?>
				<source srcset="<?=$arResult['PP'][$keyMedia]['src']?>" media="(min-width: <?=$start?>px)<?if($end !== 'max') {?> and (max-width: <?=$end?>px)<?}?>" type="image/webp" />
		<?}
	}?>
				<img srcset="<?=$arResult['PP']['default']?>" alt="<?=$arResult['NAME']?>, основное фото анонса" />
			</picture>
<?}?>
		</div>
		<div class="product__right">
			<h2>Варианты товара</h2>
			<div class="prop__block article" data-input="article">
				<div class="props__line">Артикул: <span class="active"><?=$arResult['DEFAULT_ARTICLE']?></span></div>
			</div>
			<div class="prop__block diameter" data-index="3" data-input="diameter">
				<div class="prop__line">Диаметр, мм:
					<div class="prop__container">
<?$i = 0;
foreach ($arResult['PROPS']['DIAMETER'] as $key => $value) {?>
						<span class="prop__button<?=($i == 0 ? ' active' : '')?>" data-value="<?=$value?>" data-index="<?=$i?>"><?=$value?></span>
	<?$i++;
}?>
					</div>
				</div>
			</div>
			<div class="prop__block weight" data-index="1" data-input="weight">
				<div class="prop__line">Толщина стали, мм:
					<div class="prop__container">
<?$i = 0;
foreach ($arResult['PROPS']['WEIGHT'] as $key => $value) {?>
						<span class="prop__button<?=($i == 0 ? ' active' : '')?>" data-value="<?=((str_replace(',', '.', $value)) * 10)?>" data-index="<?=$i?>" data-output="mass__<?=$i?>"><?=$value?></span>
	<?$i++;
}?>
					</div>
				</div>
			</div>
			<div class="prop__block technical mass__one" data-input="mass__0">
<?$i = 0;
foreach ($arResult['PROPS']['MASS_ONE'] as $key => $value) {?>
				<span<?=($i == 0 ? ' class="active"' : '')?> data-value="<?=$value?>" data-index="<?=$i?>"><?=$value?></span>
	<?$i++;
}?>
			</div>
			<div class="prop__block technical mass__two" data-input="mass__1">
<?$i = 0;
foreach ($arResult['PROPS']['MASS_TWO'] as $key => $value) {?>
				<span<?=($i == 0 ? ' class="active"' : '')?> data-value="<?=$value?>" data-index="<?=$i?>"><?=$value?></span>
	<?$i++;
}?>
			</div>
		</div>
		<div class="product__technical">
			<h2>Технические характеристики</h2>
			<div class="product__table">
				<div class="product__row">
					<div class="product__col product__name">Артикул:</div>
					<div class="product__col product__value" data-output="article"><?=$arResult['DEFAULT_ARTICLE']?></div>
				</div>
				<div class="product__row">
					<div class="product__col product__name">Диаметр, мм:</div>
					<div class="product__col product__value" data-output="diameter"><?=$arResult['PROPS']['DIAMETER'][0]?></div>
				</div>
				<div class="product__row">
					<div class="product__col product__name">Толщина стали, мм:</div>
					<div class="product__col product__value" data-output="weight"><?=$arResult['PROPS']['WEIGHT'][0]?></div>
				</div>
				<div class="product__row">
					<div class="product__col product__name">Масса, кг:</div>
					<div class="product__col product__value" data-output="mass"><?=$arResult['PROPS']['MASS_ONE'][0]?></div>
				</div>
			</div>
		</div>
	</div>
</section>