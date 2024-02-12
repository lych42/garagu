<?php

namespace App\Entity;

use App\Repository\SheduleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SheduleRepository::class)]
class Shedule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $mondayAM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $mondayEndAM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $mondayPM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $mondayEndPM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $tuesdayAM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $tuesdayEndAM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $tuesdayPM = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMondayAM(): ?\DateTimeInterface
    {
        return $this->mondayAM;
    }

    public function setMondayAM(\DateTimeInterface $mondayAM): self
    {
        $this->mondayAM = $mondayAM;

        return $this;
    }

    public function getMondayEndAM(): ?\DateTimeInterface
    {
        return $this->mondayEndAM;
    }

    public function setMondayEndAM(\DateTimeInterface $mondayEndAM): self
    {
        $this->mondayEndAM = $mondayEndAM;

        return $this;
    }

    public function getMondayPM(): ?\DateTimeInterface
    {
        return $this->mondayPM;
    }

    public function setMondayPM(\DateTimeInterface $mondayPM): self
    {
        $this->mondayPM = $mondayPM;

        return $this;
    }

    public function getMondayEndPM(): ?\DateTimeInterface
    {
        return $this->mondayEndPM;
    }

    public function setMondayEndPM(\DateTimeInterface $mondayEndPM): self
    {
        $this->mondayEndPM = $mondayEndPM;

        return $this;
    }

    public function getTuesdayAM(): ?\DateTimeInterface
    {
        return $this->tuesdayAM;
    }

    public function setTuesdayAM(\DateTimeInterface $tuesdayAM): self
    {
        $this->tuesdayAM = $tuesdayAM;

        return $this;
    }

    public function getTuesdayEndAM(): ?\DateTimeInterface
    {
        return $this->tuesdayEndAM;
    }

    public function setTuesdayEndAM(\DateTimeInterface $tuesdayEndAM): self
    {
        $this->tuesdayEndAM = $tuesdayEndAM;

        return $this;
    }

    public function getTuesdayPM(): ?\DateTimeInterface
    {
        return $this->tuesdayPM;
    }

    public function setTuesdayPM(\DateTimeInterface $tuesdayPM): self
    {
        $this->tuesdayPM = $tuesdayPM;

        return $this;
    }
}
