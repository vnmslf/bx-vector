<?php

namespace Sprint\Migration;


class MAR10SER20240310212244 extends Version
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
            'services',
            'Services'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
)        );
    }

    public function down()
    {
        //your code ...
    }
}
