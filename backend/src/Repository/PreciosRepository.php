<?php

namespace App\Repository;

use App\Entity\Precios;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Precios>
 *
 * @method Precios|null find($id, $lockMode = null, $lockVersion = null)
 * @method Precios|null findOneBy(array $criteria, array $orderBy = null)
 * @method Precios[]    findAll()
 * @method Precios[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PreciosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Precios::class);
    }

//    /**
//     * @return Precios[] Returns an array of Precios objects
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

//    public function findOneBySomeField($value): ?Precios
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
