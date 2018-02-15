<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class SignInController extends Controller {

    /**
     * 
     * @Route("/signin", name="signin")
     */
    public function signin()
    {
        return $this->render('signin.html.twig');
        
    }
    
    
}
