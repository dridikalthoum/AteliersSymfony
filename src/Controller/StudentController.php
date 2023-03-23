<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class StudentController extends AbstractController
{
    #[Route('/home', name: "app_student")]
    public function index(): Response
    {
        $message = 'Bonjour mes étudiants';

        return new Response('<html><body>' . $message . '</body></html>');
    }
}

