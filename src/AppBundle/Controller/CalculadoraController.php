<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

// añadidos
use AppBundle\Services\CalculadoraService;

/**
 * Class CalculadoraController
 * @package AppBundle\Controller
 */
class CalculadoraController extends Controller
{
    /**
     * @Route(
     *       path = "/calculadora",
     *       name = "app_default_calculadora"
     * )
     */
    public function calculadoraAction()
    {
        // CREAR VISTA
        return $this->render('AppBundle::calculadora.html.twig');
    }

    /**
     * @Route(
     *      path = "calculadora/operaciones",
     *      name = "app_default_calculadoraOperaciones"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function operacionesAction(Request $request)
    { // ¿Qué botón ha usado?
        $sumar          = $request->request->get('sumar');
        $restar         = $request->request->get('restar');
        $multiplicar    = $request->request->get('multiplicar');
        $dividir        = $request->request->get('dividir');

        // click en sumar
        if($sumar == true)
        {
            return $this->render( 'AppBundle::operaciones.html.twig',[
                'titulo'    => 'Sumar',
                'operador'  => 'sumar',
                'simbolo'   => '+' ]);
        }
        // click en restar
        elseif($restar == true)
        {
            return $this->render( 'AppBundle::operaciones.html.twig',[
                'titulo'    => 'Restar',
                'operador'  => 'restar',
                'simbolo'   => '-' ]);
        }
        // click en multiplicar
        elseif($multiplicar == true)
        {
            return $this->render( 'AppBundle::operaciones.html.twig',[
                'titulo'    => 'Multiplicar',
                'operador'  => 'multiplicar',
                'simbolo'   => '*' ]);
        }
        // click en dividir
        elseif($dividir == true)
        {
            return $this->render( 'AppBundle::operaciones.html.twig',[
                'titulo'    => 'Dividir',
                'operador'  => 'dividir',



                'simbolo'   => '/' ]);
        }
        // sin click
        else
        {
            return $this->render( 'AppBundle::problema.html.twig',[
                'lugarProblema'     => 'Operaciones',
                'mensajeProblema'   => 'No se ha pulsado ningún operador de la calculadora',
                'lugarSolucion'     => 'Calculadora',
                'mensajeSolucion'   => 'Reinicia la calculadora',
                'solucionURL'       => 'http://127.0.0.1:8000/calculadora' ]);
        }
    }

    /**
     * @Route(
     *      path = "calculadora/resultado",
     *      name = "app_default_resultado"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function resultadoAction(Request $request)
    {
        // operador (sumar, restar, multiplicar, dividir)
        $operador = $request->request->get('operador');
        $simbolo = $request->request->get('simbolo');

        $num1 = $request->request->get('num1');
        $num2 = $request->request->get('num2');

        // llamada a la calculadora
        $calculadora = $this->get('calculadora');

        // introducir numeros a la calculadora
        $calculadora->poner_op1($num1);
        $calculadora->poner_op2($num2);



        // acción
        if($operador == 'sumar')
        { $calculadora->sumar(); }
        elseif($operador == "restar")
        { $calculadora->restar(); }
        elseif($operador == "multiplicar")
        { $calculadora->multiplicar(); }
        elseif($operador == "dividir")
        {
            if($num2 == 0)
            {
                return $this->render( 'AppBundle::problema.html.twig',[
                    'lugarProblema'     => '2º numero',
                    'mensajeProblema'   => 'No se puede dividir entre 0',
                    'lugarSolucion'     => 'Atrás',
                    'mensajeSolucion'   => 'Cambia el numero 2, ves hacia atrás',
                    'solucionURL'       => 'javascript:history.go(-1);' ]);
            }
            else
            { $calculadora->dividir(); }
        }
        else
        {
            return $this->render( 'AppBundle::problema.html.twig', [
                'lugarProblema'     => 'al operar',
                'mensajeProblema'   => 'no se detecta el operador',
                'lugarSolucion'     => 'Calculadora',
                'mensajeSolucion'   => 'Reinicia la calculadora',
                'solucionURL'   => 'http://127.0.0.1:8000/calculadora' ]);
        }

        $resultado = $calculadora->coger_resultado();

        return $this->render( 'AppBundle::resultado.html.twig', [
            'operador'  => $operador,
            'num1'      => $num1,
            'simbolo'   => $simbolo,
            'num2'      => $num2,
            'resultado' => $resultado,
            'URL'       => 'http://127.0.0.1:8000/calculadora',
            'nombreURL' => 'Calculadora' ]);
    }
}
