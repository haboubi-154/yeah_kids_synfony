<?php

namespace App\Controller;

use App\Entity\Jardinenfant;
use App\Form\JardinenfantType;
use App\Repository\JardinenfantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;



/**
 * @Route("/jardinenfant")
 */
class JardinenfantController extends AbstractController
{
    /**
     * @Route("/affichefront", name="app_jardinenfant_affiche", methods={"GET"})
     */
    public function affichefront(EntityManagerInterface $entityManager): Response
    {
        $jardinenfants = $entityManager
            ->getRepository(Jardinenfant::class)
            ->findAll();

        return $this->render('/front/jardinenfant.html.twig', [
            'jardinenfants' => $jardinenfants,
        ]);
    }

    /**
     * @Route("/trinom", name="trinom")
     */
    public function OrderByNom(EntityManagerInterface $entityManager,JardinenfantRepository $repository,Request $request,PaginatorInterface $paginator)
    {

        $allJardinEnfant = $repository->orderByNom();
        $jarEnf = $paginator->paginate(
        // Doctrine Query, not results
            $allJardinEnfant,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            4
        );
        return $this->render('jardinenfant/index.html.twig',
            ['jardinenfants' => $jarEnf,]);
    }

    /**
     * @Route("/trinbEmployes", name="trinbEmployes")
     */
    public function OrderByNbEmployes(EntityManagerInterface $entityManager,JardinenfantRepository $repository,Request $request,PaginatorInterface $paginator)
    {

        $allJardinEnfant = $repository->orderByNbEmployes();
        $jarEnf = $paginator->paginate(
        // Doctrine Query, not results
            $allJardinEnfant,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            4
        );
        return $this->render('jardinenfant/index.html.twig',
            ['jardinenfants' => $jarEnf,]);
    }

        /**
         * @Route("/triprix", name="triprix")
         */
        public function OrderByPrix(EntityManagerInterface $entityManager,JardinenfantRepository $repository,Request $request,PaginatorInterface $paginator)
    {

        $allJardinEnfant = $repository->orderByPrix();
        $jarEnf = $paginator->paginate(
        // Doctrine Query, not results
            $allJardinEnfant,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            4
        );

        return $this->render('jardinenfant/index.html.twig',
            ['jardinenfants' => $jarEnf,]);
    }




    /**
     * @Route("/", name="app_jardinenfant_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager,JardinenfantRepository $repository,Request $request,PaginatorInterface $paginator): Response
    {
        $jardinenfants = $entityManager
            ->getRepository(Jardinenfant::class)
            ->findAll();

        $jarEnf = $paginator->paginate(
        // Doctrine Query, not results
            $jardinenfants,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            4
        );

        return $this->render('jardinenfant/index.html.twig', [
            'jardinenfants' => $jarEnf,
        ]);
    }

    /**
     * @Route("/listJardinEnf", name="listJardinEnf", methods={"GET"})
     */
    public function listPub(JardinenfantRepository $JardinenfantRepository)
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $jardEnf = $JardinenfantRepository->findAll();

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        $png = file_get_contents("logoenfant.png");
        $pngbase64 = base64_encode($png);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('jardinenfant/pdf.html.twig', [
            'jardinenfants' => $jardEnf,"img64"=>$pngbase64,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("ListeJardinsEnfants.pdf", [
            "Attachment" => true
        ]);
    }

    /**
     * @Route("/new", name="app_jardinenfant_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $jardinenfant = new Jardinenfant();
        $form = $this->createForm(JardinenfantType::class, $jardinenfant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $image = $form->get('logo')->getData();
            $imageName = md5(uniqid()).'.'.$image->guessExtension();
            $image->move($this->getParameter('brochures_directory'), $imageName);
            $jardinenfant->setLogo($imageName);
            $entityManager->persist($jardinenfant);
            $entityManager->flush();

            $this->addFlash('info','ajout avec succes');

            return $this->redirectToRoute('app_jardinenfant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('jardinenfant/new.html.twig', [
            'jardinenfant' => $jardinenfant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idj}", name="app_jardinenfant_show", methods={"GET"})
     */
    public function show(Jardinenfant $jardinenfant): Response
    {
        return $this->render('jardinenfant/show.html.twig', [
            'jardinenfant' => $jardinenfant,
        ]);
    }

    /**
     * @Route("/{idj}/edit", name="app_jardinenfant_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Jardinenfant $jardinenfant, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(JardinenfantType::class, $jardinenfant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('logo')->getData();
            $imageName = md5(uniqid()).'.'.$image->guessExtension();
            $image->move($this->getParameter('brochures_directory'), $imageName);
            $jardinenfant->setLogo($imageName);
            $entityManager->flush();
            $this->addFlash('info','modifier avec succes');

            return $this->redirectToRoute('app_jardinenfant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('jardinenfant/edit.html.twig', [
            'jardinenfant' => $jardinenfant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idj}", name="app_jardinenfant_delete", methods={"POST"})
     */
    public function delete(Request $request, Jardinenfant $jardinenfant, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$jardinenfant->getIdj(), $request->request->get('_token'))) {
            $entityManager->remove($jardinenfant);
            $entityManager->flush();

            $this->addFlash('info','delete avec succes');
        }

        return $this->redirectToRoute('app_jardinenfant_index', [], Response::HTTP_SEE_OTHER);
    }




    /**
     * @Route("/export/excel", name="app_jardinenfant_excel")
     * Methods=({"GET"})
     *
     */
    public function exportxl(EntityManagerInterface $entityManager)
    {
        $time = new \DateTime();
        $columnValues =  $entityManager
            ->getRepository(Jardinenfant::class)
            ->findAll();

         $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $columnNames = [
            'idj',
            'nom',
            'description',
            'adresse',
            'datecreation',
            'prix',
            'telephone'
        ];
        $columnLetter = 'A';

        foreach ($columnNames as $columnName) {
            // Allow to access AA column if needed and more
            $sheet->setCellValue($columnLetter.'1', $columnName);
            $columnLetter++;

        }

        $i = 2;

        foreach ($columnValues as $columnValue) {
            $columnLetter = 'A';
            $sheet->setCellValue('A'.$i, $columnValue->getIdj());
            $sheet->setCellValue('B'.$i, $columnValue->getNom());
            $sheet->setCellValue('C'.$i, $columnValue->getDescription());
            $sheet->setCellValue('D'.$i, $columnValue->getAdresse());
            $sheet->setCellValue('E'.$i, $columnValue->getDateCreation());
            $sheet->setCellValue('F'.$i, $columnValue->getPrix());
            $sheet->setCellValue('G'.$i, $columnValue->getTelephone());

            $i++;
        }
        $sheet->setTitle("JardinEnfant List");

        $writer = new Xlsx($spreadsheet);
        $fileName = 'JardinEnfant.xlsx';

        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        $writer->save($temp_file);
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }





}
