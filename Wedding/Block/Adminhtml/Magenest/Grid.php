<?php
namespace Magenest\Wedding\Block\Adminhtml\Magenest;

use Magento\Backend\Block\Widget\Grid as WidgetGrid;

class Grid extends \Magento\Backend\Block\Widget\Grid\Extended {

    protected $_magennestCollection;



    public function __construct(\Magento\Backend\Block\Template\Context $context,
                                \Magento\Backend\Helper\Data $backendHelper,
                                \Magenest\Wedding\Model\ResourceModel\Vendor\Collection $magennestCollection,
                                array $data = []
    ) {
        $this->_magennestCollection = $magennestCollection;
        parent::__construct($context, $backendHelper, $data);
        $this->setEmptyText(__('No Subscriptions Found'));
    }

    public function _prepareMassaction()
    {
        $this->setMassactionIdField('id');
        $this->getMassactionBlock()->setFormFieldName('Magenest');
        $this->getMassactionBlock()->addItem(
            'delete',
            [
                'label' => __('Delete'),
                'url' => $this->getUrl('wedding/*/delete'),
                'confirm' => __('Are you sure ?'),
            ]
        );
        $this->getMassactionBlock()->addItem(
            'edit',
            [
                'label' => __('Edit'),
                'url' => $this->getUrl('wedding/*/edit'),
            ]
        );
        return $this;
    }


    public function getRowUrl($row)
    {
        return $this->getUrl('wedding/*/edit',['id'=>$row->getId()]);
    }



    /**
     * Initialize the subscription collection
     *
     * @return WidgetGrid
     */
    protected function _prepareCollection() {
        $this->setCollection($this->_magennestCollection);
        return parent::_prepareCollection(); // TODO: Change the autogenerated stub
    }
    /**
     * Prepare grid columns
     *
     * @return $this
     */
    protected function _prepareColumns() {
        $this->addColumn(
            'id',
            [
                'header' => __('ID'),
                'index' => 'id',
                'hidden'=>'true',
            ]
        );
        $this->addColumn(
            'title',
            [
                'header' => __('title'),
                'index' => 'title',
            ]
        );
        $this->addColumn(
            'commission',
            [
                'header' => __('commission'),
                'index' => 'commission',
            ]
        );
        $this->addColumn(
            'bride_firstname',
            [
                'header' => __('bride_firstname'),
                'index' => 'bride_firstname',
            ]
        );
        $this->addColumn(
            'bride_lastname',
            [
                'header' => __('bride_lastname'),
                'index' => 'bride_lastname',
            ]
        );
        $this->addColumn(
            'bride_email',
            [
                'header' => __('bride_email'),
                'index' => 'bride_email',
            ]
        );
        $this->addColumn(
            'sent_to_bride',
            [
                'header' => __('sent_to_bride'),
                'index' => 'sent_to_bride',
            ]
        );

        $this->addColumn(
            'groom_firstname',
            [
                'header' => __('groom_firstname'),
                'index' => 'groom_firstname',
            ]
        );

        $this->addColumn(
            'groom_lastname',
            [
                'header' => __('groom_lastname'),
                'index' => 'groom_lastname',
            ]
        );

        $this->addColumn(
            'groom_email',
            [
                'header' => __('groom_email'),
                'index' => 'groom_email',
            ]
        );

        $this->addColumn(
            'sent_to_groom',
            [
                'header' => __('sent_to_groom'),
                'index' => 'sent_to_groom',
            ]
        );

        $this->addColumn(
            'message',
            [
                'header' => __('message'),
                'index' => 'message',
            ]
        );




    }

}