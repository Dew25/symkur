<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kurator
 *
 * @ORM\Table(name="kurator", indexes={@ORM\Index(name="id_teacher", columns={"id_teacher"}), @ORM\Index(name="id_group", columns={"id_group"})})
 * @ORM\Entity
 */
class Kurator
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
     * @var \Groups
     *
     * @ORM\ManyToOne(targetEntity="Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_group", referencedColumnName="id")
     * })
     */
    private $idGroup;

    /**
     * @var \Teacher
     *
     * @ORM\ManyToOne(targetEntity="Teacher")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_teacher", referencedColumnName="id")
     * })
     */
    private $idTeacher;



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
     * Set idGroup
     *
     * @param \AppBundle\Entity\Groups $idGroup
     *
     * @return Kurator
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

    /**
     * Set idTeacher
     *
     * @param \AppBundle\Entity\Teacher $idTeacher
     *
     * @return Kurator
     */
    public function setIdTeacher(\AppBundle\Entity\Teacher $idTeacher = null)
    {
        $this->idTeacher = $idTeacher;

        return $this;
    }

    /**
     * Get idTeacher
     *
     * @return \AppBundle\Entity\Teacher
     */
    public function getIdTeacher()
    {
        return $this->idTeacher;
    }
}
