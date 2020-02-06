<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WildController extends AbstractController
{
    /**
     * @route ("/wild", name="wild_index")
     * @return Response
     */
    public function index() :Response
    {
        return $this->render('wild/index.html.twig', [
            'website' => 'Wild Séries',
        ]);
    }
    /**
     * @Route("/wild/{slug}",
     * requirements={"slug" = "[a-z0-9\-]+"},
     * name="wild_show")
     * @return Response
     */
    public function show(string $slug): Response
    {
        $noSlug = "Aucune série séléctionnée, veuillez choisir une série";
        if($slug=== '') {
            $slug=$noSlug;
        } else {
            $slug=ucwords(str_replace('-', ' ',$slug));
        }
        return $this->render('wild/show.html.twig', ['slug' => $slug]);
    }
}
