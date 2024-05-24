<?php

namespace App\Repository;

use App\Entity\UseUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UseUser>
 *
 * @method UseUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method UseUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method UseUser[]    findAll()
 * @method UseUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UseUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UseUser::class);
    }

//    /**
//     * @return UseUser[] Returns an array of UseUser objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UseUser
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
