<?php declare(strict_types=1);

namespace Appflix\CustomerMarketExtension;

use Shopware\Core\Framework\Plugin;

class AppflixCustomerMarketExtension extends Plugin
{
    final public const NAME = 'AppflixCustomerMarketExtension';
    final public const DATA_CREATED_AT = '2026-03-16 00:00:00.000';
    final public const PLUGIN_TABLES = [];
    final public const SHOPWARE_TABLES = [
        'custom_field_set'
    ];
}
