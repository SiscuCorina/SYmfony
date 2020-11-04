<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @return Response
     *
     * @Route("/", name="main")
     */
    public function index(): Response
    {
        return $this->render('number.html.twig', [
            'number' => random_int(0, 100)
        ]);
    }

    /**
     * @param $name
     *
     * @return Response
     *
     * @Route("/names/{name}")
     */
    public function name($name, LoggerInterface $logger): Response
    {
        $logger->info('User name: ' . $name);

        return $this->render('name.html.twig', [
            'name' => $name,
        ]);
    }
}
