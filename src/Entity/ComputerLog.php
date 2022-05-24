<?php

namespace App\Entity;

use App\Repository\ComputerLogRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComputerLogRepository::class)]
class ComputerLog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime')]
    private $time;

    #[ORM\Column(type: 'string', length: 255)]
    private $computer;

    #[ORM\Column(type: 'string', length: 255)]
    private $domain;

    #[ORM\Column(type: 'string', length: 255)]
    private $ip;

    #[ORM\Column(type: 'string', length: 255)]
    private $mac;

    #[ORM\Column(type: 'float')]
    private $cpu;

    #[ORM\Column(type: 'float')]
    private $ram;

    #[ORM\Column(type: 'float')]
    private $freq;

    #[ORM\Column(type: 'float')]
    private $gpu;

    #[ORM\Column(type: 'float')]
    private $freq_val;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getComputer(): ?string
    {
        return $this->computer;
    }

    public function setComputer(string $computer): self
    {
        $this->computer = $computer;

        return $this;
    }

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setDomain(string $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getMac(): ?string
    {
        return $this->mac;
    }

    public function setMac(string $mac): self
    {
        $this->mac = $mac;

        return $this;
    }

    public function getCpu(): ?float
    {
        return $this->cpu;
    }

    public function setCpu(float $cpu): self
    {
        $this->cpu = $cpu;

        return $this;
    }

    public function getRam(): ?float
    {
        return $this->ram;
    }

    public function setRam(float $ram): self
    {
        $this->ram = $ram;

        return $this;
    }

    public function getFreq(): ?int
    {
        return $this->freq;
    }

    public function setFreq(int $freq): self
    {
        $this->freq = $freq;

        return $this;
    }

    public function getGpu(): ?float
    {
        return $this->gpu;
    }

    public function setGpu(float $gpu): self
    {
        $this->gpu = $gpu;

        return $this;
    }

    public function getFreqVal(): ?int
    {
        return $this->freq_val;
    }

    public function setFreqVal(int $freq_val): self
    {
        $this->freq_val = $freq_val;

        return $this;
    }
}
