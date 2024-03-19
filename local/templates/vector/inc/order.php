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
			<form name="main" class="class" action="<?=SITE_TEMPLATE_PATH?>/inc/form.php" method="post" enctype="multipart/form-data">
				<div class="row form-section">
					<div class="col-12 form-group">
						<label>Ваше имя:</label>
						<input type="text" name="form-name" id="form-name" class="form-control form-control-lg required" value="" placeholder="Как к вам обращаться?" />
					</div>
					<div class="col-12 form-group">
						<label>E-mail:</label>
						<input type="email" name="form-email" id="form-email" class="form-control form-control-lg required" value="" placeholder="e-mail@domain.ru" />
					</div>
					<?/*<div class="col-12 form-group">
						<label>Контактный телефон:</label>
						<input type="tel" name="form-phone" id="form-phone" class="form-control form-control-lg required" value="" placeholder="+7 (xxx) xxx-xx-xx" maxlength="12" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />
					</div>*/?>
					<div class="col-12 d-none">
						<input type="text" id="form-botcheck" name="form-botcheck" value="">
					</div>
					<div class="col-12">
						<button type="submit" name="form-submit" class="btn w-100 text-white bg-color rounded-3 py-3 fw-semibold text-uppercase mt-2">Обсудить проект</button>
					</div>
					<input type="hidden" name="prefix" value="form-">
					<input type="hidden" name="autoresponder" value="true">
				</div>
			</form>
		</div>
	</div>
</section>