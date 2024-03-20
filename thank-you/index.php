<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Пользовательское соглашение');
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/thank-you.min.css');
?>
<section class="thank-you">
	<div class="container">
		<h1>Спасибо!</h1>
		<div class="left">
			<h2>Мы уже получили Вашу заявку на почту и скоро свяжемся с Вами!</h2>
		</div>
		<div class="right">
			<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="Логотип" />
		</div>
		<div class="back__link">
			<a href="/">Вернуться на главную</a>
		</div>
	</div>
</section>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>