<?php

namespace App\Repository;

use App\Entity\Noticias;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Noticias>
 *
 * @method Noticias|null find($id, $lockMode = null, $lockVersion = null)
 * @method Noticias|null findOneBy(array $criteria, array $orderBy = null)
 * @method Noticias[]    findAll()
 * @method Noticias[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NoticiasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Noticias::class);
    }

//    /**
//     * @return Noticias[] Returns an array of Noticias objects
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

//    public function findOneBySomeField($value): ?Noticias
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
