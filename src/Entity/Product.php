<?php

namespace App\Entity;

use ApiPlatform\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
#[ApiResource]
#[ApiFilter( SearchFilter::class, properties: [
    'buyperson' => 'partial',
    'outdate' => 'exact'
])]
#[ApiFilter(OrderFilter::class, properties: [ 'buyperson','outdate'])]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $buyperson = null;

    #[ORM\Column(length: 255)]
    private ?string $producttype = null;

    #[ORM\Column(length: 255)]
    private ?string $kg = null;

    #[ORM\Column(length: 255)]
    private ?string $indate = null;

    #[ORM\Column(length: 255)]
    private ?string $outdate = null;

    #[ORM\Column(length: 255)]
    private ?string $boxin = null;

    #[ORM\Column(length: 255)]
    private ?string $productin = null;

    #[ORM\Column(length: 500)]
    private ?string $goodday = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBuyperson(): ?string
    {
        return $this->buyperson;
    }

    public function setBuyperson(string $buyperson): static
    {
        $this->buyperson = $buyperson;

        return $this;
    }

    public function getProducttype(): ?string
    {
        return $this->producttype;
    }

    public function setProducttype(string $producttype): static
    {
        $this->producttype = $producttype;

        return $this;
    }

    public function getKg(): ?string
    {
        return $this->kg;
    }

    public function setKg(string $kg): static
    {
        $this->kg = $kg;

        return $this;
    }

    public function getIndate(): ?string
    {
        return $this->indate;
    }

    public function setIndate(string $indate): static
    {
        $this->indate = $indate;

        return $this;
    }

    public function getOutdate(): ?string
    {
        return $this->outdate ;
    }

    public function setOutdate(string $outdate): static
    {
        $this->outdate = $outdate;

        return $this;
    }

    public function getBoxin(): ?string
    {
        return $this->boxin;
    }

    public function setBoxin(string $boxin): static
    {
        $this->boxin = $boxin;

        return $this;
    }

    public function getProductin(): ?string
    {
        return $this->productin;
    }

    public function setProductin(string $productin): static
    {
        $this->productin = $productin;

        return $this;
    }

    public function getGoodday(): ?string
    {
        return $this->goodday;
    }

    public function setGoodday(string $goodday): static
    {
        $this->goodday = $goodday;

        return $this;
    }


}
