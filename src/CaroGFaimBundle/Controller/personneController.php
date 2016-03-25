<?php

namespace CaroGFaimBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CaroGFaimBundle\Entity\personne;
use CaroGFaimBundle\Form\personneType;

/**
 * personne controller.
 *
 */
class personneController extends Controller
{
    /**
     * Lists all personne entities.
     *
     */
    public function indexAction()
    {
        $deleteForm = $this->createFormBuilder()
            ->setMethod('DELETE')
            ->getForm();

        $em = $this->getDoctrine()->getManager();

        $personnes = $em->getRepository('CaroGFaimBundle:personne')->findAll();

        return $this->render('CaroGFaimBundle:personne:index.html.twig', array(
            'personnes' => $personnes,
            'delete_form' => $deleteForm->createView()
        ));
    }

    /**
     * Creates a new personne entity.
     *
     */
    public function newAction(Request $request)
    {
        $personne = new personne();
        $form = $this->createForm('CaroGFaimBundle\Form\personneType', $personne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($personne);
            $em->flush();

            return $this->redirectToRoute('personne_show', array('id' => $personne->getId()));
        }

        return $this->render('CaroGFaimBundle:personne:new.html.twig', array(
            'personne' => $personne,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a personne entity.
     *
     */
    public function showAction(personne $personne)
    {
        $deleteForm = $this->createDeleteForm($personne);

        return $this->render('CaroGFaimBundle:personne:show.html.twig', array(
            'personne' => $personne,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing personne entity.
     *
     */
    public function editAction(Request $request, personne $personne)
    {
        $deleteForm = $this->createDeleteForm($personne);
        $editForm = $this->createForm('CaroGFaimBundle\Form\personneType', $personne);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($personne);
            $em->flush();

            return $this->redirectToRoute('personne_show', array('id' => $personne->getId()));
        }

        return $this->render('CaroGFaimBundle:personne:edit.html.twig', array(
            'personne' => $personne,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a personne entity.
     *
     */
    public function deleteAction(Request $request, personne $personne)
    {
        $form = $this->createDeleteForm($personne);
        $form->handleRequest($request);

        //if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($personne);
            $em->flush();
        }

        return $this->redirectToRoute('personne_index');
    }

    /**
     * Creates a form to delete a personne entity.
     *
     * @param personne $personne The personne entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(personne $personne)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('personne_delete', array('id' => $personne->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
