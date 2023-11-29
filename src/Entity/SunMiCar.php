<?php

namespace App\Entity;

use ApiPlatform\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\SunMiCarRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SunMiCarRepository::class)]
#[ApiResource]
#[ApiFilter(SearchFilter::class, properties: [
    'id' => 'exact',
    'driverday' => 'exact'

])]
#[ApiFilter(OrderFilter::class, properties: ['id', 'driverday'])]
class SunMiCar
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $start = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $finish = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $driverplan = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lastkm = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nextkm = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $disel = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fulldrivertime = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $drivergoodday = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $driverday = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStart(): ?string
    {
        return $this->start;
    }

    public function setStart(?string $start): static
    {
        $this->start = $start;

        return $this;
    }

    public function getFinish(): ?string
    {
        return $this->finish;
    }

    public function setFinish(?string $finish): static
    {
        $this->finish = $finish;

        return $this;
    }

    public function getDriverplan(): ?string
    {
        return $this->driverplan;
    }

    public function setDriverplan(?string $driverplan): static
    {
        $this->driverplan = $driverplan;

        return $this;
    }

    public function getLastkm(): ?string
    {
        return $this->lastkm;
    }

    public function setLastkm(?string $lastkm): static
    {
        $this->lastkm = $lastkm;

        return $this;
    }

    public function getNextkm(): ?string
    {
        return $this->nextkm;
    }

    public function setNextkm(?string $nextkm): static
    {
        $this->nextkm = $nextkm;

        return $this;
    }

    public function getDisel(): ?string
    {
        return $this->disel;
    }

    public function setDisel(?string $disel): static
    {
        $this->disel = $disel;

        return $this;
    }

    public function getFulldrivertime(): ?string
    {
        return $this->fulldrivertime;
    }

    public function setFulldrivertime(?string $fulldrivertime): static
    {
        $this->fulldrivertime = $fulldrivertime;

        return $this;
    }

    public function getDrivergoodday(): ?string
    {
        return $this->drivergoodday;
    }

    public function setDrivergoodday(?string $drivergoodday): static
    {
        $this->drivergoodday = $drivergoodday;

        return $this;
    }

    public function getDriverday(): ?string
    {
        return $this->driverday;
    }

    public function setDriverday(?string $driverday): static
    {
        $this->driverday = $driverday;

        return $this;
    }

}
