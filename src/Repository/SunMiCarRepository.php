<?php

namespace App\Repository;

use App\Entity\SunMiCar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SunMiCar>
 *
 * @method SunMiCar|null find($id, $lockMode = null, $lockVersion = null)
 * @method SunMiCar|null findOneBy(array $criteria, array $orderBy = null)
 * @method SunMiCar[]    findAll()
 * @method SunMiCar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SunMiCarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SunMiCar::class);
    }

//    /**
//     * @return SunMiCar[] Returns an array of SunMiCar objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SunMiCar
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
