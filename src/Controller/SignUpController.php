<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\FormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class SignUpController extends Controller {
    
    /**
     * @Route("/signup", name="signup")
     */
    public function SignUpForm()
            
    {
        $user = new User();
        $form = $this->CreateForm(FormType::class, $user);
        return $this->render('signup.html.twig', [ 'form' => $form->createView() ]);

        
    }
            
          
    
}
