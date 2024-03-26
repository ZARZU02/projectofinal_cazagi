<?php

namespace App\Repository;

use App\Entity\Dietas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dietas>
 *
 * @method Dietas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dietas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dietas[]    findAll()
 * @method Dietas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DietasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dietas::class);
    }

//    /**
//     * @return Dietas[] Returns an array of Dietas objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Dietas
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
