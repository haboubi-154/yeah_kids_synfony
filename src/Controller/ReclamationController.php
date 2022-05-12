<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use mysqli;

use Symfony\Component\HttpFoundation\Session\SessionInterface;


/**
 * @Route("/reclamation")
 */
class ReclamationController extends AbstractController
{
    /**
     * @Route("/", name="app_reclamation_index", methods={"GET"})
     */
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_reclamation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ReclamationRepository $reclamationRepository,SessionInterface $session): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "esprit";
$test=false;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM offensiveword";
$result = $conn->query($sql);
$conn->close();
  
 

        
        
        
        
        
        
        
        
        
     if ($form->isSubmitted() && $form->isValid()) {
         
        $service=$form->getData();
        $text=$service->getText();
            if ($result->num_rows > 0)        {     // output data of each row
                while($row = $result->fetch_assoc()) {
                   
                    $pos = strpos($text,$row['word'] );
                     
                  if(gettype($pos)=="integer" && strpos($text,$row['word']) >=0 ) {
                    
                        $test=true;
                    
                    

                }
                }
            }
                

            if($test == false){
                $reclamation->setIdParent($session->get('id'));
                            $reclamationRepository->add($reclamation);
            return $this->redirectToRoute('app_home_parent', [], Response::HTTP_SEE_OTHER);
        }
        
            else{
                $reclamation=new Reclamation();
                return $this->render('reclamation/new.html.twig', [
                    'reclamation' => $reclamation,
                    'form' => $form->createView(),
                    'message'=> "STOP USING OFFENSIVE WORD"
                ]);

        }
        
    }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,'message'=>'',
            'form' => $form->createView(),

        ]);
    
}

    /**
     * @Route("/{idReclamation}", name="app_reclamation_show", methods={"GET"})
     */
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    /**
     * @Route("/{idReclamation}/edit", name="app_reclamation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationRepository->add($reclamation);
            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idReclamation}", name="app_reclamation_delete", methods={"POST"})
     */
    public function delete(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getIdReclamation(), $request->request->get('_token'))) {
            $reclamationRepository->remove($reclamation);
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }


}
