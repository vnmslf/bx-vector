<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?use Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/order.min.js');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/modal.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/order.min.css');?>
<section class="order">
	<div class="container">
		<div class="order__block">
			<div class="left">
				test
			</div>
			<div class="right">
				<span class="button" data-order="test">test</span>
			</div>
		</div>
	</div>
	<div class="modal modal__order">
		<div class="modal__close" data-exit="true">
			<i class="fas fa-times"></i>
		</div>
		<div class="modal__form">
			<img src="<?=SITE_TEMPLATE_PATH?>/images/logo__white.svg" alt="Logo" />
		</div>
	</div>
</section>