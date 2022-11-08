<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/services/keyword_theme_constant_service.proto

namespace Google\Ads\GoogleAds\V11\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [KeywordThemeConstantService.SuggestKeywordThemeConstants][google.ads.googleads.v11.services.KeywordThemeConstantService.SuggestKeywordThemeConstants].
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.services.SuggestKeywordThemeConstantsResponse</code>
 */
class SuggestKeywordThemeConstantsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Smart Campaign keyword theme suggestions.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.resources.KeywordThemeConstant keyword_theme_constants = 1;</code>
     */
    private $keyword_theme_constants;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V11\Resources\KeywordThemeConstant[]|\Google\Protobuf\Internal\RepeatedField $keyword_theme_constants
     *           Smart Campaign keyword theme suggestions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Services\KeywordThemeConstantService::initOnce();
        parent::__construct($data);
    }

    /**
     * Smart Campaign keyword theme suggestions.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.resources.KeywordThemeConstant keyword_theme_constants = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeywordThemeConstants()
    {
        return $this->keyword_theme_constants;
    }

    /**
     * Smart Campaign keyword theme suggestions.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.resources.KeywordThemeConstant keyword_theme_constants = 1;</code>
     * @param \Google\Ads\GoogleAds\V11\Resources\KeywordThemeConstant[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeywordThemeConstants($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V11\Resources\KeywordThemeConstant::class);
        $this->keyword_theme_constants = $arr;

        return $this;
    }

}

