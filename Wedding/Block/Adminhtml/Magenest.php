<?php
namespace Magenest\Wedding\Block\Adminhtml;
class Magenest extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'Magenest_Wedding';
        $this->_controller = 'adminhtml_wedding';
        $this->removeButton('add');
        parent::_construct();
    }

    protected function _addNewButton()
    {
        $this->addButton(
            'add_button',
            [
                'label' => __('Add Wedding'),
                'onclick' => 'setLocation(\'' . $this->getUrl('wedding/magenest/newmagenest') . '\')',
                'class' => 'add primary'
            ]
        );
    }


}