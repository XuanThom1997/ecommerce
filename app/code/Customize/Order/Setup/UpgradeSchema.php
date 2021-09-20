<?php

namespace Customize\Order\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    )
    {
        if (version_compare($context->getVersion(), '1.0.1') < 0) {
            $connection = $setup->getConnection();
            $connection->addColumn(
                $setup->getTable('sales_order_grid'),
                'delivery_date',
                [
                    'type' => Table::TYPE_TEXT,
                    'length' => 255,
                    'nullable' => true,
                    'default' => '',
                    'comment' => 'Add New Filed'
                ]
            );
        }
    }
}
