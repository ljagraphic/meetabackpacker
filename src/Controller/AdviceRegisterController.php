<?php

namespace App\Controller;

use App\Entity\Advice;
use App\Form\FormAdviceType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdviceRegisterController extends Controller{

    /**
     * @Route("/advice", name="advice_register")
     */
    public function AdviceForm(ObjectManager $manager, Request $request) {
         // $this->denyAccessUnlessGranted('ROLE_USER',null,'Vous devez être connecté pour accéder à cette page !');

        $advice = new Advice();
        $form = $this->createForm(FormAdviceType::class, $advice)
                ->add('Envoyer', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


           

            //Enregistrement de l'avis
            $manager->persist($advice);
            $manager->flush();
        }

        return $this->render('add_advice.html.twig', [
                    'form' => $form->createView()
        ]);
    }

}
