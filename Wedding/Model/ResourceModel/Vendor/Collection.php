<?php
namespace Magenest\Wedding\Model\ResourceModel\Vendor;

/**
 * Subscription Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {
    /**
     *	Initialize	resource	collection
     *
     *	@return	void
     */
    public function _construct() {
        $this->_init('Magenest\Wedding\Model\Vendor', 'Magenest\Wedding\Model\ResourceModel\Vendor');
    }
}