<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Utenti
 *
 * @ORM\Table(name="cs_utenti")
 * @ORM\Entity
 */
class Utenti extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    

    /**
     * @ORM\Column(name="nome", type="string", length=255, nullable=true)
     */
    protected $nome;
    
    /**
     * @ORM\Column(name="cognome", type="string", length=255, nullable=true)
     */
    protected $cognome;

    /**
     * @ORM\OneToMany(targetEntity="Contatti", mappedBy="operatoreContatto")
     */
    protected $contattiPerOgniOperatore;

    public function __construct()
    {
        //parent::__construct();
         $this->contattiPerOgniOperatore = new ArrayCollection();
    }


    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Utenti
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cognome
     *
     * @param string $cognome
     *
     * @return Utenti
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    
}
