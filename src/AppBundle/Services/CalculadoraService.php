<?php
/**
 * Created by PhpStorm.
 * User: juan Lu
 * Date: 22/10/15
 * Time: 20:08
 */

namespace AppBundle\Services;


class CalculadoraService
{
/*
========== VARIABLES ==========
*/
    private $op1;
    private $op2;
    private $resultado;

/*
========== COGER y PONER ==========
*/
// ___Poner___
    /** @return mixed */
    public function coger_op1()
    { return $this->op1; }

    /** @return mixed */
    public function coger_op2()
    { return $this->op2; }

    /** @return mixed */
    public function coger_resultado()
    { return $this->resultado; }

// ___Coger___
    /** @param mixed $op1 */
    public function poner_op1($op1)
    { $this->op1 = $op1; }

    /** @param mixed $op2 */
    public function poner_op2($op2)
    { $this->op2 = $op2; }

    /** @param mixed $result */
    private function poner_resultado($result)
    { $this->resultado = $result; }

/*
========== FUNCIONES ==========
*/
    public function sumar()       //suma
    { $this->poner_resultado($this->coger_op1() + $this->coger_op2()); }

    public function restar() //resta
    { $this->poner_resultado($this->coger_op1() - $this->coger_op2()); }

    public function multiplicar()  //multiplica
    { $this->poner_resultado($this->coger_op1() * $this->coger_op2()); }

    public function dividir()  //divide
    { $this->poner_resultado((int) ($this->coger_op1() / $this->coger_op2())); }
}