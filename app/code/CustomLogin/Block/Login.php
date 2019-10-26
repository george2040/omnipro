<?php

namespace Glam\CustomLogin\Block;

use Magento\Framework\View\Element\Template;

class Login extends Template
{
    public function _prepareLayout()
    {
        parent::_prepareLayout();
        $this->pageConfig->getTitle()->set(__('Custom Login'));
        return $this;
    }

}



