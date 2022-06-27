<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.order.invoices.by_status.form_handler' shared service.

return $this->services['prestashop.admin.order.invoices.by_status.form_handler'] = new \PrestaShopBundle\Form\Admin\Sell\Order\Invoices\InvoiceByStatusFormHandler(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.admin.order.invoices.by_status.data_provider']) ? $this->services['prestashop.admin.order.invoices.by_status.data_provider'] : ($this->services['prestashop.admin.order.invoices.by_status.data_provider'] = new \PrestaShopBundle\Form\Admin\Sell\Order\Invoices\InvoicesByStatusDataProvider())) && false ?: '_'}, 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\Invoices\\GenerateByStatusType', 'OrdersInvoicesByStatus', ${($_ = isset($this->services['prestashop.adapter.data_provider.order_invoice']) ? $this->services['prestashop.adapter.data_provider.order_invoice'] : ($this->services['prestashop.adapter.data_provider.order_invoice'] = new \PrestaShop\PrestaShop\Adapter\Invoice\OrderInvoiceDataProvider())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.pdf.generator.invoice']) ? $this->services['prestashop.adapter.pdf.generator.invoice'] : $this->load('getPrestashop_Adapter_Pdf_Generator_InvoiceService.php')) && false ?: '_'});
