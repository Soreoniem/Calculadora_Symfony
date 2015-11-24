<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * User
 *
 * @ORM\Table(name="User")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\UserRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class User
{
/*
========== VARIABLES ==========
*/
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="User", type="string", length=255)
     */
    private $User;

    /**
     * @var string
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="contraseña", type="string", length=255)
     */
    private $contraseña;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creado_at", type="datetime")
     */
    private $creadoAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actualizado_at", type="datetime")
     */
    private $actualizadoAt;

/*
========== CONSTRUCTOR ==========
*/
    public function __construct()
    {
        $this->creadoAt = new \DateTime();
        $this->actualizadoAt = new \DateTime();

    }

/*
========== COGER y PONER ==========
*/
// ___Coger___
    /** @return integer */
    public function getId()
    { return $this->id; }

/*  /** @return string */
    public function getUser()
    { return $this->User; }

    /** @return string */
    public function getEmail()
    { return $this->email; }

    /** @return string */
    public function getContraseña()
    { return $this->contraseña; }

    /** @return \DateTime */
    public function getCreadoAt()
    { return $this->creadoAt; }

    /** @return \DateTime */
    public function getActualizadoAt()
    { return $this->actualizadoAt; }

// ___Poner___
    /**
     * @param string $User
     * @return User
     */
    public function setUser($User)
    {
        $this->User = $User;

        // Para encadenar cadenas $user
        //                          ->setUser()
        //                          ->setPassword();
        return $this;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param string $contraseña
     * @return $this
     */
    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;

        return $this;
    }

    /**
     * @ORM\PreUpdate()
     * @return User
     */
    public function setActualizadoAt()
    {
        $this->actualizadoAt = new \DateTime();

        return $this;
    }
/*
 * (no se necesita poner la fecha de creación)
    comentado: @return User ???
    comentado: @param \DateTime $creadoAt
    public function poner_creadoAt($creadoAt)
    {
        $this->creadoAt = $creadoAt;

        // ¿Por qué un return? (¿devuelve un User al poner la fecha?)
        //return $this;
    }
*/
}

