<?php

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Pmp;

use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Pmp\Deal\Extension;

class Deal
{
    /**
     * A unique identifier for the direct deal.
     *
     * @required
     * @var string
     */
    protected $id;

    /**
     * Minimum bid for this impression expressed in CPM.
     *
     * @optional
     * @var float
     */
    protected $bidfloor = 0;

    /**
     * Currency specified using ISO-4217 alpha codes. This may be
     * different from bid currency returned by bidder if this is allowed by the exchange.
     *
     * @optional
     * @var string
     */
    protected $bidfloorcur = 'USD';

    /**
     * Optional override of the overall auction type of the bid request, where 1 = First Price, 2 = Second Price Plus,
     * 3 = the value passed in bidfloor is the agreed upon deal price. Additional auction types can be defined by the
     * exchange.
     *
     * @optional
     * @var integer
     */
    protected $at;

    /**
     * Whitelist of buyer seats allowed to bid on this deal. Seat IDs must be communicated between bidders and the
     * exchange a priori. Omission implies no seat restrictions.
     *
     * @optional
     * @var string[]
     */
    protected $wseat;

    /**
     * Array of advertiser domains (e.g., advertiser.com) allowed to bid on this deal.
     * Omission implies no advertiser restrictions.
     *
     * @optional
     * @var string[]
     */
    protected $wadomain;

    /**
     * Placeholder for exchange-specific extensions to OpenRTB.
     *
     * @optional
     * @var Extension
     */
    protected $ext;
}
