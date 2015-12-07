<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Students
 *
 * @ORM\Table(name="students", uniqueConstraints={@ORM\UniqueConstraint(name="id_code", columns={"personal_code"})}, indexes={@ORM\Index(name="groupname", columns={"id_group"}), @ORM\Index(name="address_id", columns={"address_id"})})
 * @ORM\Entity
 */
class Students
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
     * @var integer
     *
     * @ORM\Column(name="register", type="integer", nullable=false)
     */
    private $register;

    /**
     * @var string
     *
     * @ORM\Column(name="personal_code", type="string", length=11, nullable=false)
     */
    private $personalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="family", type="string", length=40, nullable=false)
     */
    private $family;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", length=65535, nullable=false)
     */
    private $info;

    /**
     * @var \Address
     *
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     * })
     */
    private $address;

    /**
     * @var \Groups
     *
     * @ORM\ManyToOne(targetEntity="Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_group", referencedColumnName="id")
     * })
     */
    private $idGroup;



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
     * Set register
     *
     * @param integer $register
     *
     * @return Students
     */
    public function setRegister($register)
    {
        $this->register = $register;

        return $this;
    }

    /**
     * Get register
     *
     * @return integer
     */
    public function getRegister()
    {
        return $this->register;
    }

    /**
     * Set personalCode
     *
     * @param string $personalCode
     *
     * @return Students
     */
    public function setPersonalCode($personalCode)
    {
        $this->personalCode = $personalCode;

        return $this;
    }

    /**
     * Get personalCode
     *
     * @return string
     */
    public function getPersonalCode()
    {
        return $this->personalCode;
    }

    /**
     * Set family
     *
     * @param string $family
     *
     * @return Students
     */
    public function setFamily($family)
    {
        $this->family = $family;

        return $this;
    }

    /**
     * Get family
     *
     * @return string
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Students
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return Students
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set address
     *
     * @param \AppBundle\Entity\Address $address
     *
     * @return Students
     */
    public function setAddress(\AppBundle\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \AppBundle\Entity\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set idGroup
     *
     * @param \AppBundle\Entity\Groups $idGroup
     *
     * @return Students
     */
    public function setIdGroup(\AppBundle\Entity\Groups $idGroup = null)
    {
        $this->idGroup = $idGroup;

        return $this;
    }

    /**
     * Get idGroup
     *
     * @return \AppBundle\Entity\Groups
     */
    public function getIdGroup()
    {
        return $this->idGroup;
    }
}
