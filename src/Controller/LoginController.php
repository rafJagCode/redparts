<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/account-login", name="account-login")
     */
    public function index(): Response
    {
		$obj =['1' => 'test'];
        dump($obj);
        return $this->render('/pages/account-login.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}
