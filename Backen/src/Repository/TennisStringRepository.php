<?php

namespace App\Repository;

use App\Entity\TennisString;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TennisString|null find($id, $lockMode = null, $lockVersion = null)
 * @method TennisString|null findOneBy(array $criteria, array $orderBy = null)
 * @method TennisString[]    findAll()
 * @method TennisString[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TennisStringRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TennisString::class);
    }

    // /**
    //  * @return TennisString[] Returns an array of TennisString objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TennisString
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
