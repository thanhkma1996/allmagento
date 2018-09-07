<?php
/**
 * Created by PhpStorm.
 * User: thanhkma
 * Date: 20/08/2018
 * Time: 11:05
 */
namespace Magenest\Testpart\Controller\Index;
class Index	extends	\Magento\Framework\App\Action\Action{

    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory )
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute(){
        $resultPage	= $this->resultPageFactory->create();
        return $resultPage;
    }
}