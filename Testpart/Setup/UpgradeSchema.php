<?php
namespace Magenest\Testpart\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class UpgradeSchema implements UpgradeSchemaInterface {
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context){
        // TODO: Implement upgrade() method.
        if(version_compare($context->getVersion(),'2.0.1') < 0){
            $installer = $setup;
            $installer->startSetup();
            $connection = $installer->getConnection();

            //Install new database table
            $table = $installer->getConnection()->newTable(
                $installer->getTable('part_time')
            )->addColumn(
                'order_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,[
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary' => true
            ],
                'order_ID'
            )->addColumn(
                'question',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,[
                'nullable' => false,
            ],
                'question'
            );
            $installer->getConnection()->createTable($table);
            $installer->endSetup();
        }
    }
}