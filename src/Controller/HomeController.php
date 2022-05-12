<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Commentaire;
use App\Entity\Evenement;
use App\Entity\Participation;
use App\Entity\Publication;
use App\Entity\User;
use App\Form\CommentaireType;
use App\Form\ParticipationType;
use App\Repository\UserRepository;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ParticipationRepository;
use App\Repository\CommentaireRepository;
use App\Repository\PublicationRepository;
use App\Repository\EventRepository;


use Symfony\Component\HttpFoundation\Session\SessionInterface;


use App\Entity\Event;
use Symfony\Component\Stopwatch\Stopwatch;

use Symfony\Component\PropertyAccess\PropertyAccess;
class HomeController extends AbstractController
{



    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
   
    /**
     * @Route("/admin", name="app_home_admin")
     */

    public function admin(SessionInterface $session): Response
    {
        if($session->get('role')!='admin'){
            var_dump('Access denied');
            die();
        }
        return $this->render('base_admin.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/parent", name="app_home_parent")
     */
    public function parent(SessionInterface $session): Response
    {
        if($session->get('role')!='parent'){
            var_dump('Access denied');
            die();
        }
        return $this->render('base.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }



    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {
        return $this->render('home/publication.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/events", name="events")
     */
    public function Events(Request $request,EventRepository  $eventRepository,PaginatorInterface $paginator): Response
    {
        $allEvent=$this->getDoctrine()->getRepository(Event::class)->findAll();
        // Paginate the results of the query
        $listEvent= $paginator->paginate(
        // Doctrine Query, not results
            $allEvent,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            3
        );
        return $this->render('home/events.html.twig', [
            'events' => $listEvent,
        ]);

    }

    /**
     * @Route("/event/{id}", name="event")
     */
    public function Event( Request $request,int $id ,EventRepository  $eventRepository, UserRepository $userRepository,MailerInterface $mailer): Response
    {

        $propertyAccessor = PropertyAccess::createPropertyAccessor();
        $pub = $eventRepository->find($id);
        $stopwatch = new Stopwatch();
        // starts event named 'foo'
        $stopwatch->start('foo');
        // ... some code goes here


        $participation = new Participation();
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);
        if ( $form->isSubmitted() ) {
            $participation->setIdEvent($pub);
          //  $user = $userRepository->find(1);

            //$participation->setIdUser($user);
            $em = $this->getDoctrine()->getManager();
            $pub->setCapaciteEvent($pub->getCapaciteEvent()-1);

            $email = (new Email())
                ->from('ranianadine.benhadjyoussef@esprit.tn')
                ->to('rania99belhajyoussef@gmail.com')
                ->priority(Email::PRIORITY_HIGH)
                ->subject('[Yeahkids] Confirmation de la Participation !')
                //->text('Sending emails is fun again!')
                ->html('<p>Bonjour cher(e) Mr/Mme '.'</p><br>
                   <p>Votre réservation a été bien passée .</p><br>
                   <p>Merci pour Votre Confiance !!</p>');
            $mailer->send($email);
            $em->persist($participation);
            $em->flush();
            return $this->redirect($this->generateUrl('event', array('id' => $id)));

        }

       // $rem = ($propertyAccessor->getValue($pub, 'dateDebutEvent'))- new \DateTime();
        return $this->render('home/event.html.twig', [
            'event' =>$pub,
            'form' => $form->createView(),
           // 'stopwatch' =>$stopwatch,
        ]);
    }


    /**
     * @Route("/publication/{id}", name="publication")
     */
    public function Publication( Request $request,int $id , PublicationRepository $publicationRepository ,CommentaireRepository  $commentaireRepository , UserRepository $userRepository): Response
    {


        $pub = $publicationRepository->find($id);
        /*$pub->setIdUser();
        $em = $this->getDoctrine()->getManager();
        $em->persist($pub);
        $em->flush();*/

        $comments = $commentaireRepository->findBy(
            ['idPub' => $id]
        );
        $comment = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $comment);
        $form->handleRequest($request);
        if ( $form->isSubmitted() ) {
                $comment->setIdPub($pub);
                //$user = $userRepository->find(1);

               // $comment->setIdUser($user);
                $em = $this->getDoctrine()->getManager();
                $em->persist($comment);
                $em->flush();
                return $this->redirect($this->generateUrl('publication', array('id' => $id)));

        }
        return $this->render('home/publication.html.twig', [
            'pub' =>$pub,
            'comments' =>$comments,
            'form' => $form->createView(),
        ]);

    }




    /**
     * @Route("/likePublication/{id}", name="likePublication")
     */
    public function likePublication( Request $request,int $id , PublicationRepository $publicationRepository): Response
    {


        $pub = $publicationRepository->find($id);
        $pub->setNbLike($pub->getNbLike()+1);
        $this->getDoctrine()->getManager()->persist($pub);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirect($this->generateUrl('publication', array('id' => $pub->getId())));

    }

    /**
     * @Route("/dislikePublication/{id}", name="dislikePublication")
     */
    public function dislikePublication( Request $request,int $id , PublicationRepository $publicationRepository): Response
    {


        $pub = $publicationRepository->find($id);
        $pub->setNbDislike($pub->getNbDislike()+1);
        $this->getDoctrine()->getManager()->persist($pub);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirect($this->generateUrl('publication', array('id' => $pub->getId())));

    }

    /**
     * @Route("/publications", name="publications")
     */
    public function Publications(Request $request,PublicationRepository $publicationRepository,PaginatorInterface $paginator): Response
    {

        $allPubs=$this->getDoctrine()->getRepository(Publication::class)->findAll();
        // Paginate the results of the query
        $listpubs= $paginator->paginate(
        // Doctrine Query, not results
            $allPubs,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            3
        );
        $pubs = $publicationRepository->findAll();

        return $this->render('home/publications.html.twig', [
            'pubs' => $listpubs,
        ]);
    }
    /**
     * @Route ("/pdflivraison", name="pdflivraison")

     */
    public function PdfLivraison(Pdf $knpSnappyPdf)
    {

        $html = $this->renderView('home/PdfLivraison.html.twig', array(


        ));

        return new PdfResponse(
            $knpSnappyPdf->getOutputFromHtml($html),
            'Livraison.pdf'
        );
    }






}








































































































































































































































































































































