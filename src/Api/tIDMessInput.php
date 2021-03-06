<?php

namespace Defr\CzechDataBox\Api;

class tIDMessInput
{
    /**
     * @var tIdDm
     */
    protected $dmID = null;

    /**
     * @param tIdDm $dmID
     */
    public function __construct($dmID = null)
    {
        $this->dmID = $dmID;
    }

    /**
     * @return tIdDm
     */
    public function getDmID()
    {
        return $this->dmID;
    }

    /**
     * @param tIdDm $dmID
     *
     * @return \Defr\CzechDataBox\Api\tIDMessInput
     */
    public function setDmID($dmID)
    {
        $this->dmID = $dmID;

        return $this;
    }
}
