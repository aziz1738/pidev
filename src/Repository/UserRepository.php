<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Classe\Search;
use Doctrine\ORM\Query;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * @param Search $search
     * @return User[]
     */
    public function findByNom(Search $search)
    {       
            $entityManager = $this->getEntityManager();

            return $entityManager->createQuery(
                    'SELECT nom
                    FROM App\Entity\User u
                    WHERE u.nom = :val
                    '
                )
                ->setParameter('val', $search)
               
                ->setMaxResults(10);




            if(!empty($search->string)) {
                $entityManager = $this->getEntityManager();

                return $entityManager->createQuery(
                        'SELECT nom
                        FROM App\Entity\User u
                        WHERE u.nom = :val
                        '
                    )
                
                    ->andWhere('u.nom LIKE :string')
                    ->setParameter('string',"%{$search->string}%");
            }
            return $query->getQuery()->getResult();

            
        
    }
 
    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
