<?php

namespace App\Controller;

use App\Entity\Activity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DetailsActivityController extends Controller {

    /**
     * 
     * @Route("/activity/{id}", name="details_activity")
     */
    public function detailsactivity(Activity $activity)
    {
        return $this->render('details_activity.html.twig', [
            'activity' => $activity
        ]);
        
    }
   
}