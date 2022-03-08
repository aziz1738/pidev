<?php

namespace App\Controller;

use App\Entity\Abonnement;
use App\Form\AbonnementType;
use App\Repository\AbonnementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\AbonnementSearch;
use App\Form\AbonnementSearchType;
use Dompdf\Dompdf;
use Dompdf\Options;
use MercurySeries\FlashyBundle\FlashyNotifier;
/**
 * @Route("/abonnement")
 */
class AbonnementController extends AbstractController
{
    /**
     * @Route("/", name="abonnement_index", methods={"GET"})
     */
    public function index(AbonnementRepository $abonnementRepository): Response
    {
        return $this->render('abonnement/index.html.twig', [
            'abonnements' => $abonnementRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="abonnement_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $abonnement = new Abonnement();
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($abonnement);
            $entityManager->flush();


            return $this->redirectToRoute('abonnement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('abonnement/new.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="abonnement_show", methods={"GET"})
     */
    public function show(Abonnement $abonnement): Response
    {
        return $this->render('abonnement/show.html.twig', [
            'abonnement' => $abonnement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="abonnement_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Abonnement $abonnement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();


            return $this->redirectToRoute('abonnement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('abonnement/edit.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="abonnement_delete", methods={"POST"})
     */
    public function delete(Request $request, Abonnement $abonnement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $abonnement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($abonnement);
            $entityManager->flush();


        }

        return $this->redirectToRoute('abonnement_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/recherche/abo", name="abonnement_search")
     */
    public function recherche(Request $request, AbonnementRepository $abonnementRepository)
    {
        $data = $request->get('data');
        $abonnement = $abonnementRepository->reche($data);
        return $this->render('abonnement/index.html.twig', [
            'abonnements' => $abonnement,


        ]);


    }

    /**
     * @Route("/tri/abon", name="abonnement_tri")
     */
    public function Tri(Request $request, AbonnementRepository $repository): Response
    {
        // Retrieve the entity manager of Doctrine
        $order = $request->get('type');
        if ($order == "Croissant") {
            $abonnements = $repository->tri_asc();
        } else {
            $abonnements = $repository->tri_desc();
        }
        // Render the twig view
        return $this->render('abonnement/index.html.twig', [
            'abonnements' => $abonnements
        ]);

    }

    /**
     * @Route("/list/pdf", name="abonnement_pdf_back", methods={"GET"})
     */
    public function pdf(AbonnementRepository $abonnementRepository): Response
    {


        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $abonnement = $abonnementRepository->findAll();


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('abonnement/Listepdfpub.html.twig', [
            'abonnements' => $abonnement,
        ]);
// Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("Listepdfpub.pdf", [
            "Attachment" => true
        ]);


    }

    

}
