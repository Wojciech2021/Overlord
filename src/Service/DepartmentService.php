<?php

namespace App\Service;

use App\Entity\Department;
use App\Repository\DepartmentRepository;

class DepartmentService
{
    private $departmentRepository;

    public function __construct(DepartmentRepository $departmentRepository)
    {
        $this->departmentRepository = $departmentRepository;
    }

    public function addDepartment (string $departmentName)
    {
        $department = new Department();
        $department->setDepartmentName($departmentName);

        $this->departmentRepository->add($department);

    }

    public function getAllDepartments()
    {
        return $this->departmentRepository->getDepartments();
    }


}