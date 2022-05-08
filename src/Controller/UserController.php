<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\LoginType;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


use Symfony\Component\Mailer\Bridge\Google\Smtp\GmailTransport;
use Symfony\Component\Mailer\Mailer;
/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/index/{role}", name="app_user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository,SessionInterface $session,String $role): Response
    {
        
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findBy(array('role' => $role)),
        ]);
    }

    /**
     * @Route("/new", name="app_user_new", methods={"GET", "POST"})
     */
    public function new(Request $request, UserRepository $userRepository): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user=$user->hash_password(122);
            $userRepository->add($user);
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_user_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $userRepository->add($user);
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }


   

    /**
     * @Route("/{id}/block", name="app_user_block", methods={"GET", "POST"})
     */
    public function block(Request $request, User $user, UserRepository $userRepository): Response
    {
        if($user->getblock()==0){
            $user=$user->setblock(1);
        }
        else{
            $user=$user->setblock(0);

        }

            
        $userRepository->add($user);
            
        return $this->redirectToRoute('app_user_index', ['role'=>$user->getRole()], Response::HTTP_SEE_OTHER);
        

       
    }
    

    /**
     * @Route("/{id}", name="app_user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user);
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/email')]
    public function recupere(MailerInterface $mailer)
    {
        
    $email = (new Email())
    ->from('hello@example.com')
    ->to('you@example.com')
    //->cc('cc@example.com')
    //->bcc('bcc@example.com')
    //->replyTo('fabien@example.com')
    //->priority(Email::PRIORITY_HIGH)
    ->subject('change password')

    ->text('here you new password:');
    
    

$mailer->send($email);
 

}



}
