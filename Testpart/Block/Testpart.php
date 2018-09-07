<?php
namespace Magenest\Testpart\Block;

use  Magento\Framework\View\Element\Template;

class Testpart extends Template
{
    private $_manuCollection;


    public function __construct(
        Template\Context $context,
        \Magenest\Testpart\Model\ResourceModel\Testpart\CollectionFactory $manuCollection,
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