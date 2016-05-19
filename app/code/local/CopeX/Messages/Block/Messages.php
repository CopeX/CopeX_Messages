<?php

class CopeX_Messages_Block_Messages extends Mage_Core_Block_Template
{
    public function showMessage()
    {
        return Mage::getStoreConfig('copex_messages/options/enable');
    }
}