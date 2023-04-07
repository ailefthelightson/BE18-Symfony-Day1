<?php

namespace App\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class RobTestController 
{
    #[Route('/')]
    public function index()
    {
        // die('this is the first test');
        return new Response('HEy whats up?');

        // return $this->render('rob_test/index.html.twig', [
        //     'controller_name' => 'RobTestController',
        // ]);
    }
    #[Route ('/browse/{slug}')]
    public function browse($slug = null): Response
    {
        // // $title = str_replace('-', ' ',$slug);
        // $title = u(str_replace('-', ' ',$slug))->title(true);
        // return new Response('genre: '.$title);
    
    if($slug){
        $title = 'Genre: '.u(str_replace('-', ' ',$slug))->title(true);
    }else{
        $title = 'All Genres';
    }
    
    return new Response($title);
    
    }
}
