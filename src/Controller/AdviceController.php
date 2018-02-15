<?php



namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * 
 *@Route("/admin/advice" name="advice")
 */
class AdviceController extends Controller{
    
     public function index() {
        return $this->render('advice_list.html.twig');
    }
     
}

