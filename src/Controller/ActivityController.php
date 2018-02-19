<?php

namespace App\Controller;

use App\Entity\Activity;
use App\Form\FormActivityType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

    
class ActivityController extends Controller{
    
    /**
     * @Route("/activity", name="activity")
     */
    public function ActivtiyForm(ObjectManager $manager, Request $request)
            
    {
        $activity = new Activity();
        $form = $this->CreateForm(FormActivityType::class, $activity)
        ->add('Add activity', SubmitType::class); 
        $form->handleRequest($request);
         if($form->isSubmitted() && $form->isValid()){
           //upload du fichier image
           
           $picture = $activity->getPictures();
           $fileName= md5(uniqid()).'.'.$picture->guessExtension();
           //move_upload_file
           $picture->move('uploads/picture', $fileName);
           $activity->setPictures($fileName);
           
           //Enregistrement de l'activity
           $manager->persist($activity);
           $manager->flush();
           return $this->redirectToRoute('home');
           
         }
        return $this->render('add_activity.html.twig', [ 'form' => $form->createView() ]);
    }
}
