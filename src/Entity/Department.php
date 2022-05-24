<?php

namespace App\Entity;

use App\Repository\DepartmentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DepartmentRepository::class)]
class Department
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $DepartmentName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepartmentName(): ?string
    {
        return $this->DepartmentName;
    }

    public function setDepartmentName(string $DepartmentName): self
    {
        $this->DepartmentName = $DepartmentName;

        return $this;
    }
}
