<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhoneOwner
 *
 * @ORM\Table(name="phone_owner", indexes={@ORM\Index(name="parents_id", columns={"parents_id"}), @ORM\Index(name="teacher_id", columns={"teacher_id"}), @ORM\Index(name="student_id", columns={"student_id"}), @ORM\Index(name="phone_id", columns={"phone_id"})})
 * @ORM\Entity
 */
class PhoneOwner
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
     * @var \Teacher
     *
     * @ORM\ManyToOne(targetEntity="Teacher")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="teacher_id", referencedColumnName="id")
     * })
     */
    private $teacher;

    /**
     * @var \Parents
     *
     * @ORM\ManyToOne(targetEntity="Parents")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parents_id", referencedColumnName="id")
     * })
     */
    private $parents;

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
     * @var \Phone
     *
     * @ORM\ManyToOne(targetEntity="Phone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phone_id", referencedColumnName="id")
     * })
     */
    private $phone;



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
     * Set teacher
     *
     * @param \AppBundle\Entity\Teacher $teacher
     *
     * @return PhoneOwner
     */
    public function setTeacher(\AppBundle\Entity\Teacher $teacher = null)
    {
        $this->teacher = $teacher;

        return $this;
    }

    /**
     * Get teacher
     *
     * @return \AppBundle\Entity\Teacher
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * Set parents
     *
     * @param \AppBundle\Entity\Parents $parents
     *
     * @return PhoneOwner
     */
    public function setParents(\AppBundle\Entity\Parents $parents = null)
    {
        $this->parents = $parents;

        return $this;
    }

    /**
     * Get parents
     *
     * @return \AppBundle\Entity\Parents
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * Set student
     *
     * @param \AppBundle\Entity\Students $student
     *
     * @return PhoneOwner
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

    /**
     * Set phone
     *
     * @param \AppBundle\Entity\Phone $phone
     *
     * @return PhoneOwner
     */
    public function setPhone(\AppBundle\Entity\Phone $phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return \AppBundle\Entity\Phone
     */
    public function getPhone()
    {
        return $this->phone;
    }
}
