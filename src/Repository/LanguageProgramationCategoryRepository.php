<?php

namespace App\Repository;

use App\Entity\LanguageProgramationCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LanguageProgramationCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method LanguageProgramationCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method LanguageProgramationCategory[]    findAll()
 * @method LanguageProgramationCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LanguageProgramationCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LanguageProgramationCategory::class);
    }

    // /**
    //  * @return LanguageProgramationCategory[] Returns an array of LanguageProgramationCategory objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LanguageProgramationCategory
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
