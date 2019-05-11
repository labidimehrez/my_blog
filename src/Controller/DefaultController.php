<?php

/**
 * @author Mehrez Labidi
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {


        return $this->render('templates/index.html.twig', [
                    'controller_name' => 'DefaultController',
        ]);
    }

}
