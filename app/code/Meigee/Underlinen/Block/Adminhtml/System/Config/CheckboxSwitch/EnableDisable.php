<?php
namespace Meigee\Underlinen\Block\Adminhtml\System\Config\CheckboxSwitch;

class EnableDisable extends \Meigee\Underlinen\Block\Adminhtml\System\Config\CheckboxSwitch
{
    function getOnLabel()
    {
        return __('Enable');
    }
    function getOffLabel()
    {
        return __('Disable');
    }
}