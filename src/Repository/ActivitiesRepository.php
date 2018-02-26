<?php

namespace App\Repository;

use App\Entity\Activity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ActivitiesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Activity::class);
    }

        
      public function findAllActivities()
    {
          // SELECT * FROM activities
        return $this->findAll();
    }   
      
    public function findByCategory($category) 
    {
        $result = $this->createQueryBuilder('a')
                ->where('a.category = :category')
                ->setParameter(':category', $category)
                ->getQuery()
                ->getResult();
       return $result;
    }
    public function getCategories()
    {
       
        return $this->createQueryBuilder('a')
                ->select('distinct a.category')
                ->getQuery()
                ->getResult();
    }
    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('a')
            ->where('a.something = :value')->setParameter('value', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
