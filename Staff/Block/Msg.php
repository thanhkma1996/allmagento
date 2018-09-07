<?php
namespace Magenest\Staff\Block;

use  Magento\Framework\View\Element\Template;

class Msg extends Template
{
    private $_StaffCollection;


    public function __construct(
        Template\Context $context,
        \Magenest\Staff\Model\ResourceModel\Vendor\CollectionFactory $StaffCollection,array $data = [])
    {
        parent::__construct($context, $data);
        $this->_StaffCollection = $StaffCollection;

    }

    public function getpart()
    {
        $collection = $this->_StaffCollection->create();
        return $collection;
    }


}