<?php
/**
 * SOZO Design
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category    SOZO Design
 * @package     Sozo_Purechat
 * @copyright   Copyright (c) 2016 SOZO Design (http://www.sozodesign.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 */

class Sozo_Purechat_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PURECHAT_ENABLED = 'sozo_purechat/general/enabled';
    const XML_PURECHAT_WIDGET_ID = 'sozo_purechat/chatsetup/widget_id';

    public function isEnabled($store = null)
    {
        return Mage::getStoreConfigFlag(self::XML_PURECHAT_ENABLED, $store);
    }

    public function getWidgetId($store = null)
    {
        return Mage::getStoreConfig(self::XML_PURECHAT_WIDGET_ID, $store);
    }
}
