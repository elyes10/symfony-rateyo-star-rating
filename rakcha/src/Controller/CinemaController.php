<?php

namespace App\Controller;

use App\Entity\Cinema;
use App\Entity\Ratingcinema;
use App\Form\CinemaType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/cinema")
 */
class CinemaController extends AbstractController
{
    /**
     * @Route("/", name="app_cinema_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $cinemas = $entityManager
            ->getRepository(Cinema::class)
            ->findAll();

        return $this->render('cinema/index.html.twig', [
            'cinemas' => $cinemas,
        ]);
    }
    /**
     * @Route("/afficheCinemaFront", name="cinemas_list_Front")
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    public function afficherfront(EntityManagerInterface $entityManager)
    {
        $cinemas = $entityManager
            ->getRepository(Cinema::class)
            ->findAll();
        return $this->render('cinema/cinemaFront.html.twig', [
            'cinemas' => $cinemas,

        ]);
    }

    /**
     * @Route("/add_rate", name="add_rate",  methods="GET")
     */
    public function addrating(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $ratingcinema=new Ratingcinema();
        $cinemas = $entityManager
            ->getRepository(Cinema::class)
            ->find($request->query->get("cinid"));
        $ratingcinema->setIdCin($cinemas);
$ratingcinema->setRatingc($request->query->get("rating"));
        $entityManager->persist($ratingcinema);
        $entityManager->flush();

        return $this->redirectToRoute("cinemas_list_Front");


    }


    /**
     * @Route("/new", name="app_cinema_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $cinema = new Cinema();
        $form = $this->createForm(CinemaType::class, $cinema);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager=$this->getDoctrine()->getManager();
            $entityManager->persist($cinema);
            $entityManager->flush();

            return $this->redirectToRoute('app_cinema_index');
        }

        return $this->render('cinema/new.html.twig', [
            'cinema' => $cinema,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idCin}", name="app_cinema_show", methods={"GET"})
     */
    public function show(Cinema $cinema): Response
    {
        return $this->render('cinema/show.html.twig', [
            'cinema' => $cinema,
        ]);
    }

    /**
     * @Route("/{idCin}/edit", name="app_cinema_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Cinema $cinema, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CinemaType::class, $cinema);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_cinema_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cinema/edit.html.twig', [
            'cinema' => $cinema,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idCin}", name="app_cinema_delete", methods={"POST"})
     */
    public function delete(Request $request, Cinema $cinema, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cinema->getIdCin(), $request->request->get('_token'))) {
            $entityManager->remove($cinema);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_cinema_index', [], Response::HTTP_SEE_OTHER);
    }



}
