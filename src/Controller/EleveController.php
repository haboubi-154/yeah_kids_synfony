<?php

namespace App\Controller;

use App\Entity\Eleve;
use App\Form\EleveType;
use App\Repository\EleveRepository;
use App\Repository\JardinenfantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;


/**
 * @Route("/eleve")
 */
class EleveController extends AbstractController
{


    /**
     * @Route("/trinom", name="trinom1")
     */
    public function OrderByNom(EntityManagerInterface $entityManager,EleveRepository $repository,Request $request,PaginatorInterface $paginator)
    {

        $allEleve = $repository->orderByNom();



        $el = $paginator->paginate(
        // Doctrine Query, not results
            $allEleve,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            4
        );


        return $this->render('eleve/index.html.twig', [
            'eleves' => $el,
        ]);

    }

    /**
     * @Route("/triprenom", name="triprenom")
     */
    public function OrderByPrenom(EntityManagerInterface $entityManager,EleveRepository $repository,Request $request,PaginatorInterface $paginator)
    {

        $allEleve = $repository->orderByPrenom();

        $el = $paginator->paginate(
        // Doctrine Query, not results
            $allEleve,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            4
        );


        return $this->render('eleve/index.html.twig', [
            'eleves' => $el,
        ]);

    }

    /**
     * @Route("/triage", name="triage")
     */
    public function OrderByAge(EntityManagerInterface $entityManager,EleveRepository $repository,Request $request,PaginatorInterface $paginator)
    {


        $allEleve = $repository->orderByAge();


        $el = $paginator->paginate(
        // Doctrine Query, not results
            $allEleve,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            4
        );

        return $this->render('eleve/index.html.twig', [
            'eleves' => $el,
        ]);

    }








    /**
     * @Route("/json", name="app_eleve_json", methods={"GET"})
     */
    public function testJson(EntityManagerInterface $entityManager,EleveRepository $repo)
    {


        $eleve = $repo->findAll();



        $data =  $this->get('serializer')->serialize($eleve, 'json');

        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }


    /**
     * @Route("/deleteJSON/{ide}", name="deleteJSON")
     */
    public function deleteJSON(NormalizerInterface $normalizer, $ide){

        $em = $this->getDoctrine()->getManager();
        $el = $em->getRepository(Eleve::class)->find($ide);
        $em->remove($el);
        $em->flush();
        $data=$normalizer->normalize($el);

        return new Response("eleve deleted successfully".json_encode($data));
    }



    /**
     * @Route("/updateJSON/{ide}", name="app_eleve_editJSON")
     */
    public function editJSON(Request $request,NormalizerInterface $normalizer, $ide){
        $em = $this->getDoctrine()->getManager();
        $el = $em->getRepository(Eleve::class)->find($ide);

        $el->setNom($request->get('nom'));
        $el->setPrenom($request->get('prenom'));
        $el->setAge($request->get('age'));
        $el->setIdp($request->get('idp'));
        $el->setIdj($request->get('idj'));



        $em->persist($el);
        $em->flush();
        $data=$normalizer->normalize($el,'json',['groups'=>'post:read']);

        return new Response(json_encode($data));
    }



    /**
     * @Route("/", name="app_eleve_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager,Request $request,PaginatorInterface $paginator): Response
    {
        $allEleve = $entityManager
            ->getRepository(Eleve::class)
            ->findAll();



        $el = $paginator->paginate(
        // Doctrine Query, not results
            $allEleve,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            4
        );


        return $this->render('eleve/index.html.twig', [
            'eleves' => $el,
        ]);
    }


    /**
     * @Route("/listEleve", name="listEleve", methods={"GET"})
     */
    public function listPub(EleveRepository $EleveRepository)
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $eleve = $EleveRepository->findAll();

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);



        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('eleve/pdf.html.twig', [
            'eleves' => $eleve
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("ListeEleve.pdf", [
            "Attachment" => true
        ]);
    }



    /**
     * @Route("/new", name="app_eleve_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $eleve = new Eleve();
        $form = $this->createForm(EleveType::class, $eleve);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($eleve);
            $entityManager->flush();

            return $this->redirectToRoute('app_eleve_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('eleve/new.html.twig', [
            'eleve' => $eleve,
            'form' => $form->createView(),
        ]);
    }








    /**
     * @Route("/{ide}", name="app_eleve_show", methods={"GET"})
     */
    public function show(Eleve $eleve): Response
    {
        return $this->render('eleve/show.html.twig', [
            'eleve' => $eleve,
        ]);
    }








    /**
     * @Route("/{ide}/edit", name="app_eleve_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Eleve $eleve, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EleveType::class, $eleve);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_eleve_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('eleve/edit.html.twig', [
            'eleve' => $eleve,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{ide}", name="app_eleve_delete", methods={"POST"})
     */
    public function delete(Request $request, Eleve $eleve, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$eleve->getIde(), $request->request->get('_token'))) {
            $entityManager->remove($eleve);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_eleve_index', [], Response::HTTP_SEE_OTHER);
    }






    /**
     * @Route("/drop/{id}", name="drop")
     */
    public function drop($idj){
        $data = $this->getDoctrine()->getRepository(Eleve::class)->find($idj);
        $em = $this->getDoctrine()->getManager();
        $em->remove($data);
        $em->flush();
        $this->addFlash('notice','Eleve supprimer');
        return $this->redirectToRoute('display_eleve');
    }


}
