<?php

namespace App\Controller;

use App\Repository\AdviceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AdviceController extends Controller {

    /**
     * 
     * @Route("/advice", name="advice_list")
     */
     public function getList(AdviceRepository $adviceRepo)
    {
        // notre repository est "injecté" en paramètre de l'action (la méthode)
        // de notre contrôleur. $userRepo contient donc une instance (un objet)
        // prêt à l'emploi de class UserRepository.
        // Cet objet nous sert à récupérer notre liste d'utilisateur.
        
        $advices = $adviceRepo->findAll(); 
        return $this->render('advice_list.html.twig', [
            'advices' => $advices
        ]);
    }

}
