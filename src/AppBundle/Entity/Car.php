<?php
declare(strict_types=1);

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity()
 */
class Car
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
     * @var Make
     *
     * @ORM\ManyToOne(targetEntity="Make", inversedBy="cars")
     */
    private $make;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $variant;

    /**
     * @var \DateTimeInterface
     *
     * @ORM\Column(type="datetime")
     */
    private $yearBuildStart;

    /**
     * @var \DateTimeInterface
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $yearBuildEnd;

    public function getId(): int
    {
        return $this->id;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setVariant(string $variant): self
    {
        $this->variant = $variant;

        return $this;
    }

    public function getVariant(): string
    {
        return $this->variant;
    }

    public function setYearBuildStart(\DateTimeInterface $yearBuildStart): self
    {
        $this->yearBuildStart = $yearBuildStart;

        return $this;
    }

    public function getYearBuildStart(): \DateTimeInterface
    {
        return $this->yearBuildStart;
    }

    public function setYearBuildEnd(\DateTimeInterface $yearBuildEnd): self
    {
        $this->yearBuildEnd = $yearBuildEnd;

        return $this;
    }

    public function getYearBuildEnd(): ?\DateTimeInterface
    {
        return $this->yearBuildEnd;
    }

    public function setMake(Make $make = null): self
    {
        $this->make = $make;

        return $this;
    }

    public function getMake(): Make
    {
        return $this->make;
    }
}
