<?php

namespace App\Controller;

use App\Repository\ActivitiesRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    /**
     * @Route("")
     * @Route("/home", name="home")
     */
    public function getMarker(ActivitiesRepository $activityRepo) {
        $markers = $activityRepo->findAllActivities();
        return $this->render('home.html.twig', [
                    'markers' => $markers
        ]);
    }

}
