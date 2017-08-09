<?php

namespace Vnn\WpApiClient\Endpoint;

/**
 * Class Users
 * @package Vnn\WpApiClient\Endpoint
 */
class DailyNews extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        return '/wp-json/wp/v2/dailynews';
    }
}
