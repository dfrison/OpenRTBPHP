<?php

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request;

use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Regs\Extension;

class Regs
{
    /**
     * Flag indicating if this request is subject to the COPPA regulations established by the USA FTC,
     * where 0 = no, 1 = yes.
     *
     * @optional
     * @var integer
     */
    protected $coppa;

    /**
     * Placeholder for exchange-specific extensions to OpenRTB.
     *
     * @optional
     * @var Extension
     */
    protected $ext;
}
