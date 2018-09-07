<?php

namespace Magenest\Staff\Controller\Index;

class Save extends \Magento\Framework\App\Action\Action {

    public function __construct(
        \Magento\Framework\App\Action\Context $context
    ){
        parent::__construct($context);
    }

    public function execute()
    {

        if ($_POST) {

            $Staffr_id = $this->getRequest()->getParam('id');

            $name = $this->getRequest()->getParam('nick_name');
           



            $StaffCollection = $this->_objectManager->create('Magenest\Staff\Model\Vendor')->load($Staffr_id);


            $StaffCollection->setNickName($name);
            $StaffCollection->save();



            $this->messageManager->addSuccess(__('Update Done'));

            return $this->_redirect('staff/index/msg/');

        }
        return $this->_redirect('staff/index/msg/');
    }
}