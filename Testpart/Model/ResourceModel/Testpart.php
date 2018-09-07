<?php
namespace Magenest\Testpart\Model\ResourceModel;

class Testpart extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
    public function _construct() {
        $this->_init('part_time', 'order_id');
    }
}