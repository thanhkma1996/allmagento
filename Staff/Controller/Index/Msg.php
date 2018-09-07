<?php
namespace Magenest\Staff\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\View\Result\PageFactory;

class Msg extends Action
{
    private $jsonFactory;

    private $pageFactory;


    public function __construct(
        Context $context,
        JsonFactory $jsonFactory,
        PageFactory $pageFactory
    ){
        $this->jsonFactory = $jsonFactory;
        $this->pageFactory = $pageFactory;

        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->pageFactory->create();
        return $result;
    }

}



