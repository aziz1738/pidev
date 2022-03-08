<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Form\OffreType;
use App\Repository\OffreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface; // Nous appelons le bundle KNP Paginator
use App\Entity\OffreSearch;
use App\Form\OffreSearchType;
use MercurySeries\FlashyBundle\FlashyNotifier;
use App\Repository\AbonnementRepository;

/**
 * @Route("/offre")
 */
class OffreController extends AbstractController
{
    /**
     * @Route("/", name="offre_index", methods={"GET"})
     */
    public function index(Request $request ,OffreRepository $offreRepository, PaginatorInterface $paginator): Response
    {
        $donnees = $this->getDoctrine()->getRepository(Offre::class)->findAll();
        $offre = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );
        return $this->render('offre/index.html.twig', [
            'offres' => $offre,        ]);
    }

    /**
     * @Route("/indexf", name="offre_indexf", methods={"GET"})
     */
    public function indexf(Request $request ,OffreRepository $offreRepository, PaginatorInterface $paginator): Response
    {
        $donnees = $this->getDoctrine()->getRepository(Offre::class)->findAll();
        $offre = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );
        return $this->render('offre/indexf.html.twig', [
            'offres' => $offre,        ]);
    }
    /**
     * @Route("/new", name="offre_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $offre = new Offre();
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($offre);
            $entityManager->flush();
          

            return $this->redirectToRoute('offre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('offre/new.html.twig', [
            'offre' => $offre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="offre_show", methods={"GET"})
     */
    public function show(Offre $offre): Response
    {
        return $this->render('offre/show.html.twig', [
            'offre' => $offre,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="offre_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Offre $offre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
          

            return $this->redirectToRoute('offre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('offre/edit.html.twig', [
            'offre' => $offre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="offre_delete", methods={"POST"})
     */
    public function delete(Request $request, Offre $offre, EntityManagerInterface $entityManager,): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offre->getId(), $request->request->get('_token'))) {
            $entityManager->remove($offre);
            $entityManager->flush();
          
        }

        return $this->redirectToRoute('offre_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/offre/ajax_search", name="ajax_search" ,methods={"GET"})
     * @param Request $request
     * @param OffreRepository $offreRepository
     * @return Response
     */
    public function searchAction(Request $request,OffreRepository $offreRepository) : Response
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $offres =$offreRepository->SearchNom($requestString);
        if(!$offres) {
            $result['offres']['error'] = "offre non trouvée ";
        } else {
            $result['offres'] = $this->getRealEntities($offres);
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities($offres){
        foreach ($offres as $offre){
            $realEntities[$offre->getId()] = [$offre->getSolde(),$offre->getDescription()];

        }
        return $realEntities;
    }
    /**
     * @route("/stat",name="sta")
     */
    public function statisti(OffreRepository $repository,AbonnementRepository $AbonnementRepository)
    {

        $opp=$repository->findAll();


        return $this->render("offre/statistique.html.twig",['Reg'=>$opp]);

    }
}
