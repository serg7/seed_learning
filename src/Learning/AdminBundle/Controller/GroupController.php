<?php

namespace Learning\AdminBundle\Controller;

use Learning\AdminBundle\Form\Type\GroupType;
use Learning\UserBundle\Entity\Group;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Role\RoleHierarchy;

class GroupController extends Controller
{
    public function indexAction()
    {
        $roles = $this->getAllRoles();
        $group = new Group('', $roles);
        $form = $this->createForm(new GroupType(), $group);
        $request = $this->get('request');

        $em = $em = $this->getDoctrine()->getManager();

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            if ($form->isValid())
            {
                $em->persist($group);
                $em->flush();
                return $this->redirect($this->generateUrl('_admin_groups'));
            }
        }

        $groups = $em->getRepository('LearningUserBundle:Group')->findAll();

        return $this->render('LearningAdminBundle:Group:index.html.twig',
            array('groupForm' => $form->createView(), 'groups' => $groups));
    }

    public function removeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $group = $em->getRepository('LearningUserBundle:Group')->find($id);

        if (!is_null($group))
        {
            $em->remove($group);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('_admin_groups'));
    }


    public function getAllRoles()
    {
        return array('ROLE_USER', 'ROLE_ADMIN', 'ROLE_TUTOR');
    }
}
