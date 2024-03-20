<?php

namespace Sprint\Migration;


class MAR20_8_20240320231709 extends Version
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
    'NAME' => 'Дымоходы',
    'CODE' => 'dymokhody',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'html',
  ),
  1 => 
  array (
    'NAME' => 'Аксессуары для бани и камина',
    'CODE' => 'aksessuary-dlya-bani-i-kamina',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'html',
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'Сетки на трубу',
        'CODE' => 'setki-na-trubu',
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'html',
      ),
      1 => 
      array (
        'NAME' => 'Решетки вентиляционные',
        'CODE' => 'reshetki-ventilyatsionnye',
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'html',
      ),
    ),
  ),
)        );
    }

    public function down()
    {
        //your code ...
    }
}
