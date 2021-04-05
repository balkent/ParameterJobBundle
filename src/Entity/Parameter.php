<?php

namespace Balkent\ParameterJobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parameter.
 *
 * @ORM\Table(
 *      name="parameter",
 *      uniqueConstraints={
 *          @ORM\UniqueConstraint(name="unique_name_category", columns={"name", "category"})
 *      },
 *      indexes={
 *          @ORM\Index(name="id_name", columns={"name"})
 *      }
 * )
 * @ORM\Entity(repositoryClass="Balkent\ParameterJobBundle\Repository\ParameterRepository")
 */
class Parameter
{
    /** 
     *  @ORM\Id
     *  @ORM\Column(type="string")
     */
    private string $name;

    /**
     * @ORM\Column(name="category", type="string", nullable=false)
     */
    private string $category;

    /**
     * @ORM\Column(name="type", type="text", nullable=true)
     */
    private ?string $type;

    /**
     * @ORM\Column(name="value", type="text", nullable=false)
     */
    private string $value;

    public function setName(string $name): Parameter
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setCategory(string $category): Parameter
    {
        $this->category = $category;

        return $this;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setType(?string $type): Parameter
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setValue(string $value): Parameter
    {
        $this->value = $value;

        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
