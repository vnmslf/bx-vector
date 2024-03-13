<?php

namespace Sprint\Migration;


class MAR13_620240313125325 extends Version
{
    protected $description = "";

    protected $moduleVersion = "4.6.2";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'catalog',
            'Catalog'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
  0 => 
  array (
    'NAME' => 'Монтажные элементы',
    'CODE' => 'montazhnye-elementy',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'html',
  ),
  1 => 
  array (
    'NAME' => 'Вентиляционные решетки',
    'CODE' => 'ventilyatsionnye-reshetki',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'html',
  ),
  2 => 
  array (
    'NAME' => 'Сетки на трубу',
    'CODE' => 'setki-na-trubu',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'html',
  ),
  3 => 
  array (
    'NAME' => 'Решетки вентиляционные',
    'CODE' => 'reshetki-ventilyatsionnye',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'html',
  ),
)        );
    }

    public function down()
    {
        //your code ...
    }
}
