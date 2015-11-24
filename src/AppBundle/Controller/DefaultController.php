<?php

namespace AppBundle\Controller;

use AppBundle\Services\CalculatorService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /*public function usuarioIndexAction()
    {
        $m = $this->getDoctrine();
        $user1 = new User();
        $user1->setEmail('j_l_juan@gmail.com');
        $user1->setPassword('123456');
        $user1->setUsername('Juan Lu');
        $m->persist($user1); //doctrine sabrá que hay que guardar en la base de datos (no guarda)

        $user2 = new User();
        $user2->setEmail('j_l_juanlux@gmail.com');
        $user2->setPassword('123456789');
        $user2->setUsername('Juan Lux');
        $m->persist($user2); //doctrine sabrá que hay que guardar en la base de datos (no guarda)

        $m->flush();
        die;
        return $this->render('default/index.html.twig');
    }*/

    /*/**
     * updateAction
     *
     * @Route(
     *      path="/update/{id}",
     *      name="app_user_update"
     * )
     * @param $id
     */
    /*public function updateAction($id)
    {
        $m = $this->getDoctrine()->getManager();
        $repository = $m->getRepository('AppBundle:User');

        $user = $repository->find($id);

        return $this->render(':user:update.html.twig',
            [
                'user' => $user,
            ]);
    }*/

    /*/**
     * @Route(
     *      path="/do-update",
     *      name="app_user_doUpdate"
     * )
     * @param Request $request
     * @return \Symfony\Component
     */
    /*public function doUpdateAction(Request $request)
    {
        $m = $this->getDoctrine()->getRepository();
        $repository = $m->getRepository('AppBundle:User');

        $id         = $request->request->get('id');
        $email      = $request->request->get('email');
        $password   = $request->request->get('password');
        $username   = $request->request->get('username');

        $user = $repository->find($id);

        $user->setEmail($email);
        $user->setPassword($password);
        $user->setUsername($username);

        $m->flush();

        //redirect
        $this->redirectToRoute('app_user_index');

    }*/

    /*/**
     * @Route("/2", name="homepage")
     * @param Request $request
     * @return Response
     */
/*  public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index2.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }*/
/*  /** @Route("/", name="app_default_text") */
/*  public function testAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'name' => 'Juan',
            'surname' => 'Garcia',
        ));
    }*/
    /*/** @Route("/prueba") */
/*  public function pruebaAction()
    {
        return $this->render('default/prueba.html.twig', array(
            'name' => 'Juan',
        ));
    }*/

/*  /**
     * @Route(
            path = "/calculator/dosum",
            name = "app_default_doSum"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
/*  public function doSumAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');

        $c = $this->get('calculator');*/
/*      /**if( $c->has('calculator')) {}*/

/*      $c->poner_op1($op1);
        $c->poner_op1($op2);

        $c->sumar();

        $result = $c->coger_resultado();

        return $this->render(
            ':default:dosum.html.twig',
            array(
                'result' => $result,
            ));
    }*/

/*  /**
     * @Route(
    path = "/calculator/dosubstract",
    name = "app_default_doSubstract"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
/*  public function doSubstractAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');

        $c = $this->get('calculator');*/
/*      /**if( $c->has('calculator')) {}*/

/*      $c->poner_op1($op1);
        $c->poner_op1($op2);

        $c->restar();

        $result = $c->coger_resultado();

        return $this->render(
            ':default:dosubstract.html.twig',
            array(
                'result' => $result,
            ));*/
/*      /**
         * return new Response($request->gett('_route'));
         * return new Response($request->getPathInfo());
         * //redirigir
         * return $this->redirect('http://www.wikipedia.es');
         * //redirigir a nuestra pagina
         * return $this->redirectToRoute('app_default_sum');
         *
         * $this->get('route')->match('/hello');die
         * return $this
        */

/*  }*/

}
