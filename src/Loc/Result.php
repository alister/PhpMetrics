<?php

/*
 * (c) Jean-François Lépine <https://twitter.com/Halleck45>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Loc;

/**
 * Representation of LOC
 *
 * @author Jean-François Lépine <https://twitter.com/Halleck45>
 */
class Result {

    /**
     * Lines of code
     *
     * @var integer
     */
    private $loc;

    /**
     * Logical Lines of code
     *
     * @var integer
     */
    private $logicalLoc;

    /**
     * Complexity cyclomatic
     *
     * @var integer
     */
    private $complexityCyclomatic;

    /**
     * @param int $complexityCyclomatic
     */
    public function setComplexityCyclomatic($complexityCyclomatic)
    {
        $this->complexityCyclomatic = $complexityCyclomatic;
        return $this;
    }

    /**
     * @return int
     */
    public function getComplexityCyclomatic()
    {
        return $this->complexityCyclomatic;
    }

    /**
     * @param int $loc
     */
    public function setLoc($loc)
    {
        $this->loc = $loc;
        return $this;
    }

    /**
     * @return int
     */
    public function getLoc()
    {
        return $this->loc;
    }

    /**
     * @param int $logicalLoc
     */
    public function setLogicalLoc($logicalLoc)
    {
        $this->logicalLoc = $logicalLoc;
        return $this;
    }

    /**
     * @return int
     */
    public function getLogicalLoc()
    {
        return $this->logicalLoc;
    }




}