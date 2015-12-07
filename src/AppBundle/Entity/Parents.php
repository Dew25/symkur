<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parents
 *
 * @ORM\Table(name="parents", indexes={@ORM\Index(name="student_id", columns={"student_id"}), @ORM\Index(name="adress_id", columns={"adress_id"})})
 * @ORM\Entity
 */
class Parents
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
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=false)
     */
    private $phone;

    /**
     * @var integer
     *
     * @ORM\Column(name="adress_id", type="integer", nullable=false)
     */
    private $adressId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="info", type="time", nullable=false)
     */
    private $info;

    /**
     * @var \Students
     *
     * @ORM\ManyToOne(targetEntity="Students")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="student_id", referencedColumnName="id")
     * })
     */
    private $student;



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
     * Set status
     *
     * @param string $status
     *
     * @return Parents
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Parents
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set adressId
     *
     * @param integer $adressId
     *
     * @return Parents
     */
    public function setAdressId($adressId)
    {
        $this->adressId = $adressId;

        return $this;
    }

    /**
     * Get adressId
     *
     * @return integer
     */
    public function getAdressId()
    {
        return $this->adressId;
    }

    /**
     * Set info
     *
     * @param \DateTime $info
     *
     * @return Parents
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return \DateTime
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set student
     *
     * @param \AppBundle\Entity\Students $student
     *
     * @return Parents
     */
    public function setStudent(\AppBundle\Entity\Students $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \AppBundle\Entity\Students
     */
    public function getStudent()
    {
        return $this->student;
    }
}
