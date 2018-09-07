<?php
namespace Magenest\Staff\Setup;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
class UpgradeSchema implements UpgradeSchemaInterface {
    public function upgrade(SchemaSetupInterface $setup,ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '2.0.0') < 0) {
            $installer = $setup;
            $installer->startSetup();
            $connection = $installer->getConnection();
//Install new database table
            $table = $installer->getConnection()->newTable(
                $installer->getTable('magenest_staff')
            )->addColumn(

                'id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null, [
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary' => true
            ],
                'ID'

            )->addColumn(
                'customer_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                64,
                ['nullable' => false],
                'customer_id'
            )->addColumn(
                'nick_name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255, [
                'unsigned' => true,
                'nullable' => false],
                'nick_name'
            )->addColumn(
                'type',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                255,
                ['nullable' => false],
                'type'
            )->addColumn(
                'status',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                11, [
                'nullable' => false,

            ],
                'status'

            )->addColumn(
                'update_at',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null, [
                'nullable' => false,

            ],
                'update_at'

            );
            $installer->getConnection()->createTable($table);
            $installer->endSetup();
        }


    }
}