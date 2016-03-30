<?php

namespace CaroGFaimBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CaroGFaimBundle\Entity\type_plat;
use CaroGFaimBundle\Form\type_platType;

/**
 * type_plat controller.
 *
 */
class type_platController extends Controller
{
    /**
     * Lists all type_plat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $type_plats = $em->getRepository('CaroGFaimBundle:type_plat')->findAll();

        return $this->render('CaroGFaimBundle:type_plat:index.html.twig', array(
            'type_plats' => $type_plats,
        ));
    }

    /**
     * Creates a new type_plat entity.
     *
     */
    public function newAction(Request $request)
    {
        $type_plat = new type_plat();
        $form = $this->createForm('CaroGFaimBundle\Form\type_platType', $type_plat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($type_plat);
            $em->flush();

            return $this->redirectToRoute('type_plat_show', array('id' => $type_plat->getId()));
        }

        return $this->render('CaroGFaimBundle:type_plat:new.html.twig', array(
            'type_plat' => $type_plat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a type_plat entity.
     *
     */
    public function showAction(type_plat $type_plat)
    {
        $deleteForm = $this->createDeleteForm($type_plat);

        return $this->render('CaroGFaimBundle:type_plat:show.html.twig', array(
            'type_plat' => $type_plat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing type_plat entity.
     *
     */
    public function editAction(Request $request, type_plat $type_plat)
    {
        $deleteForm = $this->createDeleteForm($type_plat);
        $editForm = $this->createForm('CaroGFaimBundle\Form\type_platType', $type_plat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($type_plat);
            $em->flush();

            return $this->redirectToRoute('type_plat_edit', array('id' => $type_plat->getId()));
        }

        return $this->render('CaroGFaimBundle:type_plat:edit.html.twig', array(
            'type_plat' => $type_plat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a type_plat entity.
     *
     */
    public function deleteAction(Request $request, type_plat $type_plat)
    {
        $form = $this->createDeleteForm($type_plat);
        $form->handleRequest($request);

        //if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($type_plat);
            $em->flush();
        }

        return $this->redirectToRoute('type_plat_index');
    }

    /**
     * Creates a form to delete a type_plat entity.
     *
     * @param type_plat $type_plat The type_plat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(type_plat $type_plat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('type_plat_delete', array('id' => $type_plat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
