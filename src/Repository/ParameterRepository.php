<?php

namespace Balkent\ParameterJobBundle\Repository;

use Doctrine\Persistence\ManagerRegistry;
use Balkent\ParameterJobBundle\Entity\Parameter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class ParameterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Parameter::class);
    }
}
