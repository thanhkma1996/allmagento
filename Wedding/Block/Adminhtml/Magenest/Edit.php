<?php
namespace Magenest\Wedding\Block\Adminhtml\Magenest;
use Magento\Backend\Block\Widget\Form\Container as FormContainer;
use Magento\Framework\Registry;
use Magento\Backend\Block\Widget\Context;
class Edit extends FormContainer{
    protected $coreRegistry;

    public function __construct(
        Context $context,
        Registry $registry,
        array $data = [])
    {
        parent::__construct($context, $data);
    }

    public function getHeaderText()
    {
        $magenestMovie = $this->coreRegistry->registry('wedding_edit');
        if ($magenestMovie->getId())
        {
            return __("Edit Option '%1'", $this->escapeHtml($magenestMovie->getTitle()));
        }
        return __('New Option');
    }
    protected function _construct()
    {
        parent::_construct();
        $this->_objectId='id';
        $this->_blockGroup='Magenest_Wedding';
        $this->_controller = 'adminhtml_wedding';
        $this->buttonList->update('save', 'label', __('Save Wedding'));
        $this->removeButton('back');

        $this->addButton(
            'back_button',
            [
                'label' => __('Back'),
                'onclick' => 'setLocation(\'' . $this->getUrl('wedding/magenest/index') . '\')',
                'class' => 'back'
            ],
            -1
        );
    }
}