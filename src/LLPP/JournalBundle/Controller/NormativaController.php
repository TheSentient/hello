<?php

namespace LLPP\JournalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LLPP\JournalBundle\Entity\Normativa;
use LLPP\JournalBundle\Form\NormativaType;
use Alangemar\CrudHandlerBundle\Controller\CrudHandlerController;

/**
 * Normativa controller.
 *
 */
class NormativaController extends Controller
{

    /**
     * Lists all Normativa entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LLPPJournalBundle:Normativa')->findAll();

        return $this->render('LLPPJournalBundle:Normativa:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Normativa entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Normativa();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('normativa_show', array('id' => $entity->getId())));
        }

        return $this->render('LLPPJournalBundle:Normativa:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Normativa entity.
     *
     * @param Normativa $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Normativa $entity)
    {
        $form = $this->createForm(new NormativaType(), $entity, array(
            'action' => $this->generateUrl('normativa_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Normativa entity.
     *
     */
    public function newAction()
    {
        $entity = new Normativa();
        $form   = $this->createCreateForm($entity);

        return $this->render('LLPPJournalBundle:Normativa:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Normativa entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LLPPJournalBundle:Normativa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Normativa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LLPPJournalBundle:Normativa:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Normativa entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LLPPJournalBundle:Normativa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Normativa entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LLPPJournalBundle:Normativa:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Normativa entity.
    *
    * @param Normativa $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Normativa $entity)
    {
        $form = $this->createForm(new NormativaType(), $entity, array(
            'action' => $this->generateUrl('normativa_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Normativa entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LLPPJournalBundle:Normativa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Normativa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('normativa_edit', array('id' => $id)));
        }

        return $this->render('LLPPJournalBundle:Normativa:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Normativa entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LLPPJournalBundle:Normativa')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Normativa entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('normativa'));
    }

    /**
     * Creates a form to delete a Normativa entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('normativa_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
