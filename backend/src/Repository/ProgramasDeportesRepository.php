<?php

namespace App\Repository;

use App\Entity\ProgramasDeportes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProgramasDeportes>
 *
 * @method ProgramasDeportes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProgramasDeportes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProgramasDeportes[]    findAll()
 * @method ProgramasDeportes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProgramasDeportesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProgramasDeportes::class);
    }

//    /**
//     * @return ProgramasDeportes[] Returns an array of ProgramasDeportes objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ProgramasDeportes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
