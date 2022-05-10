<?php

namespace App\Entity;

use App\Repository\QuoteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuoteRepository::class)]
class Quote
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'text')]
    private $quote;

    #[ORM\Column(type: 'string', length: 50)]
    private $historial;

    #[ORM\Column(type: 'string', length: 5)]
    private $year;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuote(): ?string
    {
        return $this->quote;
    }

    public function setQuote(string $quote): self
    {
        $this->quote = $quote;

        return $this;
    }

    public function getHistorial(): ?string
    {
        return $this->historial;
    }

    public function setHistorial(string $historial): self
    {
        $this->historial = $historial;

        return $this;
    }

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(string $year): self
    {
        $this->year = $year;

        return $this;
    }
    public function __construct($quote, $historial, $year){
        $this->quote = $quote;
        $this->historial = $historial;
        $this->year = $year;
    }
}
