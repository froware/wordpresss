<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit58f9bc88085c0c520ec0da1dfeb40460
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'e69f7f6ee287b969198c3c9d6777bd38' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/bootstrap.php',
        '023d27dca8066ef29e6739335ea73bad' => __DIR__ . '/..' . '/symfony/polyfill-php70/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'f598d06aa772fa33d905e87be6398fb1' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/bootstrap.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '1191076fb986accd3eddd1142284e30c' => __DIR__ . '/..' . '/codeinwp/themeisle-sdk/load.php',
    );

    public static $prefixLengthsPsr4 = array (
        'b' => 
        array (
            'bjoernffm\\Spintax\\' => 18,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Php70\\' => 23,
            'Symfony\\Polyfill\\Intl\\Normalizer\\' => 33,
            'Symfony\\Polyfill\\Intl\\Idn\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'A' => 
        array (
            'Amazon\\ProductAdvertisingAPI\\v1\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'bjoernffm\\Spintax\\' => 
        array (
            0 => __DIR__ . '/..' . '/bjoernffm/spintax',
        ),
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Php70\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php70',
        ),
        'Symfony\\Polyfill\\Intl\\Normalizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer',
        ),
        'Symfony\\Polyfill\\Intl\\Idn\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-idn',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Amazon\\ProductAdvertisingAPI\\v1\\' => 
        array (
            0 => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src',
        ),
    );

    public static $classMap = array (
        'Amazon\\ProductAdvertisingAPI\\v1\\ApiException' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/ApiException.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\Configuration' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/Configuration.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\HeaderSelector' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/HeaderSelector.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\ObjectSerializer' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/ObjectSerializer.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\Availability' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/Availability.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\BrowseNode' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/BrowseNode.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\BrowseNodeAncestor' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/BrowseNodeAncestor.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\BrowseNodeChild' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/BrowseNodeChild.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\BrowseNodeInfo' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/BrowseNodeInfo.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\BrowseNodesResult' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/BrowseNodesResult.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\ByLineInfo' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/ByLineInfo.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\Classifications' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/Classifications.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\Condition' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/Condition.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\ContentInfo' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/ContentInfo.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\ContentRating' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/ContentRating.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\Contributor' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/Contributor.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\CustomerReviews' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/CustomerReviews.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\DeliveryFlag' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/DeliveryFlag.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\DimensionBasedAttribute' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/DimensionBasedAttribute.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\DurationPrice' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/DurationPrice.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\ErrorData' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/ErrorData.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\ExternalIds' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/ExternalIds.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\GetBrowseNodesRequest' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/GetBrowseNodesRequest.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\GetBrowseNodesResource' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/GetBrowseNodesResource.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\GetBrowseNodesResponse' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/GetBrowseNodesResponse.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\GetItemsRequest' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/GetItemsRequest.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\GetItemsResource' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/GetItemsResource.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\GetItemsResponse' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/GetItemsResponse.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\GetVariationsRequest' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/GetVariationsRequest.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\GetVariationsResource' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/GetVariationsResource.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\GetVariationsResponse' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/GetVariationsResponse.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\ImageSize' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/ImageSize.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\ImageType' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/ImageType.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\Images' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/Images.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\Item' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/Item.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\ItemIdType' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/ItemIdType.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\ItemInfo' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/ItemInfo.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\ItemsResult' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/ItemsResult.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\LanguageType' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/LanguageType.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\Languages' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/Languages.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\ManufactureInfo' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/ManufactureInfo.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\MaxPrice' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/MaxPrice.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\Merchant' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/Merchant.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\MinPrice' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/MinPrice.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\MinReviewsRating' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/MinReviewsRating.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\MinSavingPercent' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/MinSavingPercent.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\ModelInterface' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/ModelInterface.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\MultiValuedAttribute' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/MultiValuedAttribute.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\OfferAvailability' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/OfferAvailability.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\OfferCondition' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/OfferCondition.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\OfferConditionNote' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/OfferConditionNote.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\OfferCount' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/OfferCount.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\OfferDeliveryInfo' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/OfferDeliveryInfo.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\OfferListing' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/OfferListing.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\OfferLoyaltyPoints' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/OfferLoyaltyPoints.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\OfferMerchantInfo' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/OfferMerchantInfo.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\OfferPrice' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/OfferPrice.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\OfferProgramEligibility' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/OfferProgramEligibility.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\OfferPromotion' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/OfferPromotion.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\OfferSavings' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/OfferSavings.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\OfferShippingCharge' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/OfferShippingCharge.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\OfferSubCondition' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/OfferSubCondition.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\OfferSummary' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/OfferSummary.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\Offers' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/Offers.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\PartnerType' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/PartnerType.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\Price' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/Price.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\PriceType' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/PriceType.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\ProductAdvertisingAPIClientException' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/ProductAdvertisingAPIClientException.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\ProductAdvertisingAPIServiceException' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/ProductAdvertisingAPIServiceException.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\ProductInfo' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/ProductInfo.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\Properties' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/Properties.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\Rating' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/Rating.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\Refinement' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/Refinement.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\RefinementBin' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/RefinementBin.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\RentalOfferListing' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/RentalOfferListing.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\RentalOffers' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/RentalOffers.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\SearchItemsRequest' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/SearchItemsRequest.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\SearchItemsResource' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/SearchItemsResource.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\SearchItemsResponse' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/SearchItemsResponse.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\SearchRefinements' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/SearchRefinements.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\SearchResult' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/SearchResult.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\SingleBooleanValuedAttribute' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/SingleBooleanValuedAttribute.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\SingleIntegerValuedAttribute' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/SingleIntegerValuedAttribute.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\SingleStringValuedAttribute' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/SingleStringValuedAttribute.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\SortBy' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/SortBy.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\TechnicalInfo' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/TechnicalInfo.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\TradeInInfo' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/TradeInInfo.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\TradeInPrice' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/TradeInPrice.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\UnitBasedAttribute' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/UnitBasedAttribute.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\VariationAttribute' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/VariationAttribute.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\VariationDimension' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/VariationDimension.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\VariationSummary' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/VariationSummary.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\VariationsResult' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/VariationsResult.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\WebsiteSalesRank' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/WebsiteSalesRank.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\api\\DefaultApi' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/api/DefaultApi.php',
        'Amazon\\ProductAdvertisingAPI\\v1\\com\\amazon\\paapi5\\v1\\auth\\SignHelper' => __DIR__ . '/..' . '/thewirecutter/paapi5-php-sdk/src/com/amazon/paapi5/v1/auth/SignHelper.php',
        'ArithmeticError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ArithmeticError.php',
        'AssertionError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/AssertionError.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DivisionByZeroError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/DivisionByZeroError.php',
        'Error' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/Error.php',
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
        'GuzzleHttp\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/InvalidArgumentException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\SeekException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/SeekException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\HandlerStack' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HandlerStack.php',
        'GuzzleHttp\\Handler\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
        'GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
        'GuzzleHttp\\Handler\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
        'GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
        'GuzzleHttp\\Handler\\EasyHandle' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
        'GuzzleHttp\\Handler\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
        'GuzzleHttp\\Handler\\Proxy' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
        'GuzzleHttp\\Handler\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
        'GuzzleHttp\\MessageFormatter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatter.php',
        'GuzzleHttp\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Middleware.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\PrepareBodyMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
        'GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/AggregateException.php',
        'GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/CancellationException.php',
        'GuzzleHttp\\Promise\\Coroutine' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Coroutine.php',
        'GuzzleHttp\\Promise\\Create' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Create.php',
        'GuzzleHttp\\Promise\\Each' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Each.php',
        'GuzzleHttp\\Promise\\EachPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/EachPromise.php',
        'GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/FulfilledPromise.php',
        'GuzzleHttp\\Promise\\Is' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Is.php',
        'GuzzleHttp\\Promise\\Promise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Promise.php',
        'GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromiseInterface.php',
        'GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromisorInterface.php',
        'GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectedPromise.php',
        'GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectionException.php',
        'GuzzleHttp\\Promise\\TaskQueue' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueue.php',
        'GuzzleHttp\\Promise\\TaskQueueInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueueInterface.php',
        'GuzzleHttp\\Promise\\Utils' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Utils.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\Header' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Header.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\Message' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Message.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MimeType' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MimeType.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Query' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Query.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\Rfc7230' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Rfc7230.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\Psr7\\UriComparator' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriComparator.php',
        'GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        'GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        'GuzzleHttp\\Psr7\\Utils' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Utils.php',
        'GuzzleHttp\\RedirectMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
        'GuzzleHttp\\RequestOptions' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestOptions.php',
        'GuzzleHttp\\RetryMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
        'GuzzleHttp\\TransferStats' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/TransferStats.php',
        'GuzzleHttp\\UriTemplate' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/UriTemplate.php',
        'GuzzleHttp\\Utils' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Utils.php',
        'Normalizer' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/Resources/stubs/Normalizer.php',
        'ParseError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ParseError.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'SessionUpdateTimestampHandlerInterface' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/SessionUpdateTimestampHandlerInterface.php',
        'Symfony\\Polyfill\\Intl\\Idn\\Idn' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/Idn.php',
        'Symfony\\Polyfill\\Intl\\Idn\\Info' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/Info.php',
        'Symfony\\Polyfill\\Intl\\Idn\\Resources\\unidata\\DisallowedRanges' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/Resources/unidata/DisallowedRanges.php',
        'Symfony\\Polyfill\\Intl\\Idn\\Resources\\unidata\\Regex' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/Resources/unidata/Regex.php',
        'Symfony\\Polyfill\\Intl\\Normalizer\\Normalizer' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/Normalizer.php',
        'Symfony\\Polyfill\\Php70\\Php70' => __DIR__ . '/..' . '/symfony/polyfill-php70/Php70.php',
        'Symfony\\Polyfill\\Php72\\Php72' => __DIR__ . '/..' . '/symfony/polyfill-php72/Php72.php',
        'TypeError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/TypeError.php',
        'bjoernffm\\Spintax\\Content' => __DIR__ . '/..' . '/bjoernffm/spintax/Content.php',
        'bjoernffm\\Spintax\\Parser' => __DIR__ . '/..' . '/bjoernffm/spintax/Parser.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit58f9bc88085c0c520ec0da1dfeb40460::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit58f9bc88085c0c520ec0da1dfeb40460::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit58f9bc88085c0c520ec0da1dfeb40460::$classMap;

        }, null, ClassLoader::class);
    }
}
