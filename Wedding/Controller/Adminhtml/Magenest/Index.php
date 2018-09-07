<?php
namespace Magenest\Wedding\Controller\Adminhtml\Magenest;

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
        $resultPage->setActiveMenu('Magenest_Wedding::index');
        $resultPage->addBreadcrumb(__('Magenest'), __('Magenest'));
        $resultPage->addBreadcrumb(__('Magenest'), __('Magenest'));
        $resultPage->getConfig()->getTitle()->prepend(__('Magenest Admin Management'));
        return $resultPage;
    }
    public function _isAllowed(){
        return $this->_authorization->isAllowed('Magenest_Wedding::index');
    }
}