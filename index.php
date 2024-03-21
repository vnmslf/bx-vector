<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Дымоходные системы');
?>
<?$APPLICATION->IncludeComponent(
	'bitrix:news.detail',
	'hero',
	Array(
		'ACTIVE_DATE_FORMAT' => 'd.m.Y',
		'ADD_ELEMENT_CHAIN' => 'N',
		'ADD_SECTIONS_CHAIN' => 'N',
		'AJAX_MODE' => 'N',
		'AJAX_OPTION_ADDITIONAL' => '',
		'AJAX_OPTION_HISTORY' => 'N',
		'AJAX_OPTION_JUMP' => 'N',
		'AJAX_OPTION_STYLE' => 'N',
		'BROWSER_TITLE' => '-',
		'CACHE_GROUPS' => 'Y',
		'CACHE_TIME' => '36000000',
		'CACHE_TYPE' => 'A',
		'CHECK_DATES' => 'Y',
		'DETAIL_URL' => '',
		'DISPLAY_BOTTOM_PAGER' => 'N',
		'DISPLAY_DATE' => 'N',
		'DISPLAY_NAME' => 'N',
		'DISPLAY_PICTURE' => 'N',
		'DISPLAY_PREVIEW_TEXT' => 'N',
		'DISPLAY_TOP_PAGER' => 'N',
		'ELEMENT_CODE' => '',
		'ELEMENT_ID' => '80',
		'FIELD_CODE' => array('PREVIEW_PICTURE',''),
		'IBLOCK_ID' => '9',
		'IBLOCK_TYPE' => 'Static',
		'IBLOCK_URL' => '',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'MESSAGE_404' => '',
		'META_DESCRIPTION' => '-',
		'META_KEYWORDS' => '-',
		'PAGER_BASE_LINK_ENABLE' => 'N',
		'PAGER_SHOW_ALL' => 'N',
		'PAGER_TEMPLATE' => '.default',
		'PAGER_TITLE' => 'Страница',
		'PROPERTY_CODE' => array('CAPT_1','CAPT_2','LINK','COL_NUMBER','COL_TEXT','COL_CAPT',''),
		'SET_BROWSER_TITLE' => 'N',
		'SET_CANONICAL_URL' => 'N',
		'SET_LAST_MODIFIED' => 'Y',
		'SET_META_DESCRIPTION' => 'N',
		'SET_META_KEYWORDS' => 'N',
		'SET_STATUS_404' => 'N',
		'SET_TITLE' => 'N',
		'SHOW_404' => 'N',
		'STRICT_SECTION_CHECK' => 'N',
		'USE_PERMISSIONS' => 'N',
		'USE_SHARE' => 'N'
	)
);?>
<?$APPLICATION->IncludeComponent(
	'bitrix:main.include',
	'',
	Array(
		'AREA_FILE_SHOW' => 'file',
		'PATH' => SITE_TEMPLATE_PATH.'/inc/order.php',
		'PREFIX' => 'start__cta',
		'BG_COLOR' => 'red',
	)
);?>
<?$APPLICATION->IncludeComponent(
	'bitrix:main.include',
	'',
	Array(
		'AREA_FILE_SHOW' => 'file',
		'PATH' => SITE_TEMPLATE_PATH.'/inc/caption.php',
		'CAPTION' => 'Каталог продукции'
	)
);?>
<?$APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'catalog__listing',
	Array(
		'ACTIVE_DATE_FORMAT' => 'd.m.Y',
		'ADD_SECTIONS_CHAIN' => 'N',
		'AJAX_MODE' => 'N',
		'AJAX_OPTION_ADDITIONAL' => '',
		'AJAX_OPTION_HISTORY' => 'N',
		'AJAX_OPTION_JUMP' => 'N',
		'AJAX_OPTION_STYLE' => 'N',
		'CACHE_FILTER' => 'N',
		'CACHE_GROUPS' => 'Y',
		'CACHE_TIME' => '36000000',
		'CACHE_TYPE' => 'A',
		'CHECK_DATES' => 'Y',
		'DETAIL_URL' => '',
		'DISPLAY_BOTTOM_PAGER' => 'Y',
		'DISPLAY_DATE' => 'Y',
		'DISPLAY_NAME' => 'Y',
		'DISPLAY_PICTURE' => 'Y',
		'DISPLAY_PREVIEW_TEXT' => 'Y',
		'DISPLAY_TOP_PAGER' => 'N',
		'FIELD_CODE' => array('', ''),
		'FILTER_NAME' => '',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => '8',
		'IBLOCK_TYPE' => 'Catalog',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'INCLUDE_SUBSECTIONS' => 'Y',
		'MESSAGE_404' => '',
		'NEWS_COUNT' => '12',
		'PAGER_BASE_LINK_ENABLE' => 'N',
		'PAGER_DESC_NUMBERING' => 'N',
		'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
		'PAGER_SHOW_ALL' => 'N',
		'PAGER_SHOW_ALWAYS' => 'N',
		'PAGER_TEMPLATE' => '.default',
		'PAGER_TITLE' => 'Новости',
		'PARENT_SECTION' => '',
		'PARENT_SECTION_CODE' => '',
		'PREVIEW_TRUNCATE_LEN' => '',
		'PROPERTY_CODE' => array('MOBILE', 'MD_MOBILE', 'LG_MOBILE', 'XL_MOBILE', 'TABLET', 'MD_TABLET', 'LG_TABLET', 'XL_TABLET', 'DESKTOP', 'MD_DESKTOP', 'LG_DESKTOP', 'XL_DESKTOP', ''),
		'SET_BROWSER_TITLE' => 'N',
		'SET_LAST_MODIFIED' => 'Y',
		'SET_META_DESCRIPTION' => 'N',
		'SET_META_KEYWORDS' => 'N',
		'SET_STATUS_404' => 'N',
		'SET_TITLE' => 'N',
		'SHOW_404' => 'N',
		'SORT_BY1' => 'ACTIVE_FROM',
		'SORT_BY2' => 'SORT',
		'SORT_ORDER1' => 'DESC',
		'SORT_ORDER2' => 'ASC',
		'STRICT_SECTION_CHECK' => 'N'
	)
);?>
<?$APPLICATION->IncludeComponent(
	'bitrix:main.include',
	'',
	Array(
		'AREA_FILE_SHOW' => 'file',
		'PATH' => SITE_TEMPLATE_PATH.'/inc/section__link.php',
		'LINK_HREF' => '/catalog/',
		'LINK_TEXT' => 'Весь каталог'
	)
);?>
<?$APPLICATION->IncludeComponent(
	'bitrix:main.include',
	'',
	Array(
		'AREA_FILE_SHOW' => 'file',
		'PATH' => SITE_TEMPLATE_PATH.'/inc/caption.php',
		'CAPTION' => 'Услуги &laquo;Вектор тепла&raquo;'
	)
);?>
<?$APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'services__listing',
	Array(
		'ACTIVE_DATE_FORMAT' => 'd.m.Y',
		'ADD_SECTIONS_CHAIN' => 'N',
		'AJAX_MODE' => 'N',
		'AJAX_OPTION_ADDITIONAL' => '',
		'AJAX_OPTION_HISTORY' => 'N',
		'AJAX_OPTION_JUMP' => 'N',
		'AJAX_OPTION_STYLE' => 'N',
		'CACHE_FILTER' => 'N',
		'CACHE_GROUPS' => 'Y',
		'CACHE_TIME' => '36000000',
		'CACHE_TYPE' => 'A',
		'CHECK_DATES' => 'Y',
		'DETAIL_URL' => '',
		'DISPLAY_BOTTOM_PAGER' => 'Y',
		'DISPLAY_DATE' => 'Y',
		'DISPLAY_NAME' => 'Y',
		'DISPLAY_PICTURE' => 'Y',
		'DISPLAY_PREVIEW_TEXT' => 'Y',
		'DISPLAY_TOP_PAGER' => 'N',
		'FIELD_CODE' => array('', ''),
		'FILTER_NAME' => '',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => '6',
		'IBLOCK_TYPE' => 'Services',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'INCLUDE_SUBSECTIONS' => 'Y',
		'MESSAGE_404' => '',
		'NEWS_COUNT' => '6',
		'PAGER_BASE_LINK_ENABLE' => 'N',
		'PAGER_DESC_NUMBERING' => 'N',
		'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
		'PAGER_SHOW_ALL' => 'N',
		'PAGER_SHOW_ALWAYS' => 'N',
		'PAGER_TEMPLATE' => '.default',
		'PAGER_TITLE' => 'Новости',
		'PARENT_SECTION' => '',
		'PARENT_SECTION_CODE' => '',
		'PREVIEW_TRUNCATE_LEN' => '',
		'PROPERTY_CODE' => array('MOBILE', 'MD_MOBILE', 'LG_MOBILE', 'XL_MOBILE', 'TABLET', 'MD_TABLET', 'LG_TABLET', 'XL_TABLET', 'DESKTOP', 'MD_DESKTOP', 'LG_DESKTOP', 'XL_DESKTOP', ''),
		'SET_BROWSER_TITLE' => 'N',
		'SET_LAST_MODIFIED' => 'Y',
		'SET_META_DESCRIPTION' => 'N',
		'SET_META_KEYWORDS' => 'N',
		'SET_STATUS_404' => 'N',
		'SET_TITLE' => 'N',
		'SHOW_404' => 'N',
		'SORT_BY1' => 'ACTIVE_FROM',
		'SORT_BY2' => 'SORT',
		'SORT_ORDER1' => 'DESC',
		'SORT_ORDER2' => 'ASC',
		'STRICT_SECTION_CHECK' => 'N'
	)
);?>
<?$APPLICATION->IncludeComponent(
	'bitrix:main.include',
	'',
	Array(
		'AREA_FILE_SHOW' => 'file',
		'PATH' => SITE_TEMPLATE_PATH.'/inc/section__link.php',
		'LINK_HREF' => '/services/',
		'LINK_TEXT' => 'Все услуги'
	)
);?>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>