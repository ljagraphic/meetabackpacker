<?php

namespace App\Controller;

use App\Entity\Activity;
use App\Entity\Advice;
use App\Form\FormActivityType;
use App\Form\FormAdviceType;
use App\Repository\ActivitiesRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;









class ActivityController extends Controller {

    /**
     *
     * @Route("/addactivity", name="addactivity")
     */
    public function ActivtiyForm(ObjectManager $manager, Request $request,ActivitiesRepository $activityRepo){
        $this->denyAccessUnlessGranted('ROLE_USER',null,'Vous devez être connecté pour accéder à cette page !');
        $activity = new Activity();
        $activity->setCreator($this->getUser());
          $markers = $activityRepo->findAllActivities();
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
        return $this->render('add_activity.html.twig', [
          
            'form' => $form->createView(),
              'markers' => $markers
                ]);
    }
    



     /**
     * @Route("/listactivity", name="listactivity")
     */
    public function listActivity(ActivitiesRepository $activityRepo)

   {
       $markers = $activityRepo->findAllActivities();
       $activities = $activityRepo->findAll();

       return $this->render('listactivity.html.twig', [
           'activities' => $activities,
           'markers' => $markers
           ]);

   }

    /**
     * @Route("/listactivity/category/{name}", name="list_product_by_tag")
     */
    public function getListByTag($name, ActivitiesRepository $activityRepo) {
        $activities = $activityRepo->findByCategory($name);
        $categories = $activityRepo->getCategories();
        $markers = $activityRepo->findAllActivities();
        return $this->render('listactivity_by_category.html.twig', [
           'activities' => $activities,
            'categories' => $categories,
            'markers' => $markers
        ]);
    }
  
    /**
     * @Route("/activity/{id}", name="advice_register")
     */
    public function AdviceForm(ObjectManager $manager, Request $request, Activity $activity) {
         // $this->denyAccessUnlessGranted('ROLE_USER',null,'Vous devez être connecté pour accéder à cette page !');

        $advice = new Advice();
        $advice->setUser($this->getUser());
        $advice->setActivity($this->getActivity());
        $form = $this->createForm(FormAdviceType::class, $advice)
                ->add('Envoyer', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            //Enregistrement de l'avis
            $manager->persist($advice);
            $manager->flush();
        }
        
        

        return $this->render('details_activity.html.twig', [
                    'form' => $form->createView(),
                    'activity' => $activity
        ]);
    }  

    
    
}



 