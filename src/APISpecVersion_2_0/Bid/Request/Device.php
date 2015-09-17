<?php

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request;

use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Device\Extension;
use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Device\Geo;

class Device
{
    /**
     * Browser user agent string.
     *
     * @recommended
     * @var string
     */
    protected $ua;

    /**
     * Geography as derived from the device's location services (e.g., cell tower triangulation, GPS) or IP address.
     *
     * @recommended if IP is not supplied
     * @var Geo
     */
    protected $geo;

    /**
     * If "0", then do not track is set to false, if "1", then do not track is set to true in browser.
     *
     * @recommended
     * @var int
     */
    protected $dnt;

    /**
     * “Limit Ad Tracking” signal commercially endorsed (e.g., iOS, Android), where 0 = tracking is unrestricted,
     * 1 = tracking must be limited per commercial guidelines.
     *
     * @recommended
     * @var integer
     */
    protected $lmt;

    /**
     * IPv4 address closest to device.
     *
     * @recommended if geo object is not supplied
     * @var string
     */
    protected $ip;

    /**
     * IP address in IPv6.
     *
     * @optional
     * @var string
     */
    protected $ipv6;

    /**
     * The general type of device.
     *
     * @var integer
     */
    protected $devicetype;

    /**
     * Device make (e.e., "Apple").
     *
     * @optional
     * @var string
     */
    protected $make;

    /**
     * Device model (e.g., "iPhone").
     *
     * @optional
     * @var string
     */
    protected $model;

    /**
     * Device operating system (e.g., "iOS").
     *
     * @optional
     * @var string
     */
    protected $os;

    /**
     * Device operating system version (e.e., "3.1.2£).
     *
     * @optional
     * @var string
     */
    protected $osv;

    /**
     * Hardware version of the device (e.g., “5S” for iPhone 5S).
     *
     * @var string
     */
    protected $hwv;

    /**
     * Physical height of the screen in pixels.
     *
     * @var integer
     */
    protected $h;

    /**
     * Physical width of the screen in pixels.
     *
     * @var integer
     */
    protected $w;

    /**
     * Screen size as pixels per linear inch.
     *
     * @optional
     * @var integer
     */
    protected $ppi;

    /**
     * The ratio of physical pixels to device independent pixels.
     *
     * @optional
     * @var float
     */
    protected $pxratio;

    /**
     * "1" if the device supports JavaScript; else "0".
     *
     * @optional
     * @var int
     */
    protected $js;

    /**
     * Return the Flash version detected.
     *
     * @optional
     * @var string
     */
    protected $flashver;

    /**
     * Browser language; use alpha-2/ISO 639-1 codes.
     *
     * @optional
     * @var string
     */
    protected $language;

    /**
     * Carrier or ISP derived from the IP address. Should be specified using Mobile Network Code (MNC)
     * http://en.wikipedia.org/wiki/Mobile_Network_Code
     *
     * @optional
     * @var string
     */
    protected $carrier;

    /**
     * Return the detected data connection type for the device.
     *
     * @optional
     * @var int
     */
    protected $connectiontype;

    /**
     * ID sanctioned for advertiser use in the clear (i.e., not hashed).
     *
     * @optional
     * @var string
     */
    protected $ifa;

    /**
     * SHA1 hashed device ID; IMEI when available, else MEID or ESN. OpenRTB's preferred method for device ID hashing is
     * SHA1.
     *
     * @optional
     * @var string
     */
    protected $didsha1;

    /**
     * MD5 hashed device ID; IMEI when available, else MEID or ESN. Should be interpreted as case insensitive.
     *
     * @optional
     * @var string
     */
    protected $didmd5;

    /**
     * SHA1 hased platform-specific ID (e.g., Android ID or UDID for iOS). OpenRTB's preferred method for device ID hash
     * is SHA1.
     *
     * @optional
     * @var string
     */
    protected $dpidsha1;

    /**
     * MD5 hashed platform-specific ID (e.e., Android ID or UDID for iOS). Should be interpreted as case insensitive.
     *
     * @optional
     * @var string
     */
    protected $dpidmd5;

    /**
     * MAC address of the device; hashed via SHA1.
     *
     * @optional
     * @var string
     */
    protected $macsha1;

    /**
     * MAC address of the device; hashed via MD5.
     *
     * @optional
     * @var string
     */
    protected $macmd5;

    /**
     * Placeholder for exchange-specific extensions to OpenRTB.
     *
     * @optional
     * @var Extension
     */
    protected $ext;
}
