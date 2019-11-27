<?php

namespace App\Repository;

use App\Entity\Racket;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Racket|null find($id, $lockMode = null, $lockVersion = null)
 * @method Racket|null findOneBy(array $criteria, array $orderBy = null)
 * @method Racket[]    findAll()
 * @method Racket[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RacketRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Racket::class);
    }

    // /**
    //  * @return Racket[] Returns an array of Racket objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Racket
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
