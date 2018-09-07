<?php
namespace Magenest\Wedding\Block;

use  Magento\Framework\View\Element\Template;

class Magenest extends Template
{
    private $_manuCollection;


    public function __construct(
        Template\Context $context,
        \Magenest\Wedding\Model\ResourceModel\Vendor\CollectionFactory $manuCollection,
        array $data=[])
    {
        parent::__construct($context, $data);
        $this->_manuCollection = $manuCollection;

    }

    public function getpart()
    {
        $collection = $this->_manuCollection->create();
        return $collection;
    }




}