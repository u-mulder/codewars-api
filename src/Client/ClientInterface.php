<?php
/**
 * Codewars API PHP client
 *
 * @author u_mulder <m264695502@gmail.com>
 */

namespace Um\CodewarsApi\Client;

use Um\CodewarsApi\ParameterBag\BaseParameterBag;

/**
 * Interface ClientInterface
 * @package Um\CodewarsApi\Client
 *
 * ClientInterface defines interface which is used by all
 * clients, that can fetch data from remote data sources
 */
interface ClientInterface
{
    /**
     * `get` returns response from remote data source
     *
     * @param BaseParameterBag $params
     *
     * @return mixed
     */
    public function get(BaseParameterBag $params);
}
