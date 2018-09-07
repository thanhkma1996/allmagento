<?php
/**
 * Created by PhpStorm.
 * User: thanhkma
 * Date: 20/08/2018
 * Time: 08:07
 */
namespace Magenest\Testpart\Plugin\Checkout\Controller\Cart;

class Add
{
    protected $_url;
    protected $request;
    public function __construct(
        \Magento\Framework\UrlInterface $url,
        \Magento\Framework\App\Request\Http $request
    )
    {
        $this->_url = $url;
        $this->request = $request;
    }
    public function aroundExecute(\Magento\Checkout\Controller\Cart\Add $subject,
                                  \Closure $proceed)
    {
        $returnValue = $proceed();
        if (!$this->request->isAjax()) {
                    $checkoutUrl = $this->_url->getUrl('checkout/index/index');
                $returnValue->setUrl($checkoutUrl);
            }
        return $returnValue;
    }
}
// tinh nag them san pham vao gio hang tu dong chuyen sang trang thanh toan