<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class SignInController extends Controller {

    /**
     * 
     * @Route("/signin", name="signin")
     */
    public function signin(Request $request)
    {
        return $this->render('signin.html.twig');
        
    }
    
    
}
