<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UsersController extends AbstractController
{
    public function indexAction(): Response
    {
        $number = random_int(0, 1);

        return $this->render('users/index.html.twig', [
            'number' => $number
        ]);

//        return new Response(
//            '<html><body>Lucky number: '.$number.'</body></html>'
//        );
    }
}