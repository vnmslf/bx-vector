<?//require_once($_SERVER['DOCUMENT_ROOT'].'/assets/header.php');
ob_start();
include($_SERVER['DOCUMENT_ROOT'].'/assets/header.php'); 
$contents = ob_get_contents();
ob_end_clean();
echo str_replace('</head>', '<link rel="stylesheet" href="/assets/css/custom/thank-you.css" /></head>', $contents);
?>
<div class="section my-0 py-0 include-header include-footer min-vh-100" style="background: linear-gradient(to right, #101423 50%, transparent), url('/assets/images/thank-you-bg.webp') no-repeat center center / cover;">
	<div id="particles-nasa"></div>
	<div class="container py-md-6">
		<div class="row align-items-center justify-content-between py-md-4">
			<div class="col-lg-5">
				<img src="/assets/images/thank-you.webp" alt="Спасибо" class="animated spin infinite slower">
				<img src="/assets/images/logo-white.svg" alt="Белый логотип Вектор-тепла" class="crypto-inner">
			</div>
			<div class="col-lg-6 text-md-left text-center">
				<h1 class="display-4 mb-2 fw-light" data-animate="fadeInDownSm"><span class="fw-bold text-color">Спасибо!</span></h1>
				<p class="text-white mb-2" data-animate="fadeInDownSm" data-delay="100">Мы уже получили Вашу заявку на почту и скоро свяжемся с Вами!</p>
				<div class="d-flex align-items-center justify-content-md-center justify-content-center mb-3">
					<a href="/" class="button button-xlarge bg-opacity-10 bg-color color ms-0 px-5 px-md-6 py-3 m-0">Вернуться на главную</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?require_once($_SERVER['DOCUMENT_ROOT'].'/assets/footer.php');?>