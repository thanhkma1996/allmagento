<?php
namespace Magenest\Wedding\Block\Adminhtml\Magenest\Edit;
use \Magento\Backend\Block\Widget\Form\Generic;
use function PHPSTORM_META\type;

class Form extends Generic
{
    protected $systemStore;
    protected $status;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\Store\Model\System\Store $systemStore,
        array $data = []
    ) {
        $this->_systemStore = $systemStore;
        parent::__construct($context, $registry, $formFactory, $data);
    }

    protected function _construct()
    {
        parent::_construct();
        $this->setId('grid_form');
        $this->setTitle(__('wedding Information'));
    }

    protected function _prepareForm()
    {
        $model=$this->_coreRegistry->registry('wedding_edit');
        $form = $this->_formFactory->create(
            ['data' =>
                [
                    'id' => 'edit_form',
                    'action' => $this->getData('action'),
                    'method' => 'post'
                ]
            ]
        );
        $form->setHtmlIdPrefix('id');
        $fieldset = $form->addFieldset(
            'general_fieldset',
            [
                'legend' => __('wedding Information'),
                'class' => 'fieldset-wide'
            ]
        );
       if($model!=null) {
            $fieldset->addField(
                'id',
                'text',
                [
                    'name' => 'id',
                    'label' => __('ID'),
                    'title' => __('ID'),
                    'require' => true
                ]
            );
     };

        $fieldset->addField(
            'title',
            'text',
            [
                'name'=> 'title',
                'label'=>__('title'),
                'title'=>__('title'),
                'require'=>true
            ]
        );

        $fieldset->addField(
            'commission',
            'text',
            [
                'name'=>'commission',
                'label'=>__('commission'),
                'title'=>__('commission'),
                'require'=>true
            ]
        );


        $fieldset->addField(
            'bride_firstname',
            'text',
            [
                'name'=>'bride_firstname',
                'label'=>__('bride_firstname'),
                'title'=>__('bride_firstname'),
                'require'=>true
            ]
        );


        $fieldset->addField(
            'bride_lastname',
            'text',
            [
                'name'=>'bride_lastname',
                'label'=>__('bride_lastname'),
                'title'=>__('bride_lastname'),
                'require'=>true
            ]
        );


        $fieldset->addField(
            'bride_email',
            'text',
            [
                'name'=>'bride_email',
                'label'=>__('bride_email'),
                'title'=>__('bride_email'),
                'require'=>true
            ]
        );

        $fieldset->addField(
            'sent_to_bride',
            'text',
            [
                'name'=>'sent_to_bride',
                'label'=>__('sent_to_bride'),
                'title'=>__('sent_to_bride'),
                'require'=>true
            ]
        );

        $fieldset->addField(
            'groom_firstname',
            'text',
            [
                'name'=>'groom_firstname',
                'label'=>__('groom_firstname'),
                'title'=>__('groom_firstname'),
                'require'=>true
            ]
        );

        $fieldset->addField(
            'groom_lastname',
            'text',
            [
                'name'=>'groom_lastname',
                'label'=>__('groom_lastname'),
                'title'=>__('groom_lastname'),
                'require'=>true
            ]
        );

        $fieldset->addField(
            'groom_email',
            'text',
            [
                'name'=>'groom_email',
                'label'=>__('groom_email'),
                'title'=>__('groom_email'),
                'require'=>true
            ]
        );


        $fieldset->addField(
            'sent_to_groom',
            'text',
            [
                'name'=>'sent_to_groom',
                'label'=>__('sent_to_groom'),
                'title'=>__('sent_to_groom'),
                'require'=>true
            ]
        );


        $fieldset->addField(
            'message',
            'text',
            [
                'name'=>'message',
                'label'=>__('message'),
                'title'=>__('message'),
                'require'=>true
            ]
        );


       if($model != null){
         $form->setValues($model->getData());
        $this->setForm($form);

           }
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}