<?php

namespace App\Controller;

use App\Entity\Activity;
use App\Form\FormActivityType;
use App\Repository\ActivitiesRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ActivityController extends Controller {

    /**
     * @Route("/addactivity", name="addactivity")
     */
    public function ActivtiyForm(ObjectManager $manager, Request $request) {
        $activity = new Activity();
        $activity->setCreator($this->getUser());
        $form = $this->CreateForm(FormActivityType::class, $activity)
        ->add('locate', SubmitType::class, array(
            'label' => 'Locate'
        ))
        ->add('Add activity', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //upload du fichier image
            $picture = $activity->getPictures();
            $fileName = md5(uniqid()) . '.' . $picture->guessExtension();
            //move_upload_file
            $picture->move('uploads/picture', $fileName);
            $activity->setPictures($fileName);

            //Enregistrement de l'activity
            $manager->persist($activity);
            $manager->flush();
            return $this->redirectToRoute('home');
        }
        return $this->render('add_activity.html.twig', ['form' => $form->createView()]);
    }
    



     /**
     * @Route("/listactivity", name="listactivity")
     */
    public function listActivity(ActivitiesRepository $activityRepo)

   {

       $activities = $activityRepo->findAll();

       return $this->render('listactivity.html.twig', ['activities' => $activities]);

   }
    

    
    
}



 