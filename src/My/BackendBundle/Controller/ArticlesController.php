<?php

namespace My\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use My\BackendBundle\Entity\Articles;
use My\BackendBundle\Form\ArticlesType;

/**
 * Articles controller.
 *
 * @Route("/")
 */
class ArticlesController extends Controller
{

    /**
     * Lists all Articles entities.
     *
     * @Route("/", name="articles")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * Lists all Articles entities.
     *
     * @Route("/ajax", name="ajax_articles")
     * @Method("POST")
     * @Template()
     */
    public function ajaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $data = json_decode($request->getContent());



        foreach ($data as $catId => $catVal) {
            $category = $em->getRepository('MyBackendBundle:Categories')->find($catId);

            foreach (json_decode($catVal) as $art) {
                $article = $em->getRepository('MyBackendBundle:Articles')->find($art->id);
                $article->setSortValue($art->sort);
                $article->setCategories($category);
                $em->flush();
            }
        }

        $articles = $this->getArticlesList();

        $template = $this->renderView('MyBackendBundle:Articles:ajax.html.twig', array(
            'entities_news' => $articles->entities_news,
            'entities_important' => $articles->entities_important,
        ));

        $json = array('status' => true, 'html' => $template );
        echo json_encode($json);
        die();

    }

    /**
     * Lists Articles from category Importants, News by ajax request
     *
     * 
     * @Method("GET")
     * @Template("MyBackendBundle:Articles:ajax.html.twig")
     */
    public function ajaxViewAction()
    {
        $articles = $this->getArticlesList();

        return array(
            'entities_news' => $articles->entities_news,
            'entities_important' => $articles->entities_important,
        );
    }

    /**
     * Lists Articles from category Importants, News
     *
     * @return array
     */
    private function getArticlesList()
    {
        $em = $this->getDoctrine()->getManager();

        $entitiesNews = $em->getRepository('MyBackendBundle:Articles')->findBy( 
            array(
                'deleted' => 0, 
                'categories' => 1,
                ),
            array(
                'sortValue' => 'ASC',
                )
            );
        $entitiesImportant = $em->getRepository('MyBackendBundle:Articles')->findBy( 
            array(
                'deleted' => 0, 
                'categories' => 2,
                ),
            array(
                'sortValue' => 'ASC',
                )
            );

        return (object) array(
            'entities_news' => $entitiesNews,
            'entities_important' => $entitiesImportant
        );

    }


    /**
     * Creates a new Articles entity.
     *
     * @Route("/", name="articles_create")
     * @Method("POST")
     * @Template("MyBackendBundle:Articles:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Articles();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setDeleted('0');
            $entity->setSortValue('0');
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('articles_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Articles entity.
     *
     * @param Articles $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Articles $entity)
    {
        $form = $this->createForm(new ArticlesType(), $entity, array(
            'action' => $this->generateUrl('articles_create'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Articles entity.
     *
     * @Route("/new", name="articles_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Articles();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Articles entity.
     *
     * @Route("/{id}", name="articles_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyBackendBundle:Articles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Articles entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Articles entity.
     *
     * @Route("/{id}/edit", name="articles_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyBackendBundle:Articles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Articles entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Articles entity.
    *
    * @param Articles $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Articles $entity)
    {
        $form = $this->createForm(new ArticlesType(), $entity, array(
            'action' => $this->generateUrl('articles_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Articles entity.
     *
     * @Route("/{id}", name="articles_update")
     * @Method("PUT")
     * @Template("MyBackendBundle:Articles:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyBackendBundle:Articles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Articles entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entity->setDeleted('0');
            $em->flush();

            return $this->redirect($this->generateUrl('articles_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Articles entity.
     *
     * @Route("/{id}", name="articles_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MyBackendBundle:Articles')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Articles entity.');
            }

            $entity->setDeleted('1');
            $em->flush();
        }

        return $this->redirect($this->generateUrl('articles'));
    }

    /**
     * Creates a form to delete a Articles entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('articles_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
