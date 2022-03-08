<?php

namespace App\Repository;

use App\Entity\Abonnement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method Abonnement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Abonnement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Abonnement[]    findAll()
 * @method Abonnement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AbonnementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Abonnement::class);
    }
    function SearchNom($nsc)

    {
        return $this->createQueryBuilder('o')
            ->where ('o.name LIKE :name_aboonement')
            ->setParameter('name','%'.$nsc.'%')
            ->getQuery()->getResult();
        ;

    }
    public function findEntitiesByString($str)
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT p
            FROM App\Entity\Abonnement p
            WHERE p.name LIKE :str'

        )->setParameter('str', $str);

        // returns an array of Product objects
        return $query->getResult();
    }

    // /**
    //  * @return Abonnement[] Returns an array of Abonnement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Abonnement
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    function tri_asc()
    {
        return $this->createQueryBuilder('abonnement')
            ->orderBy('abonnement.birthday ','ASC')
            ->getQuery()->getResult();
    }
    function tri_desc()
    {
        return $this->createQueryBuilder('abonnement')
            ->orderBy('abonnement.birthday ','DESC')
            ->getQuery()->getResult();
    }


    function reche($data)
    {
        return $this->createQueryBuilder('abonnement')
            ->Where('abonnement.name Like :name')
            ->setParameter('name', '%'.$data.'%')
            ->getQuery()->getResult();
    }
}
