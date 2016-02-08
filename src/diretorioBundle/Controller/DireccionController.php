<?php

namespace diretorioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use diretorioBundle\Entity\Direccion;
use diretorioBundle\Form\DireccionType;

/**
 * Direccion controller.
 *
 * @Route("/direccion")
 */
class DireccionController extends Controller
{
    /**
     * Lists all Direccion entities.
     *
     * @Route("/", name="direccion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $direccions = $em->getRepository('diretorioBundle:Direccion')->findAll();

        return $this->render('diretorioBundle:Direccion:index.html.twig', array(
            'direccions' => $direccions,
        ));
    }

    /**
     * Creates a new Direccion entity.
     *
     * @Route("/new", name="direccion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $direccion = new Direccion();
        $form = $this->createForm('diretorioBundle\Form\DireccionType', $direccion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($direccion);
            $em->flush();

            return $this->redirectToRoute('direccion_show', array('id' => $direccion->getId()));
        }

        return $this->render('diretorioBundle:Direccion:new.html.twig', array(
            'direccion' => $direccion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Direccion entity.
     *
     * @Route("/{id}", name="direccion_show")
     * @Method("GET")
     */
    public function showAction(Direccion $direccion)
    {
        $deleteForm = $this->createDeleteForm($direccion);

        return $this->render('diretorioBundle:Direccion:show.html.twig', array(
            'direccion' => $direccion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Direccion entity.
     *
     * @Route("/{id}/edit", name="direccion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Direccion $direccion)
    {
        $deleteForm = $this->createDeleteForm($direccion);
        $editForm = $this->createForm('diretorioBundle\Form\DireccionType', $direccion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($direccion);
            $em->flush();

            return $this->redirectToRoute('direccion_edit', array('id' => $direccion->getId()));
        }

        return $this->render('diretorioBundle:Direccion:edit.html.twig', array(
            'direccion' => $direccion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Direccion entity.
     *
     * @Route("/{id}", name="direccion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Direccion $direccion)
    {
        $form = $this->createDeleteForm($direccion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($direccion);
            $em->flush();
        }

        return $this->redirectToRoute('direccion_index');
    }

    /**
     * Creates a form to delete a Direccion entity.
     *
     * @param Direccion $direccion The Direccion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Direccion $direccion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('direccion_delete', array('id' => $direccion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
