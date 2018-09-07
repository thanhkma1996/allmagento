<?php
namespace Magenest\Testpart\Model\ResourceModel\Testpart;

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
        $this->_init('Magenest\Testpart\Model\Testpart', 'Magenest\Testpart\Model\ResourceModel\Testpart');
    }
}