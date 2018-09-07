<?php
namespace Magenest\Wedding\Model\ResourceModel;

class Vendor extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
    public function _construct() {
        $this->_init('magenest_wedding_event', 'id');
    }
}