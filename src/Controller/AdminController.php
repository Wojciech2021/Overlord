<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Service\UsersService;
use App\Form\AdminForms\AssignRolesType;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends AbstractController
{

    #[Route('/admin', name: 'app_admin')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(): Response
    {


        return $this->render('admin/index.html.twig', [
        ]);
    }

    #[Route('/admin/users', name: 'app_admin_users')]
    #[IsGranted('ROLE_ADMIN')]
    public function users(UsersService $usersService): Response
    {
        $users = $usersService->getAllUsers();

        return $this->render('admin/admin_users.html.twig', [
            'controller_name' => 'AdminController',
            'users' => $users
        ]);
    }

    #[Route('/admin/users/{id}', name: 'app_admin_users_assign_roles')]
    #[IsGranted('ROLE_ADMIN')]
    public function users_assign_roles(UsersService $usersService,int $id, Request $request): Response
    {
        $user = $usersService->getUser($id);

        $form = $this->createForm(AssignRolesType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            dd($form->getData('roles'));
        }

        return $this->render('admin/admin_assign_role.html.twig', [
            'controller_name' => 'AdminController',
            'user' => $user,
            'form' => $form->createView()
        ]);
    }
}
