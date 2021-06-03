<?php
namespace Rokanthemes\Themeoption\Model\Config;

class Footertype implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'footer_digital_01', 'label' => __('Digital 01')],
            ['value' => 'footer_digital_02', 'label' => __('Digital 02')],
            ['value' => 'footer_digital_03', 'label' => __('Digital 03')],
            ['value' => 'footer_digital_04', 'label' => __('Digital 04')],
            ['value' => 'footer_digital_05', 'label' => __('Digital 05')],
            ['value' => 'footer_digital_06', 'label' => __('Digital 06')],
            ['value' => 'footer_tool_01', 'label' => __('Tool 01')],
            ['value' => 'footer_tool_02', 'label' => __('Tool 02')]
        ];
    }

    public function toArray()
    {
        return [
            'footer_digital_01' => __('Digital 01'),
            'footer_digital_02' => __('Digital 02'),
            'footer_digital_03' => __('Digital 03'),
            'footer_digital_04' => __('Digital 04'),
            'footer_digital_05' => __('Digital 05'),
            'footer_digital_06' => __('Digital 06'),
            'footer_tool_01' => __('Tool 01'),
            'footer_tool_02' => __('Tool 02')
        ];
    }
}