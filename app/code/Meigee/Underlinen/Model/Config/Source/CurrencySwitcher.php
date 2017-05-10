<?php
namespace Meigee\Underlinen\Model\Config\Source;

class CurrencySwitcher implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
		return [
			  ['value' => 'Meigee_Underlinen::currency_select.phtml', 'label' => __('Select Box'), 'img' => 'Meigee_Underlinen::images/currency_select.png'],
			  ['value' => 'Meigee_Underlinen::currency_list.phtml', 'label' => __('Flags'), 'img' => 'Meigee_Underlinen::images/currency_images.png']
		];
    }
}