<?php


namespace App\Twig;

use App\Repository\ActivitiesRepository;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoryExtension
 *
 * @author Etudiant
 */
class CategoryExtension extends AbstractExtension {
    
    private $activityRepo;
    
    public function __construct(ActivitiesRepository $activityRepo) {
        $this->activityRepo = $activityRepo;
    }
    
    public function getFunctions() {
        return [
            new TwigFunction('categories', array($this, 'getCategories'))
        ];
    }
    
    public function getCategories() {
        $activities = $this->activityRepo->getCategories();
        $categories = [];
        foreach($activities as $activity) {
            $categories[] = $activity['category'];
        }
        return $categories;
    }
} 
