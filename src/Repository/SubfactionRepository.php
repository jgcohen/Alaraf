<?php

namespace App\Repository;

use App\Entity\Subfaction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Subfaction|null find($id, $lockMode = null, $lockVersion = null)
 * @method Subfaction|null findOneBy(array $criteria, array $orderBy = null)
 * @method Subfaction[]    findAll()
 * @method Subfaction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubfactionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Subfaction::class);
    }

    // /**
    //  * @return Subfaction[] Returns an array of Subfaction objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Subfaction
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
