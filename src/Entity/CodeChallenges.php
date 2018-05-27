<?php
/**
 * Codewars API PHP client
 *
 * @author u_mulder <m264695502@gmail.com>
 */

namespace Um\CodewarsApi\Entity;

class CodeChallenges
{

    /**
     * @var int
     */
    protected $totalAuthored = 0;

    /**
     * @var int
     */
    protected $totalCompleted = 0;

    /**
     * CodeChallenges constructor.
     * @param int $totalAuthored
     * @param int $totalCompleted
     */
    public function __construct(int $totalAuthored, int $totalCompleted)
    {
        $this->totalAuthored = $totalAuthored;
        $this->totalCompleted = $totalCompleted;
    }

    /**
     * @return int
     */
    public function getTotalAuthored(): int
    {
        return $this->totalAuthored;
    }

    /**
     * @param int $totalAuthored
     *
     * @return CodeChallenges
     */
    public function setTotalAuthored(int $totalAuthored): self
    {
        $this->totalAuthored = $totalAuthored;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalCompleted(): int
    {
        return $this->totalCompleted;
    }

    /**
     * @param int $totalCompleted
     *
     * @return CodeChallenges
     */
    public function setTotalCompleted(int $totalCompleted): self
    {
        $this->totalCompleted = $totalCompleted;

        return $this;
    }
}
