<?php

namespace App\Controller;

use App\Entity\Astuce;
use App\Entity\Event;
use App\Entity\Publication;
use App\Form\EventType;
use App\Form\PublicationType;
use App\Repository\UserRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material\ColumnChart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ParticipationRepository;
use App\Repository\CommentaireRepository;
use App\Repository\PublicationRepository;
use App\Repository\EventRepository;

class DashboardController extends AbstractController
{

    /**
     * @Route("/back_events", name="back_events")
     */
    public function Events(EventRepository  $eventRepository): Response
    {
        return $this->render('Dashboard/Event.html.twig', [
            'events' => $eventRepository->findAll(),
        ]);
    }



    /**
     * @Route("/delete_pub/{id}", name="delete_pub")
     */
    public function delete_pub(int $id ,PublicationRepository $publicationRepository): Response
    {
        $email = $publicationRepository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($email);
        $em->flush();
        return $this->render('Dashboard/Publication.html.twig', [
            'pubs' => $publicationRepository->findAll(),
        ]);
    }




    /**
     * @Route("/delete_event/{id}", name="delete_event")
     */
    public function delete_event(int $id ,EventRepository  $eventRepository): Response
    {
        $email = $eventRepository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($email);
        $em->flush();
        return $this->render('Dashboard/Event.html.twig', [
            'events' => $eventRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new_event", name="new_event")
     */
    public function new_event(Request $request,EventRepository  $eventRepository): Response
    {
        $event = new Event();
        $event->setNomEvent('');
        $event->setTypeEvent('');
        $event->setCapaciteEvent(0);
        $event->setDateDebutEvent(new \DateTime());
        $event->setDateFinEvent(new \DateTime());
        $event->setLieuEvent('');
        $event->setPrixEvent(0);
        $event->setDescriptionEvent('
        ');
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /**
             * @var UploadedFile $file
             */
            $file = $form->get('logo')->getData();
            $fileName = bin2hex(random_bytes(6)).'.'.$file->guessExtension();
            $file->move($this->getParameter('images_directory'),$fileName);
            $event->setLogo($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();

            return $this->redirectToRoute('back_events', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('Dashboard/EventAdd.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/update_event/{id}", name="update_event")
     */
    public function update_event(Request $request, int $id ,EventRepository  $eventRepository): Response
    {
        $event = $eventRepository->find($id);
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('back_events', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('Dashboard/EventAdd.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/update_pub/{id}", name="update_pub")
     */
    public function update_publication(Request $request, int $id ,PublicationRepository  $publicationRepository): Response
    {
        $pub = $publicationRepository->find($id);
        $form = $this->createForm(PublicationType::class, $pub);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('back_publications', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('Dashboard/PublicationAdd.html.twig', [
            'pub' => $pub,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/new_Pub", name="new_Pub")
     */
    public function add_publication(Request $request,UserRepository $userRepository, PublicationRepository  $publicationRepository): Response
    {
        $pub = new Publication();
        $form = $this->createForm(PublicationType::class, $pub);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /**
             * @var UploadedFile $file
             */
            $file = $form->get('image')->getData();
            $fileName = bin2hex(random_bytes(6)).'.'.$file->guessExtension();
            $file->move($this->getParameter('images_directory'),$fileName);
            $pub->setImage($fileName);
            $pub->setNbDislike(0);
            $pub->setNbLike(0);
           // $user = $userRepository->find(1);
            //$pub->setIdUser(1);
            $pub->setImage('img/events/events_2.jpg');
            $em = $this->getDoctrine()->getManager();
            $em->persist($pub);
            $em->flush();

            return $this->redirectToRoute('back_publications', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('Dashboard/PublicationAdd.html.twig', [
            'pub' => $pub,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/back_publications", name="back_publications")
     */
    public function Publications(PublicationRepository $publicationRepository): Response
    {

        $pubs = $publicationRepository->findAll();

        return $this->render('Dashboard/Publication.html.twig', [
            'pubs' => $pubs,
        ]);
    }
    /**
     * @Route("/back/stats", name="stats")
     */
    public function statistiques(EventRepository  $eventRepository): Response
    {

        $types =array('Adventure','Sport','Nature');

        $data =array(['Type','Nombre Total des evenements'],);

        foreach ($types as $type)
        {
            $count=$eventRepository->huile($type);

            array_push($data,[$type,$count]);
        }


        $chart = new ColumnChart();
        $chart->getData()->setArrayToDataTable($data);
        $chart->getOptions()->getChart()->setTitle('Nombre de evenement par Type');
        $chart->getOptions()
            ->setBars('vertical')
            ->setHeight(400)
            ->setWidth(900)
            ->setColors(['#7570b3','#d95f02','#7570b3'])
            ->getVAxis()
            ->setFormat('decimal');


        return $this->render('Dashboard/stats.html.twig',[
            'chart'=>$chart
        ]);

    }

    /**
     * @Route("/back_events", name="findOneBy")
     */
    public function findOneBy(Request $request){
        $data=$request->get('recherche');
        $events=$this->getDoctrine()
            ->getRepository(Event::class)
            ->findOneBy($data);
        return $this->render('Dashboard/Event.html.twig',['events'=>$events]);
    }


}
