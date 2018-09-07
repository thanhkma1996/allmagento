<?php

namespace Magenest\Staff\Controller\Index;

use Magento\Framework\App\Action\Context;

class  Infor extends \Magento\Framework\App\Action\Action
{


    protected $resultJsonFactory;


    public function __construct(
        Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory
    )
    {
        parent::__construct($context);
        $this->resultJsonFactory = $resultJsonFactory;

    }

    public function execute()
    {

        if ($this->getRequest()->isAjax()) {

            $status_staff = $this->getRequest()->getParam('id');

            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $staff = $objectManager->create('Magenest\Staff\Model\Vendor')->load($status_staff)->getData();


//            $staff = $objectManager->create('Magenest\Staff\Model\ResourceModel\Vendor')
//              ->addAtributeToSelect(['nick_name'])
//                ->addAtributeToFilter('nick_name',array('like'=>'%thanh%'))->load();
//                ->load($status_staff)->getData();


        }

        return $this->resultJsonFactory->create()->setData([
            'nick_name' => $staff['nick_name']
         
        ]);
    }

}