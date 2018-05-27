<?php
/**
 * Codewars API PHP client
 *
 * @author u_mulder <m264695502@gmail.com>
 */

namespace Um\CodewarsApi\ParameterBag;

class KataParameterBag extends BaseParameterBag
{
    /**
     * UserParameterBag constructor.
     * @param string|int $kata_id
     */
    public function __construct($kata_id)
    {
        parent::__construct([
            'url' => sprintf('/code-challenges/%s', $kata_id),
        ]);
    }
}
