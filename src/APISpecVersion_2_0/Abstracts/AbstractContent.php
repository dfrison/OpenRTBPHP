<?php

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Abstracts;

use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Abstracts\Content\AbstractProducer;

abstract class AbstractContent
{
    /**
     * ID uniquely identifying content.
     *
     * @optional
     * @var string
     */
    protected $id;

    /**
     * Content episode number (typically applies to video content).
     *
     * @optional
     * @var int
     */
    protected $episode;

    /**
     * Content title.
     * Video example: "Search Committee" (television) or "A New Hope" (movie) or "Endgame" (made for web)
     * Non-video example: "Why an Antarctic Glacier Is Melting So Quickly" (Time magazine article)
     *
     * @optional
     * @var string
     */
    protected $title;

    /**
     * Content series.
     * Video example: "The Office" (television) or "Star Wars" (movie) or "Arby 'N' The Chief" (made for web)
     * Non-video example: "Ecocentric" (Time magazine blog)
     *
     * @optional
     * @var string
     */
    protected $series;

    /**
     * Content season. E.g., "Season 3" (typically applies to video content).
     *
     * @optional
     * @var string
     */
    protected $season;

    /**
     * @optional
     * @var AbstractProducer
     */
    protected $producer;

    /**
     * Original URL of the content, for buy-side contextualization or review.
     *
     * @optional
     * @var string
     */
    protected $url;

    /**
     * Array of IAB content categories for the content.
     *
     * @optional
     * @var string[]
     */
    protected $cat;

    /**
     * Video quality per the IAB's classification.
     *
     * @optional
     * @var int
     */
    protected $videoquality;

    /**
     * Specifies the type of content (game, video, text, etc.).
     *
     * @optional
     * @var string
     */
    protected $context;

    /**
     * Content rating (e.g., MPAA).
     *
     * @optional
     * @var string
     */
    protected $contentrating;

    /**
     * User rating of the content (e.g., number of stars, likes, etc.).
     *
     * @optional
     * @var string
     */
    protected $userrating;

    /**
     * Media rating per QAG guidelines.
     *
     * @optional
     * @var integer
     */
    protected $qagmediarating;

    /**
     * Comma separated list of keywords describing the content.
     *
     * @optional
     * @var string
     */
    protected $keywords;

    /**
     * Is content live? E.g., live video stream, live blog. "1" means contents is live. "0" means it is not live.
     *
     * @optional
     * @var int
     */
    protected $livestream;

    /**
     * 1 for "direct"; 0 for "indirect".
     *
     * @optional
     * @var int
     */
    protected $sourcerelationship;

    /**
     * Length of content (appropriate for video or audio) in seconds.
     *
     * @optional
     * @var int
     */
    protected $len;

    /**
     * Content language using ISO-639-1-alpha-2.
     *
     * @optional
     * @var string
     */
    protected $language;

    /**
     * Indicator of whether or not the content is embeddable (e.g., an embeddable video player), where 0 = no, 1 = yes.
     *
     * @var integer
     */
    protected $embeddable;
}
