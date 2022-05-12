<?php

namespace App\Repository;

use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Event|null find($id, $lockMode = null, $lockVersion = null)
 * @method Event|null findOneBy(array $criteria, array $orderBy = null)
 * @method Event[]    findAll()
 * @method Event[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }

    // /**
    //  * @return Event[] Returns an array of Event objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Event
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    public function huile($type)
    {
        $entityManager = $this->getEntityManager();

        return $entityManager->createQueryBuilder()->select('count(e.id)')
            ->from('App\Entity\Event', 'e')
            ->where('e.typeEvent = :val')
            ->setParameter('val', $type)
            ->getQuery()
            ->getSingleScalarResult();
    }
    public function findByUser2($value)
    {
        return $this->createQueryBuilder('u')

            ->where('u.typeEvent LIKE :val')
            ->orWhere('u.nomEvent LIKE :val2')


            ->setParameters(array('val'=> '%'.$value.'%', 'val2' => $value.'%'))
            ->orderBy('u.capaciteEvent', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }
}
