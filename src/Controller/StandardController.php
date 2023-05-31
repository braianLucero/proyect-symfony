<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StandardController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('standard/index.html.twig', [
            'controller_name' => 'index',
        ]);
    }

    /** 
     * @Route("/pagina2", name="pagina2")
     */
    public function prueba(){
        return $this->render('standard/pagina2.html.twig',['braian' => 'pagina2',]);
    }

    


}
