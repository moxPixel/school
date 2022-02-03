<?php

namespace App\Repository;


use Exception;
use App\Entity\Rating;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;


/**
 * @method Rating|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rating|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rating[]    findAll()
 * @method Rating[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RatingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rating::class);
    }

    // /**
    //  * Compte le nombre de note par mois
    //  * @return int|mixed
    //  * @throws Exception
    //  * @throws \Doctrine\DBAL\Exception
    //  */
    // public function findStats($id): array
    // {
    //     $conn = $this->getEntityManager()->getConnection();

    //     $sql = '
    //         SELECT MONTH(created_at) as month ,SUM(note) / count(*) as total 
    //         FROM rating 
    //         WHERE YEAR(created_at) = YEAR(CURDATE())
    //         AND (user_id) = '.$id.'
    //         GROUP BY MONTH(created_at) 
    //         ORDER BY MONTH(created_at) ASC
    //         ';
    //     $stmt = $conn->prepare($sql);
    //     $stmt->execute();

    //     // returns an array of arrays (i.e. a raw data set)
    //     return $stmt->fetchAllAssociative();
    // }

     /**
      * Calcule la moyenne general par mois pour l annéé en cour
      * @return int|mixed
      * @throws Exception
      * @throws \Doctrine\DBAL\Exception
      */
       public function findStats($id): array
       {
           $date = new \DateTime();
           return $this->createQueryBuilder('r')
              ->addSelect('MONTH(r.createdAt) as month , SUM(r.note)/ COUNT(r.note) as total')
              ->where('r.user = :id')
              ->andWhere('YEAR(r.createdAt) = YEAR(:dateNow)')
              ->setParameter('id', $id)
              ->setParameter('dateNow', $date->format('Y-m-d 00:00:00'))
              ->groupBy('month')
              ->orderBy('month', 'ASC')
              ->getQuery()
              ->getResult()
           ;
     }


    /**
     * Calcule la moyenne general pour l annéé en cour
     * @return int|mixed
     * @throws Exception
     * @throws \Doctrine\DBAL\Exception
     */
    public function findTotal($id): array
    {
        $date = new \DateTime();
        return $this->createQueryBuilder('r')
            ->addSelect('SUM(r.note)/ COUNT(r.note) as total')
            ->where('r.user = :id')
            ->andWhere('YEAR(r.createdAt) = YEAR(:dateNow)')
            ->setParameter('id', $id)
            ->setParameter('dateNow', $date->format('Y-m-d 00:00:00'))
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * Calcule la moyenne general de la session de l utilisateur pour l annéé en cour
     * @return int|mixed
     * @throws Exception
     * @throws \Doctrine\DBAL\Exception
     */
    public function findTotalRatinsByClassRoom($session): array
    {
        $date = new \DateTime();
        return $this->createQueryBuilder('r')
            ->addSelect('SUM(r.note)/ COUNT(r.note) as total')
            ->join('r.user','u')
            ->where('u.session = :session')
            ->andWhere('YEAR(r.createdAt) = YEAR(:dateNow)')
            ->setParameter('session', $session)
            ->setParameter('dateNow', $date->format('Y-m-d 00:00:00'))
            ->getQuery()
            ->getResult()
        ;
    }

   
    
  
     /**
     * Calcule la moyenne general pour l annéé en cour par category 
     * @return int|mixed
     * @throws Exception
     * @throws \Doctrine\DBAL\Exception
     */
    public function findTotalByClassRoom($session): array
    {
        $date = new \DateTime();
        return $this->createQueryBuilder('r')
            ->addSelect('COUNT(r.category) as category ,SUM(r.note)/ COUNT(r.note) as total')
            ->join('r.user','u')
            ->where('u.session = :session')
            ->andWhere('YEAR(r.createdAt) = YEAR(:dateNow)')
            ->setParameter('session', $session)
            ->setParameter('dateNow', $date->format('Y-m-d 00:00:00'))
            ->groupBy('r.category')
            ->getQuery()
            ->getResult()
        ;
    }

     /**
     * Calcule la moyenne general pour l annéé en cour par category 
     * @return int|mixed
     * @throws Exception
     * @throws \Doctrine\DBAL\Exception
     */
    public function findTotalByCategory($id): array
    {
        $date = new \DateTime();
        return $this->createQueryBuilder('r')
            ->addSelect('COUNT(r.category) as category ,SUM(r.note)/ COUNT(r.note) as total')
            ->where('r.user = :id')
            ->andWhere('YEAR(r.createdAt) = YEAR(:dateNow)')
            ->setParameter('id', $id)
            ->setParameter('dateNow', $date->format('Y-m-d 00:00:00'))
            ->groupBy('r.category')
            ->getQuery()
            ->getResult()
        ;
    }
    // /**
    //  * @return Rating[] Returns an array of Rating objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Rating
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
