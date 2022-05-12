<?php

namespace App\Controller;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use App\Entity\User;
use App\Form\ForgetPasswordType;
use App\Form\LoginType;
use phpDocumentor\Reflection\PseudoTypes\True_;

class LoginController extends AbstractController
{
    
   
    /**
     * @Route("/", name="app_login", methods={"GET", "POST"})
     */
    public function index(Request $request,UserRepository $userRepository,SessionInterface $session): Response
    {   
        $form = $this->createForm(LoginType::class);
        $form->handleRequest($request);
        

        if ($form->isSubmitted() && $form->isValid()) {
            $data=$form->getData();
            $service=$userRepository->findOneBy(array('login' => $data['login']));
            if ($service !=null){
                if(password_verify($data['password'],$service->getPassword())==true){
                    if($service->getblock()==1){
                        return $this->render('login/login.html.twig', [
                            'form' => $form->createView(),
                            'message'=>"account is blocked for the moment , contact this adresse 'pivdev04@gmail.com'  to solve the problem",
                        ]);  
                    }
                    else{

        // stores an attribute in the session for later reuse
                        $session->clear();
        $session->set('nom', $service->getNom());
        $session->set('login', $service->getLogin());
        $session->set('role', $service->getRole());
        $session->set('img', $service->getImg());
        $session->set('id', $service->getid());



if($service->getRole()=='admin'){
                    return $this->redirectToRoute('app_home_admin', [], Response::HTTP_SEE_OTHER);
}
elseif($service->getRole()=='manager'){
    return $this->redirectToRoute('app_home_manager', [], Response::HTTP_SEE_OTHER);

}   
else{
    return $this->redirectToRoute('app_home_parent', [], Response::HTTP_SEE_OTHER);

} 
                }
                }
                else{
                    return $this->render('login/login.html.twig', [
                        'form' => $form->createView(),
                        'message'=>"login and password dont match",
                    ]);            
                }

            
            }
            else{
                return $this->render('login/login.html.twig', [
                    'form' => $form->createView(),
                    'message'=>"login dont match with any user",
                ]);            
            }
        

        
    
    

}
return $this->render('login/login.html.twig', [
    'form' => $form->createView(),
    'message'=>'',
]);

    }
    #[Route('/email')]
    /** 
     * @Route("/forget_password", name="app_login_forget_password", methods={"GET", "POST"})
     */
    public function forget_password(Request $request,UserRepository $userRepository,MailerInterface $mailer): Response
    {   
        $form = $this->createForm(ForgetPasswordType::class);
        $form->handleRequest($request);
        

        if ($form->isSubmitted() && $form->isValid()) {
            $data=$form->getData();
            
            $service=$userRepository->findOneBy(array('login' => $data['login']));
            if ($service !=null){
                if(strcmp($service->getQuestion(),$data['question']) == 0 && strcmp($service->getResponde(),$data['reponse']) == 0){
                        $User = new User();
                        $User =$service;
                    
                        $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/!@#$%^&*()';
     $randStringLen = 8;

     $randString = "";
     for ($i = 0; $i < $randStringLen; $i++) {
         $randString .= $charset[mt_rand(0, strlen($charset) - 1)];
     }
     $User =$User->setPassword($randString);
                    $User->hash_password(30);
                    $userRepository->add($User);
                    


                        $email = (new Email())
                        ->from("pivdev04@gmail.com")
                        ->to($service->getEmail())
                       
                        ->subject('get new password')
                        ->text('your new password:'.$randString."\n WELCOME BACK ".$service->getPrenom()." ".$service->getNom());
                        
            
                    $mailer->send($email);



                    return $this->redirectToRoute('app_login', ['message' => 'operation has been done successfully'], Response::HTTP_SEE_OTHER);

                }
                else{
                    return $this->render('login/login.html.twig', [
                        'form' => $form->createView(),
                        'message'=>"verifier votre information",
                    ]);            
                }

            
            }
            else{
                return $this->render('login/forget_password.html.twig', [
                    'form' => $form->createView(),
                    'message'=>"login dont match with any user",
                ]);            
            }
            return $this->render('login/forget_password.html.twig', [
                'form' => $form->createView(),
                'message'=>"",
            ]); 
        

        
    
    

}
return $this->render('login/forget_password.html.twig', [
    'form' => $form->createView(),
    'message'=>'',
]);

    }
}