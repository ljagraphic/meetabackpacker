<?php



namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * 
 *@Route("/advice" name="advices")
 */
class AdviceController extends Controller{
    
     public function index() {
        return $this->render('advice_list.html.twig');
    }
     
}

