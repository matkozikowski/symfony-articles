<?php

namespace My\FrontendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Default controller.
 *
 * @Route("/")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="main_page")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
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
        
        return array(
        	'entities_news' => $entitiesNews, 
        	'entities_important' => $entitiesImportant
        );
    }

    /**
     * Finds and displays a Articles entity.
     *
     * @Route("/more/{id}", name="more_show")
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

        return array(
            'single' => $entity,
        );
    }


}
