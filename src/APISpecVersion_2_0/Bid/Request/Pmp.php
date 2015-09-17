<?php

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request;

use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Pmp\Deal;
use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Pmp\Extension;

class Pmp
{
    /**
     * Indicator of auction eligibility to seats named in the Direct Deals object, where 0 = all bids are accepted,
     * 1 = bids are restricted to the deals specified and the terms thereof.
     *
     * @var integer
     */
    protected $private_auction;

    /**
     * This object constitutes a specific deal that was struck a priori between a buyer and a seller.
     *
     * @var Deal[]
     */
    protected $deals;

    /**
     * Placeholder for exchange-specific extensions to OpenRTB.
     *
     * @optional
     * @var Extension
     */
    protected $ext;
}
