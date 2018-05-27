<?php
/**
 * Codewars API PHP client
 *
 * @author u_mulder <m264695502@gmail.com>
 */

namespace Um\CodewarsApi\Entity;

class User
{
    protected $username = '';
    protected $name = '';
    protected $honor = 0;
    protected $clan = '';
    protected $leaderboardPosition = 0;
    protected $skills = [];
    protected $ranks;
    protected $codeChallenges;

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     *
     * @return User
     */
    public function setUsername($username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return User
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getHonor(): int
    {
        return $this->honor;
    }

    /**
     * @param int $honor
     *
     * @return User
     */
    public function setHonor(int $honor): self
    {
        $this->honor = $honor;

        return $this;
    }

    /**
     * @return string
     */
    public function getClan(): string
    {
        return $this->clan;
    }

    /**
     * @param string $clan
     *
     * @return User
     */
    public function setClan(string $clan): self
    {
        $this->clan = $clan;

        return $this;
    }

    /**
     * @return int
     */
    public function getLeaderboardPosition(): int
    {
        return $this->leaderboardPosition;
    }

    /**
     * @param int $leaderboardPosition
     *
     * @return User
     */
    public function setLeaderboardPosition(int $leaderboardPosition): self
    {
        $this->leaderboardPosition = $leaderboardPosition;

        return $this;
    }

    /**
     * @return array
     */
    public function getSkills(): array
    {
        return $this->skills;
    }

    /**
     * @param array $skills
     *
     * @return User
     */
    public function setSkills(array $skills): self
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * @return RanksCollection|null
     */
    public function getRanks(): ?RanksCollection
    {
        return $this->ranks;
    }

    /**
     * @param RanksCollection $ranks
     *
     * @return User
     */
    public function setRanks(RanksCollection $ranks): self
    {
        $this->ranks = $ranks;

        return $this;
    }

    /**
     * @return CodeChallenges|null
     */
    public function getCodeChallenges(): ?CodeChallenges
    {
        return $this->codeChallenges;
    }

    /**
     * @param mixed $codeChallenges
     *
     * @return User
     */
    public function setCodeChallenges(CodeChallenges $codeChallenges): self
    {
        $this->codeChallenges = $codeChallenges;

        return $this;
    }
}
