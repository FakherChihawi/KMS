<?php

namespace App\Repository;

use App\Entity\CorpMail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CorpMail|null find($id, $lockMode = null, $lockVersion = null)
 * @method CorpMail|null findOneBy(array $criteria, array $orderBy = null)
 * @method CorpMail[]    findAll()
 * @method CorpMail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CorpMailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CorpMail::class);
    }

    // /**
    //  * @return CorpMail[] Returns an array of CorpMail objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CorpMail
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
