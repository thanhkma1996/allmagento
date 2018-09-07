<?php
namespace Magenest\Staff\Model\Config\Source;

use  \Magenest\Staff\Model\ResourceModel\Vendor\CollectionFactory as staffCollectionFactory;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Select extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    protected $staffCollectionFactory;
    protected $_options;
    public function __construct(
        staffCollectionFactory $staffCollectionFactory
    ) {
        $this->staffCollectionFactory = $staffCollectionFactory;
    }


    public function getAllOptions($addEmpty = true)
    {

        $collection = $this ->staffCollectionFactory->create()->load();
        $_options = [];
        if($addEmpty){
            $_options[] = ['label' => __('-- Choose Status --'), 'value' => ''];
        }

        foreach ($collection as $staff) {
            $_options[] = ['label' => $staff->getStatus(), 'value' => $staff->getStatus()];
        }

        return $_options;
    }


}