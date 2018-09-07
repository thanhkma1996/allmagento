<?php
/**
 * Created by PhpStorm.
 * User: thanhkma
 * Date: 20/08/2018
 * Time: 16:16
 */


namespace Magenest\TestPart\Controller\Index;

class Edit extends \Magento\Framework\App\Action\Action {

    public function __construct(
        \Magento\Framework\App\Action\Context $context
    ){
        parent::__construct($context);
    }

    public function execute()
    {

        if ($_POST) {

            $member_id = $this->getRequest()->getParam('member_id');

            $name = $this->getRequest()->getParam('name');


            $part = $this->_objectManager->create('Test\Magenest\Model\Test')->load($member_id);

            $part->setName($name);
            $part->setAddress($address);
            $part->setPhone($phone);
            $part->setCreatedTime($created_time);
            $part->setUpdatedTime($updated_time);
            $part->save();

            $this->messageManager->addSuccess(__('Update Done'));

            return $this->_redirect('magenest/parttime/index');

        }
        return $this->_redirect('magenest/parttime/index');
    }
}