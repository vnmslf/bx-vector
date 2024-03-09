<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?>
	<footer class="dark-footer">
		<div class="container">
<?$APPLICATION->IncludeComponent(
	'bitrix:menu',
	'footer_menu',
	Array(
		'ALLOW_MULTI_SELECT' => 'N',
		'CHILD_MENU_TYPE' => 'left',
		'DELAY' => 'N',
		'MAX_LEVEL' => '1',
		'MENU_CACHE_GET_VARS' => array(
			0 => '',
		),
		'MENU_CACHE_TIME' => '3600',
		'MENU_CACHE_TYPE' => 'A',
		'MENU_CACHE_USE_GROUPS' => 'Y',
		'MENU_THEME' => 'blue',
		'ROOT_MENU_TYPE' => 'header__all',
		'USE_EXT' => 'Y',
	),
	false
);?>
			<div class="footer__block contacts__footer">
				<h5>Контактная информация</h5>
				<div class="footer__links">
					<a href="tel:+79286134510">
						<i class="fas fa-phone"></i> <span>+7 (928) 613-45-10</span>
					</a>
					<a href="mailto:info@vector-tepla.ru">
						<i class="fas fa-solid fa-mail-bulk"></i> <span>info@vector-tepla.ru</span>
					</a>
				</div>
			</div>
			<div class="footer__block documents__footer">
				<h5>Документация</h5>
				<div class="footer__links">
					<a target="_blank" href="/user-agreement/">Пользовательское соглашение</a>
					<a target="_blank" href="/privacy-policy/">Политика конфиденциальности</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="end__footer">
				2023 &mdash; <?=date('Y')?> © Все права защищены ООО «Вектор тепла».
			</div>
		</div>
	</footer>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		m[i].l=1*new Date();
		for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
		k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
		ym(91609234, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
		});
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/91609234" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
<?/*    <script src="https://www.google.com/recaptcha/api.js?render=6Le2W6EcAAAAAKu5fMIalbLGCyKewfjgOQupreNm"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/gsap.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/test.js"></script>*/?>
</body>
</html>