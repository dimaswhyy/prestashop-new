<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.typeahead.product' shared service.

return $this->services['form.type.typeahead.product'] = new \PrestaShopBundle\Form\Admin\Type\TypeaheadProductCollectionType(${($_ = isset($this->services['prestashop.adapter.data_provider.product']) ? $this->services['prestashop.adapter.data_provider.product'] : ($this->services['prestashop.adapter.data_provider.product'] = new \PrestaShop\PrestaShop\Adapter\Product\ProductDataProvider())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.category']) ? $this->services['prestashop.adapter.data_provider.category'] : $this->load('getPrestashop_Adapter_DataProvider_CategoryService.php')) && false ?: '_'});