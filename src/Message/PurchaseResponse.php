<?php

namespace ByTIC\Omnipay\Paylike\Message;

use ByTIC\Omnipay\Common\Message\Traits\HasViewTrait;
use ByTIC\Omnipay\Paylike\Helper;

/**
 * Class PurchaseResponse
 * @package ByTIC\Omnipay\Paylike\Message
 */
class PurchaseResponse extends AbstractResponse
{
    use HasViewTrait;

    protected function initViewVars()
    {
        $data = $this->getData();
        $data['returnUrl'] .= strpos($data['returnUrl'], '?') === false ? $data['returnUrl'] . '?' : '';
        $this->getView()->with($data);
    }

    /**
     * @inheritDoc
     */
    protected function generateViewPath()
    {
        return Helper::viewsPath();
    }

    /**
     * @return string
     */
    protected function getViewFile()
    {
        return 'purchase';
    }
}
