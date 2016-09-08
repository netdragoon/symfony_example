<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Credit;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class TodoController extends Controller
{
    /**
     * @Route("/todo", name="todoIndex" )
     *
     */
    public function indexAction(Request $request)
    {

        $repository = $this->getDoctrine()->getRepository('AppBundle:Credit');
        $list = $repository->findAll();
        $data = array();
        $data['list'] = $list;

        $credit = new Credit();
        $form = $this->createFormBuilder($credit)
            ->add('id', HiddenType::class)
            ->add('description', TextType::class)
            ->add('Salvar', SubmitType::class, array('label' => 'Adicionar'))
            ->setMethod('post')
            ->setAction("/todo/store")
            ->getForm();
        $data['form'] = $form->createView();

        return $this->render('todo/index.html.twig', $data);
    }

    /**
     * @Route("todo/store", name="todoStore")
     * @param Request $request
     * @return array
     */
    public function storeAction(Request $request)
    {

        $data = $request->request->all();
        $credit = new Credit();
        $credit->setDescription($data['form']['description']);
        $em = $this->getDoctrine()->getManager();
        $em->persist($credit);
        $em->flush();

        return $this->redirectToRoute('todoIndex');
    }
}