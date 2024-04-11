<?php

namespace App\Repository;

use App\Entity\NutricionConsejos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NutricionConsejos>
 *
 * @method NutricionConsejos|null find($id, $lockMode = null, $lockVersion = null)
 * @method NutricionConsejos|null findOneBy(array $criteria, array $orderBy = null)
 * @method NutricionConsejos[]    findAll()
 * @method NutricionConsejos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NutricionConsejosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NutricionConsejos::class);
    }

//    /**
//     * @return NutricionConsejos[] Returns an array of NutricionConsejos objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NutricionConsejos
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
