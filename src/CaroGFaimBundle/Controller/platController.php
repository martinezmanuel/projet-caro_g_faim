<?php

namespace CaroGFaimBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CaroGFaimBundle\Entity\plat;
use CaroGFaimBundle\Form\platType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;

/**
 * plat controller.
 *
 */
class platController extends Controller
{
    /**
     * Lists all plat entities.
     *
     */
    public function indexAction()
    {
        $deleteForm = $this->createFormBuilder()
            ->setMethod('DELETE')
            ->getForm();

        $em = $this->getDoctrine()->getManager();

        //$plats = $em->getRepository('CaroGFaimBundle:plat')->findAll();
        //$type_plats = $em->getRepository('CaroGFaimBundle:type_plat')->findAll();
        $type_plats = $em->getRepository('CaroGFaimBundle:plat')->findAllPlatsByType();

        return $this->render('CaroGFaimBundle:plat:index.html.twig', array(
           // 'plats' => $plats,
            'type_plats' => $type_plats,
            'delete_form' => $deleteForm->createView()
        ));
    }

    /**
     * Creates a new plat entity.
     *
     */
    public function newAction(Request $request)
    {
        $plat = new plat();
        $form = $this->createForm('CaroGFaimBundle\Form\platType', $plat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($this->updateUploadedFile($form, $plat)) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($plat);
                $em->flush();
            }

            return $this->redirectToRoute('plat_show', array('id' => $plat->getId()));
        }

        return $this->render('CaroGFaimBundle:plat:new.html.twig', array(
            'plat' => $plat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a plat entity.
     *
     */
    public function showAction(plat $plat)
    {
        $deleteForm = $this->createDeleteForm($plat);

        return $this->render('CaroGFaimBundle:plat:show.html.twig', array(
            'plat' => $plat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing plat entity.
     *
     */
    public function editAction(Request $request, plat $plat)
    {
        $deleteForm = $this->createDeleteForm($plat);
        $editForm = $this->createForm('CaroGFaimBundle\Form\platType', $plat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            if ($this->updateUploadedFile($editForm, $plat)) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($plat);
                $em->flush();
            }
            return $this->redirectToRoute('plat_show', array('id' => $plat->getId()));
        }

        return $this->render('CaroGFaimBundle:plat:edit.html.twig', array(
            'plat' => $plat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Displays a form to edit an existing plat entity.
     *
     */
    public function voteAction(Request $request, plat $plat)
    {
        $em = $this->getDoctrine()->getManager();
        $str = $request->getContent();
        $array_vote = explode("=", $str);
        $plat->setNote($array_vote[1]);
        $em->persist($plat);
        $em->flush();
        return new Response("");
    }

    /**
     * Deletes a plat entity.
     *
     */
    public function deleteAction(Request $request, plat $plat)
    {
        $form = $this->createDeleteForm($plat);
        $form->handleRequest($request);

        //if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($plat);
            $em->flush();
        }

        return $this->redirectToRoute('plat_index');
    }

    /**
     * Creates a form to delete a plat entity.
     *
     * @param plat $plat The plat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(plat $plat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('plat_delete', array('id' => $plat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Save on disk the uploaded file
     *
     * @param \Symfony\Component\Form\Form The form
     * @param \CaroGFaimBundle\Entity\plat
     *
     * @return bool true if no error
     */
    private function updateUploadedFile(\Symfony\Component\Form\Form $form, plat $plat)
    {
        // the file property can be empty if the field is not required

        $oldPhoto = $plat->getPhotofilename();
        $file = ($form['photofilename']->getData());

        if (!is_object($file)) {
            $plat->setPhotofilename($oldPhoto);
            return true;
        }


        $extension = $file->guessExtension();
        if (!$extension) {
            // extension cannot be guessed
            $extension = 'bin';
        }
        $newFilename = sha1(uniqid(mt_rand(), true)).'.'.$extension;
        $file->move($plat->getUploadRootDir(), $newFilename);

        $plat->setPhotofilename($newFilename);


        return true;
    }

}
