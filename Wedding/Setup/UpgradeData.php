<?php
/**
 * Created by PhpStorm.
 * User: thanhkma
 * Date: 27/08/2018
 * Time: 16:48
 */
namespace Magenest\Wedding\Setup;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Setup\EavSetupFactory;

class UpgradeData implements UpgradeDataInterface
{
    protected $resourceConfig;
    private $eavSetupFactory;

    public function __construct
    (\Magento\Config\Model\ResourceModel\Config $resourceConfig,EavSetupFactory $eavSetupFactory)
    {
        $this->resourceConfig = $resourceConfig;
        $this->eavSetupFactory = $eavSetupFactory;
    }


    public function upgrade(ModuleDataSetupInterface $setup,
                            ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(),
                '2.0.1') < 0) {
            $this->resourceConfig->saveConfig(
                'web/cookie/cookie_lifetime',
                '7200',
                \Magento\Config\Block\System\Config\
                Form::SCOPE_DEFAULT,
                0
            );
            if (version_compare($context->getVersion(),
                    '2.0.1') < 0) {

                $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
                $eavSetup->addAttribute(
                    \Magento\Catalog\Model\Product::ENTITY,
                    'wedding_id',
                    [
                        'type' => 'int',
                        'backend' => '',
                        'frontend' => '',
                        'label' => 'Wedding_id',
                        'input' => 'text',
                        'class' => '',
                        'source' => '',
                        'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                        'visible' => true,
                        'required' => true,
                        'user_defined' => false,
                        'default' => '',
                        'searchable' => false,
                        'filterable' => false,
                        'comparable' => false,
                        'visible_on_front' => false,
                        'used_in_product_listing' => true,
                        'unique' => false,
                        'apply_to' => ''
                    ]
                );

            }
        }
    }
}