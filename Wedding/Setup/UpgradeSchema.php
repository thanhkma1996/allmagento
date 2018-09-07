<?php
namespace Magenest\Wedding\Setup;
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
                $installer->getTable('magenest_wedding_event')
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
                'title',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'customer_id'
            )->addColumn(
                'Commistion',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255, [
                'unsigned' => true,
                'nullable' => false],
                'commistion'
            )->addColumn(
                'bride_firstname',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'bride_firstname'
            )->addColumn(
                'bride_lastname',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255, [
                'nullable' => false,

            ],
                'bride_firstname'

            )->addColumn(
                'bride_email',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255, [
                'nullable' => false,

            ],
                'bride_email'


            )->addColumn(
                'sent_to_bride',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255, [
                'nullable' => false,

            ],
                'sent_to_bride'

            )->addColumn(
                'groom_firstname',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255, [
                'nullable' => false,

            ],
                'groom_firstname'

            )->addColumn(
                'groom_lastname',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255, [
                'nullable' => false,

            ],
                'groom_lastname'

            )->addColumn(
                'groom_email',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255, [
                'nullable' => false,

            ],
                'groom_firstname'

            )->addColumn(
                'message',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255, [
                'nullable' => false,

            ],
                'message'
            );
            $installer->getConnection()->createTable($table);
            $installer->endSetup();
        }


    }
}