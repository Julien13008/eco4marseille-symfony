<?php

namespace App\Controller;

use App\Entity\Club;
use App\Form\ClubType;
use App\Repository\ClubRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/club")
 */
class ClubController extends AbstractController
{
    /**
     * @Route("/", name="club_index", methods={"GET"})
     */
    public function index(ClubRepository $clubRepository): Response
    {
        return $this->render('club/index.html.twig', [
            'clubs' => $clubRepository->findAll(),
        ]);
    } 

    /**
     * @Route("/new", name="club_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $user_data = json_decode($request->getContent());
        $club = new Club();
        $club->setName($userdata["nomDuClub"]);
        $club->setRepresentant($userdata["nomDuRepresentant"]);
        $club->setEmail($userdata["emailClub"]);
        $club->setmotDePasse($user_data["motDePasseClub"]);
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($club);
        $entityManager->flush();
        
        return $this->json('Success');

    }
    
    /**
     * @Route("/{id}", name="club_show", methods={"GET"})
     */
    public function show(Club $club): Response
    {
        return $this->render('club/show.html.twig', [
            'club' => $club,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="club_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Club $club): Response
    {
        $form = $this->createForm(ClubType::class, $club);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('club_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('club/edit.html.twig', [
            'club' => $club,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="club_delete", methods={"POST"})
     */
    public function delete(Request $request, Club $club): Response
    {
        if ($this->isCsrfTokenValid('delete'.$club->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($club);
            $entityManager->flush();
        }

        return $this->redirectToRoute('club_index', [], Response::HTTP_SEE_OTHER);
    }
}
