<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductConfiguratorGroup;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\TextField;

class DescriptionField extends TextField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('description', 'description', 'product_configurator_group', $constraintBuilder);
    }
}