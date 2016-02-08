<?php

namespace diretorioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use diretorioBundle\Entity\Pizarra;
use diretorioBundle\Form\PizarraType;

/**
 * Pizarra controller.
 *
 * @Route("/pizarra")
 */
class PizarraController extends Controller
{
    /**
     * Lists all Pizarra entities.
     *
     * @Route("/", name="pizarra_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pizarras = $em->getRepository('diretorioBundle:Pizarra')->findAll();

        return $this->render('diretorioBundle:Pizarra:index.html.twig', array(
            'pizarras' => $pizarras,
        ));
    }

    /**
     * Creates a new Pizarra entity.
     *
     * @Route("/new", name="pizarra_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $pizarra = new Pizarra();
        $form = $this->createForm('diretorioBundle\Form\PizarraType', $pizarra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pizarra);
            $em->flush();

            return $this->redirectToRoute('pizarra_show', array('id' => $pizarra->getId()));
        }

        return $this->render('diretorioBundle:Pizarra:new.html.twig', array(
            'pizarra' => $pizarra,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Pizarra entity.
     *
     * @Route("/{id}", name="pizarra_show")
     * @Method("GET")
     */
    public function showAction(Pizarra $pizarra)
    {
        $deleteForm = $this->createDeleteForm($pizarra);

        return $this->render('diretorioBundle:Pizarra:show.html.twig', array(
            'pizarra' => $pizarra,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Pizarra entity.
     *
     * @Route("/{id}/edit", name="pizarra_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Pizarra $pizarra)
    {
        $deleteForm = $this->createDeleteForm($pizarra);
        $editForm = $this->createForm('diretorioBundle\Form\PizarraType', $pizarra);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pizarra);
            $em->flush();

            return $this->redirectToRoute('pizarra_edit', array('id' => $pizarra->getId()));
        }

        return $this->render('diretorioBundle:Pizarra:edit.html.twig', array(
            'pizarra' => $pizarra,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Pizarra entity.
     *
     * @Route("/{id}", name="pizarra_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Pizarra $pizarra)
    {
        $form = $this->createDeleteForm($pizarra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pizarra);
            $em->flush();
        }

        return $this->redirectToRoute('pizarra_index');
    }

    /**
     * Creates a form to delete a Pizarra entity.
     *
     * @param Pizarra $pizarra The Pizarra entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pizarra $pizarra)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pizarra_delete', array('id' => $pizarra->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
