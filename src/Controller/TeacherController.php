<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): Response
    {
        return $this->render('showTeacher.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
    }
    #[Route('/teacher/{name}', name: 'app_teacher2')]
    public function showTeacher($name): Response
    {
        $message = 'Bonjour ';
        return $this->render('teacher/showTeacher.html.twig', [
            'name' => $name,
            // 'goToIndexResult' => $this->goToIndex(),
        ]);
    }

    #[Route('/teacherR', name: 'app_teacherR')]

    public function goToIndex()
    {
        return $this->redirectToRoute('app_student');
    }
}
