<?php

namespace Learning\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('LearningAdminBundle:Index:index.html.twig');
    }
}
