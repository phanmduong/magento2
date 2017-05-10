<?php

namespace Meigee\Underlinen\Preference\View;

use Magento\Framework\View\Layout;
use Magento\Framework\View\Layout\Reader\Context;

class Move extends \Magento\Framework\View\Layout\Reader\Move
{
    private $_viewCheck;
    
    public function __construct(\Meigee\Underlinen\Model\ViewCheck $viewCheck)
    {
        $this->_viewCheck = $viewCheck;
    }

    public function interpret(Context $readerContext, Layout\Element $currentElement)
    {
        $checkResult = $this->_viewCheck->check($currentElement);
        if ($checkResult === false)
        {
            return $this;
        }
        return parent::interpret($readerContext, $currentElement);
    }
}