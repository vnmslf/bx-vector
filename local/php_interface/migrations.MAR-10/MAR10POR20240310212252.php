<?php

namespace Sprint\Migration;


class MAR10POR20240310212252 extends Version
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
            'portfolio',
            'Portfolio'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
  0 => 
  array (
    'NAME' => 'Ростов-на-Дону',
    'CODE' => 'rostov-na-donu',
    'SORT' => '1',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'html',
  ),
  1 => 
  array (
    'NAME' => 'Краснодар',
    'CODE' => 'krasnodar',
    'SORT' => '2',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'html',
  ),
  2 => 
  array (
    'NAME' => 'Батайск',
    'CODE' => 'bataysk',
    'SORT' => '3',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'html',
  ),
  3 => 
  array (
    'NAME' => 'Элиста',
    'CODE' => 'elista',
    'SORT' => '4',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'html',
  ),
  4 => 
  array (
    'NAME' => 'Пятигорск',
    'CODE' => 'pyatigorsk',
    'SORT' => '5',
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
