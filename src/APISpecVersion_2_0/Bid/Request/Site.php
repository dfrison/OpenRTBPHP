<?php

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request;

use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Site\Extension;
use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Site\Content;
use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Site\Publisher;

class Site
{
    /**
     * Site ID on the exchange.
     *
     * @recommended
     * @var string
     */
    protected $id;

    /**
     * Site name (may be masked at publisher's request).
     *
     * @optional
     * @var string
     */
    protected $name;

    /**
     * Domain of the site, used for advertiser side blocking. For example, "foo.com".
     *
     * @optional
     * @var string
     */
    protected $domain;

    /**
     * Array of IAB content categories for the overall site.
     *
     * @optional
     * @var string[]
     */
    protected $cat;

    /**
     * Array of IAB content categories for the current subsection of the site.
     *
     * @optional
     * @var string[]
     */
    protected $sectioncat;

    /**
     * Array of IAB content categories for the current page.
     *
     * @optional
     * @var string[]
     */
    protected $pagecat;

    /**
     * URL of the page where the impression will be shown.
     *
     * @recommended
     * @var string
     */
    protected $page;

    /**
     * Referrer URL that caused navigation to the current page.
     *
     * @optional
     * @var string
     */
    protected $ref;

    /**
     * Search string that caused navigation to the current page.
     *
     * @optional
     * @var string
     */
    protected $search;

    /**
     * Mobile-optimized signal, where 0 = no, 1 = yes.
     *
     * @var integer
     */
    protected $mobile;

    /**
     * Specifies whether the site has a privacy policy. "1" means there is a policy. "0" means there is not.
     *
     * @optional
     * @var int
     */
    protected $privacypolicy;

    /**
     * Details about the Publisher of the site.
     *
     * @optional
     * @var Publisher
     */
    protected $publisher;

    /**
     * @optional
     * @var Content
     */
    protected $content;

    /**
     * List of keywords describing this site in a comma separated string.
     *
     * @optional
     * @var string
     */
    protected $keywords;

    /**
     * Placeholder for exchange-specific extensions to OpenRTB.
     *
     * @optional
     * @var Extension
     */
    protected $ext;
}
