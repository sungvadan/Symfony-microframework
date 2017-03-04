<?php
/**
 * Created by PhpStorm.
 * User: vtphan
 * Date: 3/4/17
 * Time: 12:43 AM
 */

namespace AppBundle\Controller;



use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MightyMouseController extends ContainerAware
{

    /**
     * @Route("/")
     */
    public function rescueAction()
    {
        dump(true);
        $html = $this->container->get('twig')
            ->render(
                'mighty_mouse/rescue.html.twig',
                array('quote' => 'Here i come to save the day')
            );
        return new Response($html);
    }
}