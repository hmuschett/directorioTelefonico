<?php

namespace diretorioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use diretorioBundle\Entity\Extencion;
use diretorioBundle\Form\ExtencionType;

/**
 * Extencion controller.
 *
 * @Route("/extencion")
 */
class ExtencionController extends Controller
{
    /**
     * Lists all Extencion entities.
     *
     * @Route("/", name="extencion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $extencions = $em->getRepository('diretorioBundle:Extencion')->findAll();

        return $this->render('diretorioBundle:Extencion:index.html.twig', array(
            'extencions' => $extencions,
        ));
    }

    /**
     * Creates a new Extencion entity.
     *
     * @Route("/new", name="extencion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $extencion = new Extencion();
        $form = $this->createForm('diretorioBundle\Form\ExtencionType', $extencion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($extencion);
            $em->flush();

            return $this->redirectToRoute('extencion_show', array('id' => $extencion->getId()));
        }

        return $this->render('diretorioBundle:Extencion:new.html.twig', array(
            'extencion' => $extencion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Extencion entity.
     *
     * @Route("/{id}", name="extencion_show")
     * @Method("GET")
     */
    public function showAction(Extencion $extencion)
    {
        $deleteForm = $this->createDeleteForm($extencion);

        return $this->render('diretorioBundle:Extencion:show.html.twig', array(
            'extencion' => $extencion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Extencion entity.
     *
     * @Route("/{id}/edit", name="extencion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Extencion $extencion)
    {
        $deleteForm = $this->createDeleteForm($extencion);
        $editForm = $this->createForm('diretorioBundle\Form\ExtencionType', $extencion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($extencion);
            $em->flush();

            return $this->redirectToRoute('extencion_edit', array('id' => $extencion->getId()));
        }

        return $this->render('diretorioBundle:edit.html.twig', array(
            'extencion' => $extencion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Extencion entity.
     *
     * @Route("/{id}", name="extencion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Extencion $extencion)
    {
        $form = $this->createDeleteForm($extencion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($extencion);
            $em->flush();
        }

        return $this->redirectToRoute('extencion_index');
    }

    /**
     * Creates a form to delete a Extencion entity.
     *
     * @param Extencion $extencion The Extencion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Extencion $extencion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('extencion_delete', array('id' => $extencion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
