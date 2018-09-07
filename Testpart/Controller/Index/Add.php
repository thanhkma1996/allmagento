<?php

namespace Magenest\Testpart\Controller\Index;

class Add extends \Magento\Framework\App\Action\Action {

    public function __construct(
        \Magento\Framework\App\Action\Context $context
    ){
        parent::__construct($context);
    }

    public function execute()
    {

        if ($_POST) {

            $order = $this->getRequest()->getParam('order');
            $ques = $this->getRequest()->getParam('ques');

            $part = $this->_objectManager->create('Magenest\Testpart\Model\Testpart');

            $part->setOrderId($order);
            $part->setQuestion($ques);

            $part->save();

            $this->messageManager->addSuccess(__('Add Done'));

            return $this->_redirect('Testpart/index/index');

        }
        return $this->_redirect('Testpart/index/index');
    }
}