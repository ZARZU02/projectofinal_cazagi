<?php

namespace App\Repository;

use App\Entity\HorarioClases;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HorarioClases>
 *
 * @method HorarioClases|null find($id, $lockMode = null, $lockVersion = null)
 * @method HorarioClases|null findOneBy(array $criteria, array $orderBy = null)
 * @method HorarioClases[]    findAll()
 * @method HorarioClases[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HorarioClasesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HorarioClases::class);
    }

//    /**
//     * @return HorarioClases[] Returns an array of HorarioClases objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?HorarioClases
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
