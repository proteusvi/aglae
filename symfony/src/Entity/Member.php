<?php

namespace App\Entity;

use App\Repository\MemberRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MemberRepository::class)]
class Member
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $fistName = null;

    #[ORM\Column]
    private ?int $address = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getFistName(): ?string
    {
        return $this->fistName;
    }

    public function setFistName(string $fistName): static
    {
        $this->fistName = $fistName;

        return $this;
    }

    public function getAddress(): ?int
    {
        return $this->address;
    }

    public function setAddress(?int $address): static
    {
        $this->address = $address;

        return $this;
    }
}