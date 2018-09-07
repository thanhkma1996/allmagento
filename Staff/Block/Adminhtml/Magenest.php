<?php
namespace Magenest\Staff\Block\Adminhtml;
class Magenest extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'Magenest_Staff';
        $this->_controller = 'adminhtml_Staff';
//        $this->removeButton('add');
        parent::_construct();
    }

//    protected function _addNewButton()
//    {
//        $this->addButton(
//            'add_button',
//            [
//                'label' => __('Add Staff'),
//                'onclick' => 'setLocation(\'' . $this->getUrl('staff/magenest/newstaff') . '\')',
//                'class' => 'add primary'
//            ]
//        );
//    }


}