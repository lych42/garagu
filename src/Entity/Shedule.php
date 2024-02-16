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

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $tuesdayEndPM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $wednesdayAM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $wednesdayEndAM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $wednesdayPM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $wednesdayEndPM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $thursdayAM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $thursdayEndAM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $thursdayPM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $thursdayEndPM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $fridayAM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $fridayEndAM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $fridayEndPM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $saturdayAM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $saturdayEndAM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $saturdayPM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $saturdayEndPM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $sundayAM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $sundayEndAM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $sundayPM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $sundayEndPM = null;

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

    public function getTuesdayEndPM(): ?\DateTimeInterface
    {
        return $this->tuesdayEndPM;
    }

    public function setTuesdayEndPM(\DateTimeInterface $tuesdayEndPM): self
    {
        $this->tuesdayEndPM = $tuesdayEndPM;

        return $this;
    }

    public function getWednesdayAM(): ?\DateTimeInterface
    {
        return $this->wednesdayAM;
    }

    public function setWednesdayAM(\DateTimeInterface $wednesdayAM): self
    {
        $this->wednesdayAM = $wednesdayAM;

        return $this;
    }

    public function getWednesdayEndAM(): ?\DateTimeInterface
    {
        return $this->wednesdayEndAM;
    }

    public function setWednesdayEndAM(\DateTimeInterface $wednesdayEndAM): self
    {
        $this->wednesdayEndAM = $wednesdayEndAM;

        return $this;
    }

    public function getWednesdayPM(): ?\DateTimeInterface
    {
        return $this->wednesdayPM;
    }

    public function setWednesdayPM(\DateTimeInterface $wednesdayPM): self
    {
        $this->wednesdayPM = $wednesdayPM;

        return $this;
    }

    public function getWednesdayEndPM(): ?\DateTimeInterface
    {
        return $this->wednesdayEndPM;
    }

    public function setWednesdayEndPM(\DateTimeInterface $wednesdayEndPM): self
    {
        $this->wednesdayEndPM = $wednesdayEndPM;

        return $this;
    }

    public function getThursdayAM(): ?\DateTimeInterface
    {
        return $this->thursdayAM;
    }

    public function setThursdayAM(\DateTimeInterface $thursdayAM): self
    {
        $this->thursdayAM = $thursdayAM;

        return $this;
    }

    public function getThursdayEndAM(): ?\DateTimeInterface
    {
        return $this->thursdayEndAM;
    }

    public function setThursdayEndAM(\DateTimeInterface $thursdayEndAM): self
    {
        $this->thursdayEndAM = $thursdayEndAM;

        return $this;
    }

    public function getThursdayPM(): ?\DateTimeInterface
    {
        return $this->thursdayPM;
    }

    public function setThursdayPM(\DateTimeInterface $thursdayPM): self
    {
        $this->thursdayPM = $thursdayPM;

        return $this;
    }

    public function getThursdayEndPM(): ?\DateTimeInterface
    {
        return $this->thursdayEndPM;
    }

    public function setThursdayEndPM(\DateTimeInterface $thursdayEndPM): self
    {
        $this->thursdayEndPM = $thursdayEndPM;

        return $this;
    }

    public function getFridayAM(): ?\DateTimeInterface
    {
        return $this->fridayAM;
    }

    public function setFridayAM(\DateTimeInterface $fridayAM): self
    {
        $this->fridayAM = $fridayAM;

        return $this;
    }

    public function getFridayEndAM(): ?\DateTimeInterface
    {
        return $this->fridayEndAM;
    }

    public function setFridayEndAM(\DateTimeInterface $fridayEndAM): self
    {
        $this->fridayEndAM = $fridayEndAM;

        return $this;
    }

    public function getFridayEndPM(): ?\DateTimeInterface
    {
        return $this->fridayEndPM;
    }

    public function setFridayEndPM(\DateTimeInterface $fridayEndPM): self
    {
        $this->fridayEndPM = $fridayEndPM;

        return $this;
    }

    public function getSaturdayAM(): ?\DateTimeInterface
    {
        return $this->saturdayAM;
    }

    public function setSaturdayAM(\DateTimeInterface $saturdayAM): self
    {
        $this->saturdayAM = $saturdayAM;

        return $this;
    }

    public function getSaturdayEndAM(): ?\DateTimeInterface
    {
        return $this->saturdayEndAM;
    }

    public function setSaturdayEndAM(\DateTimeInterface $saturdayEndAM): self
    {
        $this->saturdayEndAM = $saturdayEndAM;

        return $this;
    }

    public function getSaturdayPM(): ?\DateTimeInterface
    {
        return $this->saturdayPM;
    }

    public function setSaturdayPM(\DateTimeInterface $saturdayPM): self
    {
        $this->saturdayPM = $saturdayPM;

        return $this;
    }

    public function getSaturdayEndPM(): ?\DateTimeInterface
    {
        return $this->saturdayEndPM;
    }

    public function setSaturdayEndPM(\DateTimeInterface $saturdayEndPM): self
    {
        $this->saturdayEndPM = $saturdayEndPM;

        return $this;
    }

    public function getSundayAM(): ?\DateTimeInterface
    {
        return $this->sundayAM;
    }

    public function setSundayAM(\DateTimeInterface $sundayAM): self
    {
        $this->sundayAM = $sundayAM;

        return $this;
    }

    public function getSundayEndAM(): ?\DateTimeInterface
    {
        return $this->sundayEndAM;
    }

    public function setSundayEndAM(\DateTimeInterface $sundayEndAM): self
    {
        $this->sundayEndAM = $sundayEndAM;

        return $this;
    }

    public function getSundayPM(): ?\DateTimeInterface
    {
        return $this->sundayPM;
    }

    public function setSundayPM(\DateTimeInterface $sundayPM): self
    {
        $this->sundayPM = $sundayPM;

        return $this;
    }

    public function getSundayEndPM(): ?\DateTimeInterface
    {
        return $this->sundayEndPM;
    }

    public function setSundayEndPM(\DateTimeInterface $sundayEndPM): self
    {
        $this->sundayEndPM = $sundayEndPM;

        return $this;
    }
}
