<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Form\ContactType;
class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     * @param Request $request
     * @param \Swift_Mailer $mailer
     * @return Response
     */
    public function index(Request $request,\Swift_Mailer $mailer): Response
    {
        $form =$this->createForm(ContactType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $contact=$form->getData();
            //ici nous enverrons le mail
            $message=(new \Swift_Message('Nouveau Feedback'))
                //on Attribue l'expediteur
            ->setFrom($contact['email'])
                //on attribue le destinataire
            ->setTo('hedi.abdelli@esprit.tn')
                //on crée le message avec la vue twig
            ->setBody($this->renderView('emails/contact.html.twig',compact('contact')
                ),
                    'text/html'
                );
            //on envoie le message
            $mailer->send($message);

            return $this->redirectToRoute('contact');
        }

        return $this->render('contact/index.html.twig', [
            'contactForm' => $form->createView()
        ]);
    }
}
