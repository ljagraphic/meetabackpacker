<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StaticPagesController extends Controller {

    /**
     * @Route("/termsandconditions", name="termsandconditions")
     */
    public function terms() {
        return $this->render('termsandconditions.html.twig');
    }

    /**
     * @Route("/contactus", name="contactus")
     */
    public function contactus(Request $request, \Swift_Mailer $mailer) {
        if ($request->getMethod() == 'POST') {
            $post = $request->request;
            extract($post);
            $message = (new \Swift_Message($subject))
                    ->setFrom($email)
                    ->setTo('contact@gmail.com')
                    ->setBody(
                    $content
                    )
            /*
             * If you also want to include a plaintext version of the message
              ->addPart(
              $this->renderView(
              'emails/registration.txt.twig',
              array('name' => $name)
              ),
              'text/plain'
              )
             */
            ;

            if( ! $mailer->send($message)) {
                // ERROR
                
            }
        }
        return $this->render('contactus.html.twig');
    }

}
