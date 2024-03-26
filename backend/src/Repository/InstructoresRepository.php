<?php

namespace App\Repository;

use App\Entity\Instructores;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Instructores>
 *
 * @method Instructores|null find($id, $lockMode = null, $lockVersion = null)
 * @method Instructores|null findOneBy(array $criteria, array $orderBy = null)
 * @method Instructores[]    findAll()
 * @method Instructores[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InstructoresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Instructores::class);
    }

//    /**
//     * @return Instructores[] Returns an array of Instructores objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Instructores
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
