<?php

namespace Learning\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('LearningFrontBundle:Index:index.html.twig');
    }
}
