<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
	#[Route('/user', name: 'app_user')]
	public function index(): Response
	{
		$users = [
			['nom' => 'Dupont', 'prenom' => 'Jean', 'age' => 25, 'profession' => 'Développeur', 'status' => 'junior'],
			['nom' => 'Martin', 'prenom' => 'Sophie', 'age' => 30, 'profession' => 'Designer', 'status' => 'senior'],
			['nom' => 'Bernard', 'prenom' => 'Marie', 'age' => 28, 'profession' => 'Chef de projet', 'status' => 'junior'],
			['nom' => 'Durand', 'prenom' => 'Pierre', 'age' => 35, 'profession' => 'Ingénieur', 'status' => 'senior'],
			['nom' => 'Lefevre', 'prenom' => 'Laura', 'age' => 29, 'profession' => 'Développeuse', 'status' => 'junior'],
			['nom' => 'Moreau', 'prenom' => 'Thomas', 'age' => 22, 'profession' => 'Développeur', 'status' => 'junior'],
			['nom' => 'Petit', 'prenom' => 'Emma', 'age' => 24, 'profession' => 'Designer UX', 'status' => 'junior'],
			['nom' => 'Roux', 'prenom' => 'Lucas', 'age' => 32, 'profession' => 'Architecte Web', 'status' => 'senior'],
			['nom' => 'Garcia', 'prenom' => 'Sofia', 'age' => 27, 'profession' => 'Développeuse Mobile', 'status' => 'junior'],
			['nom' => 'Michel', 'prenom' => 'Antoine', 'age' => 40, 'profession' => 'Chef de Projet Senior', 'status' => 'senior'],
			['nom' => 'Simon', 'prenom' => 'Julie', 'age' => 26, 'profession' => 'Data Analyst', 'status' => 'junior'],
			['nom' => 'Lambert', 'prenom' => 'Nicolas', 'age' => 33, 'profession' => 'DevOps', 'status' => 'senior'],
			['nom' => 'Robert', 'prenom' => 'Camille', 'age' => 29, 'profession' => 'Full-Stack', 'status' => 'junior'],
			['nom' => 'Dubois', 'prenom' => 'Alexandre', 'age' => 36, 'profession' => 'Scrum Master', 'status' => 'senior'],
			['nom' => 'Morel', 'prenom' => 'Léa', 'age' => 25, 'profession' => 'Front-End', 'status' => 'junior'],
			['nom' => 'Fournier', 'prenom' => 'Maxime', 'age' => 31, 'profession' => 'Back-End', 'status' => 'senior'],
			['nom' => 'Vincent', 'prenom' => 'Clara', 'age' => 28, 'profession' => 'UI Designer', 'status' => 'junior'],
			['nom' => 'Mercier', 'prenom' => 'Hugo', 'age' => 34, 'profession' => 'Product Owner', 'status' => 'senior'],
			['nom' => 'Blanc', 'prenom' => 'Sarah', 'age' => 27, 'profession' => 'QA Engineer', 'status' => 'junior'],
			['nom' => 'Guerin', 'prenom' => 'Thomas', 'age' => 38, 'profession' => 'Tech Lead', 'status' => 'senior'],
			['nom' => 'Boyer', 'prenom' => 'Marine', 'age' => 26, 'profession' => 'UX Researcher', 'status' => 'junior']
		];
		return $this->render('user/index.html.twig', [
			'users' => $users
		]);
	}
}
