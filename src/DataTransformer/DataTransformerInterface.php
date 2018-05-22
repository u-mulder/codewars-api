<?php
/**
 * Codewars API PHP client
 *
 * @author u_mulder <m264695502@gmail.com>
 */

namespace Um\CodewarsApi\DataTransformer;

interface DataTransformerInterface
{
    /**
     * Process `$rawData` and create instance of required object.
     *
     * @param mixed $rawData
     *
     * @return mixed
     */
    public function transform($rawData);
}
