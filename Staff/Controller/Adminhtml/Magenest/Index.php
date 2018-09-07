<?php
namespace Magenest\Staff\Controller\Adminhtml\Magenest;

use \Magento\Backend\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action {
    protected $resultPageFactory;
    public function __construct(Context $context, PageFactory $resultPageFactory){
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    public function execute(){
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Magenest_Staff::index');
        $resultPage->addBreadcrumb(__('Magennest'), __('Magennest'));
        $resultPage->addBreadcrumb(__('Magennest'), __('Magennest'));
        $resultPage->getConfig()->getTitle()->prepend(__('Staff Magenest'));
        return $resultPage;
    }
    public function _isAllowed(){
        return $this->_authorization->isAllowed('Magenest_Staff::index');
    }
}