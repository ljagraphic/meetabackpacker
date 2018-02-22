<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\FormType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class SignUpController extends Controller {
    
    /**
     * @Route("/signup", name="signup")
     */
    public function signUpForm(ObjectManager $manager, Request $request ,UserPasswordEncoderInterface $passwordEncoder)
            
    {
        
        $user = new User();
        $form = $this->CreateForm(FormType::class, $user)
        ->add('SignUp', SubmitType::class);  
        
        $form->handleRequest($request);
               if($form->isSubmitted() && $form->isValid()){
           //upload du fichier image
           
           $avatar = $user->getAvatar();
           $fileName= md5(uniqid()).'.'.$avatar->guessExtension();
           //move_upload_file
           $avatar->move('uploads/ava'
                   . 'tar', $fileName);
           $user->setAvatar($fileName);
           $user->setActive('1');
           $user->setRole('ROLE_USER');
                 
           //Enregistrement du user
           $manager->persist($user);
           $manager->flush();
           return $this->redirectToRoute('login');
       }

        return $this->render('signup.html.twig', [ 'form' => $form->createView() ]);

        
    }
 
    /**
     * @Route("/userprofile", name="userprofile")
     */
    
    public function myProfile(){
        
        $this->denyAccessUnlessGranted(
                'ROLE_USER',
                null,
                'Vous devez vous  connecté pour acceder a cette page'
                
                );
        return $this->render('userprofile.html.twig');
    }
    
    
    
          
    
}
