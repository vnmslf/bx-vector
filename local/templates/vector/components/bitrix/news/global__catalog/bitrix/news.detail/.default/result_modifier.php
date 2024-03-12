<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Loader;
Loader::includeModule('highloadblock');
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;
if($arResult['DETAIL_TEXT']) {
	$arResult['READ_TIME'] = calculateReadingTime(strip_tags($arResult['DETAIL_TEXT']));
}
$height_input = [
	'mobile'     => $arResult['PROPERTIES']['MOBILE']['VALUE'],
	'md-mobile'  => $arResult['PROPERTIES']['MD_MOBILE']['VALUE'],
	'lg-mobile'  => $arResult['PROPERTIES']['LG_MOBILE']['VALUE'],
	'xl-mobile'  => $arResult['PROPERTIES']['XL_MOBILE']['VALUE'],
	'tablet'     => $arResult['PROPERTIES']['TABLET']['VALUE'],
	'md-tablet'  => $arResult['PROPERTIES']['MD_TABLET']['VALUE'],
	'lg-tablet'  => $arResult['PROPERTIES']['LG_TABLET']['VALUE'],
	'xl-tablet'  => $arResult['PROPERTIES']['XL_TABLET']['VALUE'],
	'desktop'    => $arResult['PROPERTIES']['DESKTOP']['VALUE'],
	'md-desktop' => $arResult['PROPERTIES']['MD_DESKTOP']['VALUE'],
	'lg-desktop' => $arResult['PROPERTIES']['LG_DESKTOP']['VALUE'],
	'xl-desktop' => $arResult['PROPERTIES']['XL_DESKTOP']['VALUE'],
];
if($arResult['PREVIEW_PICTURE']) {
	$arResult['PP'] = make_picture_min($arResult['PREVIEW_PICTURE'], $height_input);
}
$hlblock__name = $arResult['PROPERTIES']['PROPS']['USER_TYPE_SETTINGS']['TABLE_NAME'];
$hlblock = \Bitrix\Highloadblock\HighloadBlockTable::getList(array('filter' => array('=TABLE_NAME' => $hlblock__name)))->fetch();
$entity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
$entity_data_class = $entity->getDataClass();
$res = $entity_data_class::getList(array(
	'select' => array('ID', 'UF_ARTICLE', 'UF_DIAMETER', 'UF_WEIGHT', 'UF_MASS_ONE', 'UF_MASS_TWO'),
	'filter' => array('=UF_XML_ID' => $arResult['ID'])
));
if ($item = $res->Fetch()) {
	$props['ARTICLE'] = $item['UF_ARTICLE'];
	$props['DIAMETER'] = $item['UF_DIAMETER'];
	$props['WEIGHT'] = $item['UF_WEIGHT'];
	$props['MASS_ONE'] = $item['UF_MASS_ONE'];
	$props['MASS_TWO'] = $item['UF_MASS_TWO'];
}
$default__article = str_replace('{D}', $props['DIAMETER'][0], $props['ARTICLE']);
$default__article = str_replace('{W}', ((str_replace(',', '.', $props['WEIGHT'][0])) * 10), $default__article);
$arResult['PROPS'] = $props;
$arResult['DEFAULT_ARTICLE'] = $default__article;
?>