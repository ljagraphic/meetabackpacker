<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class SignUpController extends Controller {

    /**
     * 
     * @Route("/signup", name="signup")
     */
    public function signup()
    {
        return $this->render('signup.html.twig');
        
    }
    
    
}
