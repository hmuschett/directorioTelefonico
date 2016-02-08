<?php

namespace diretorioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use diretorioBundle\Entity\Telefono;
use diretorioBundle\Form\TelefonoType;

/**
 * Telefono controller.
 *
 * @Route("/telefono")
 */
class TelefonoController extends Controller
{
    /**
     * Lists all Telefono entities.
     *
     * @Route("/", name="telefono_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $telefonos = $em->getRepository('diretorioBundle:Telefono')->findAll();

        return $this->render('diretorioBundle:Telefono:index.html.twig', array(
            'telefonos' => $telefonos,
        ));
    }

    /**
     * Creates a new Telefono entity.
     *
     * @Route("/new", name="telefono_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $telefono = new Telefono();
        $form = $this->createForm('diretorioBundle\Form\TelefonoType', $telefono);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($telefono);
            $em->flush();

            return $this->redirectToRoute('telefono_show', array('id' => $telefono->getId()));
        }

        return $this->render('diretorioBundle:Telefono:new.html.twig', array(
            'telefono' => $telefono,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Telefono entity.
     *
     * @Route("/{id}", name="telefono_show")
     * @Method("GET")
     */
    public function showAction(Telefono $telefono)
    {
        $deleteForm = $this->createDeleteForm($telefono);

        return $this->render('diretorioBundle:Telefono:show.html.twig', array(
            'telefono' => $telefono,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Telefono entity.
     *
     * @Route("/{id}/edit", name="telefono_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Telefono $telefono)
    {
        $deleteForm = $this->createDeleteForm($telefono);
        $editForm = $this->createForm('diretorioBundle\Form\TelefonoType', $telefono);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($telefono);
            $em->flush();

            return $this->redirectToRoute('telefono_edit', array('id' => $telefono->getId()));
        }

        return $this->render('diretorioBundle:Telefono:edit.html.twig', array(
            'telefono' => $telefono,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Telefono entity.
     *
     * @Route("/{id}", name="telefono_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Telefono $telefono)
    {
        $form = $this->createDeleteForm($telefono);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($telefono);
            $em->flush();
        }

        return $this->redirectToRoute('telefono_index');
    }

    /**
     * Creates a form to delete a Telefono entity.
     *
     * @param Telefono $telefono The Telefono entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Telefono $telefono)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('telefono_delete', array('id' => $telefono->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
