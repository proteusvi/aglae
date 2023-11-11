<?php

namespace App\Entity;

use App\Repository\AddressRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AddressRepository::class)]
class Address
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $road = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $number = null;

    #[ORM\Column(length: 100)]
    private ?string $town = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $regionCanton = null;

    #[ORM\Column(length: 100)]
    private ?string $land = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoad(): ?string
    {
        return $this->road;
    }

    public function setRoad(?string $road): static
    {
        $this->road = $road;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): static
    {
        $this->number = $number;

        return $this;
    }

    public function getTown(): ?string
    {
        return $this->town;
    }

    public function setTown(string $town): static
    {
        $this->town = $town;

        return $this;
    }

    public function getRegionCanton(): ?string
    {
        return $this->regionCanton;
    }

    public function setRegionCanton(?string $regionCanton): static
    {
        $this->regionCanton = $regionCanton;

        return $this;
    }

    public function getLand(): ?string
    {
        return $this->land;
    }

    public function setLand(string $land): static
    {
        $this->land = $land;

        return $this;
    }
}
