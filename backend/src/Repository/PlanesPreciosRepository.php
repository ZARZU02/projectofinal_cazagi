<?php

namespace App\Repository;

use App\Entity\PlanesPrecios;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PlanesPrecios>
 *
 * @method PlanesPrecios|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlanesPrecios|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlanesPrecios[]    findAll()
 * @method PlanesPrecios[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlanesPreciosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlanesPrecios::class);
    }

//    /**
//     * @return PlanesPrecios[] Returns an array of PlanesPrecios objects
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

//    public function findOneBySomeField($value): ?PlanesPrecios
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
