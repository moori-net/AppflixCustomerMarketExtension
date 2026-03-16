<?php declare(strict_types=1);

namespace Appflix\CustomerMarketExtension\Data;

use Appflix\CustomerMarketExtension\AppflixCustomerMarketExtension;
use MoorlFoundation\Core\System\DataExtension;
use MoorlFoundation\Core\System\DataInterface;

class Data extends DataExtension implements DataInterface
{
    public function getTables(): ?array
    {
        return array_merge(
            $this->getShopwareTables(),
            $this->getPluginTables()
        );
    }

    public function getShopwareTables(): ?array
    {
        return AppflixCustomerMarketExtension::SHOPWARE_TABLES;
    }

    public function getPluginTables(): ?array
    {
        return AppflixCustomerMarketExtension::PLUGIN_TABLES;
    }

    public function getPluginName(): string
    {
        return AppflixCustomerMarketExtension::NAME;
    }

    public function getCreatedAt(): string
    {
        return AppflixCustomerMarketExtension::DATA_CREATED_AT;
    }

    public function getName(): string
    {
        return 'data';
    }

    public function getType(): string
    {
        return 'data';
    }

    public function getPath(): string
    {
        return __DIR__;
    }
}
