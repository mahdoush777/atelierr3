<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    #[Route('/student', name: 'app_student')]
    public function index(): Response
    {
        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    }
    public function showstudent (){
        return new response ("show teacher") ; 
     }
    
     #[Route('/showstudent/{name}' , name:'show_student')]
     public function showstudentwithname($name)
     {
        return new response ('bonjour '.$name) ;
     }


     #[route('/showstudentTwig' ,name:'show_student_twig')]
     public function showTWIG() {
        $title = 'list of student';
        
        return $this->render('student/show.html.twig',['t'=>$title, ]);
     }
}