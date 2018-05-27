<?php
/**
 * Codewars API PHP client
 *
 * @author u_mulder <m264695502@gmail.com>
 */

namespace Um\CodewarsApi\ParameterBag;

class UserParameterBag extends BaseParameterBag
{
    /**
     * UserParameterBag constructor.
     * @param array $username
     */
    public function __construct($username)
    {
        parent::__construct([
            'url' => sprintf('/users/%s', $username),
        ]);
    }
}
