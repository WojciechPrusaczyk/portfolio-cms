<?php

namespace App\Entity;

use App\Repository\StylesheetsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StylesheetsRepository::class)]
class Stylesheets
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?bool $active = null;

    #[ORM\ManyToOne(inversedBy: 'stylesheets')]
    private ?Admin $addedBy = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $value = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $startBeingActive = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $stopBeingActive = null;

    #[ORM\ManyToOne]
    private ?Admin $EditedBy = null;

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

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): static
    {
        $this->active = $active;

        return $this;
    }

    public function getAddedBy(): ?Admin
    {
        return $this->addedBy;
    }

    public function setAddedBy(?Admin $addedBy): static
    {
        $this->addedBy = $addedBy;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getStartBeingActive(): ?\DateTimeInterface
    {
        return $this->startBeingActive;
    }

    public function setStartBeingActive(?\DateTimeInterface $startBeingActive): static
    {
        $this->startBeingActive = $startBeingActive;

        return $this;
    }

    public function getStopBeingActive(): ?\DateTimeInterface
    {
        return $this->stopBeingActive;
    }

    public function setStopBeingActive(?\DateTimeInterface $stopBeingActive): static
    {
        $this->stopBeingActive = $stopBeingActive;

        return $this;
    }

    public function getEditedBy(): ?Admin
    {
        return $this->EditedBy;
    }

    public function setEditedBy(?Admin $EditedBy): static
    {
        $this->EditedBy = $EditedBy;

        return $this;
    }
}
