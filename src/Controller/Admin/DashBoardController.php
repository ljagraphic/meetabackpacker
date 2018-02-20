<?php

namespace App\Controller\Admin;

use App\Repository\ActivitiesRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DashBoardController extends Controller {

    
    
    
    /**
     * 
     * @Route("/admin/dashboard", name="dashboard")
     */
     public function myDashBoard(UserRepository $userRepo, ActivitiesRepository $activityRepo)
    {
         
         $users = $userRepo->findAll();
         $category = $activityRepo->findAll(); 
        
         
         
        return $this->render('admin/dashboard.html.twig', [ 'users' => $users, 'category' => $category]);
    }

}
