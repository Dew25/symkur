<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="groups", indexes={@ORM\Index(name="groupname", columns={"groupname"}), @ORM\Index(name="base", columns={"base"})})
 * @ORM\Entity
 */
class Groups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="groupname", type="string", length=40, nullable=false)
     */
    private $groupname;

    /**
     * @var integer
     *
     * @ORM\Column(name="begin_year", type="integer", nullable=false)
     */
    private $beginYear;

    /**
     * @var integer
     *
     * @ORM\Column(name="end_year", type="integer", nullable=false)
     */
    private $endYear;

    /**
     * @var integer
     *
     * @ORM\Column(name="begin_month", type="integer", nullable=false)
     */
    private $beginMonth;

    /**
     * @var integer
     *
     * @ORM\Column(name="end_month", type="integer", nullable=false)
     */
    private $endMonth;

    /**
     * @var \Base
     *
     * @ORM\ManyToOne(targetEntity="Base")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base", referencedColumnName="id")
     * })
     */
    private $base;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Groups
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set groupname
     *
     * @param string $groupname
     *
     * @return Groups
     */
    public function setGroupname($groupname)
    {
        $this->groupname = $groupname;

        return $this;
    }

    /**
     * Get groupname
     *
     * @return string
     */
    public function getGroupname()
    {
        return $this->groupname;
    }

    /**
     * Set beginYear
     *
     * @param integer $beginYear
     *
     * @return Groups
     */
    public function setBeginYear($beginYear)
    {
        $this->beginYear = $beginYear;

        return $this;
    }

    /**
     * Get beginYear
     *
     * @return integer
     */
    public function getBeginYear()
    {
        return $this->beginYear;
    }

    /**
     * Set endYear
     *
     * @param integer $endYear
     *
     * @return Groups
     */
    public function setEndYear($endYear)
    {
        $this->endYear = $endYear;

        return $this;
    }

    /**
     * Get endYear
     *
     * @return integer
     */
    public function getEndYear()
    {
        return $this->endYear;
    }

    /**
     * Set beginMonth
     *
     * @param integer $beginMonth
     *
     * @return Groups
     */
    public function setBeginMonth($beginMonth)
    {
        $this->beginMonth = $beginMonth;

        return $this;
    }

    /**
     * Get beginMonth
     *
     * @return integer
     */
    public function getBeginMonth()
    {
        return $this->beginMonth;
    }

    /**
     * Set endMonth
     *
     * @param integer $endMonth
     *
     * @return Groups
     */
    public function setEndMonth($endMonth)
    {
        $this->endMonth = $endMonth;

        return $this;
    }

    /**
     * Get endMonth
     *
     * @return integer
     */
    public function getEndMonth()
    {
        return $this->endMonth;
    }

    /**
     * Set base
     *
     * @param \AppBundle\Entity\Base $base
     *
     * @return Groups
     */
    public function setBase(\AppBundle\Entity\Base $base = null)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get base
     *
     * @return \AppBundle\Entity\Base
     */
    public function getBase()
    {
        return $this->base;
    }
}
