<?php
declare(strict_types=1);

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity()
 */
class Make
{
    /**
     * @var int
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var Car[]
     *
     * @ORM\OneToMany(targetEntity="Car", mappedBy="make")
     */
    private $cars;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cars = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function addCar(Car $car): self
    {
        $this->cars[] = $car;

        return $this;
    }

    public function removeCar(Car $car): void
    {
        $this->cars->removeElement($car);
    }

    public function getCars(): Collection
    {
        return $this->cars;
    }
}
