<?php
/**
 * Codewars API PHP client
 *
 * @author u_mulder <m264695502@gmail.com>
 */

namespace Um\CodewarsApi\ParameterBag;

class AuthoredKataParameterBag extends BaseParameterBag
{
    /**
     * ParameterBag constructor.    // TODO
     * @param string|int $kata_id
     */
    public function __construct($username, $page = 0)
    {
        parent::__construct([
            'url' => sprintf('/code-challenges/%s', $kata_id, $page),
        ]);
    }

    // https://www.codewars.com/api/v1/users/:id_or_username/code-challenges/completed?page=0
}
