<?php

namespace App\Repository;

use App\Entity\Jardinenfant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Jardinenfant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Jardinenfant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Jardinenfant[]    findAll()
 * @method Jardinenfant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JardinenfantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Jardinenfant::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Jardinenfant $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Jardinenfant $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * Requête QueryBuilder
     * */
    public function orderByNom()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.nom', 'ASC')
            ->getQuery()->getResult();
    }

    /**
     * Requête QueryBuilder
     * */
    public function orderByNbEmployes()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.nbEmployes', 'ASC')
            ->getQuery()->getResult();
    }


    /**
     * Requête QueryBuilder
     * */
    public function orderByPrix()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.prix', 'ASC')
            ->getQuery()->getResult();
    }


    // /**
    //  * @return Jardinenfant[] Returns an array of Jardinenfant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Jardinenfant
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
