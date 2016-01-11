<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Contatti
 *
 * @ORM\Table(name="contatti")
 * @ORM\Entity
 */
class Contatti
{
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
     *
     * @ORM\Column(name="emailContatto", type="string", length=255, nullable=true)
     */
    private $emailContatto;

    /**
     * @var string
     *
     * @ORM\Column(name="nomeContatto", type="string", length=255, nullable=true)
     */
    private $nomeContatto;

    /**
     * @var string
     *
     * @ORM\Column(name="cognomeContatto", type="string", length=255, nullable=true)
     */
    private $cognomeContatto;

    /**
     * @var string
     *
     * @ORM\Column(name="statusContatto", type="string", length=255, nullable=true)
     */
    private $statusContatto;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Utenti", inversedBy="contattiPerOgniOperatore")
     * @ORM\JoinColumn(name="operatoreContatto", referencedColumnName="id")
     */
    private $operatoreContatto;

    /**
     * @var string
     *
     * @ORM\Column(name="campagnaContatto", type="string", length=255, nullable=true)
     */
    private $campagnaContatto;

    /**
     * @ORM\OneToMany(targetEntity="Chiamate", mappedBy="contatto")
     */
    protected $chiamateContatto;

    public function __construct()
    {
        //parent::__construct();
         $this->chiamateContatto = new ArrayCollection();
    }

    /**
     * @var string
     *
     * @ORM\Column(name="numeroTelefonoContatto", type="string", length=255, nullable=true)
     */
    private $numeroTelefonoContatto;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set emailContatto
     *
     * @param string $emailContatto
     *
     * @return Contatti
     */
    public function setEmailContatto($emailContatto)
    {
        $this->emailContatto = $emailContatto;

        return $this;
    }

    /**
     * Get emailContatto
     *
     * @return string
     */
    public function getEmailContatto()
    {
        return $this->emailContatto;
    }

    /**
     * Set nomeContatto
     *
     * @param string $nomeContatto
     *
     * @return Contatti
     */
    public function setNomeContatto($nomeContatto)
    {
        $this->nomeContatto = $nomeContatto;

        return $this;
    }

    /**
     * Get nomeContatto
     *
     * @return string
     */
    public function getNomeContatto()
    {
        return $this->nomeContatto;
    }

    /**
     * Set cognomeContatto
     *
     * @param string $cognomeContatto
     *
     * @return Contatti
     */
    public function setCognomeContatto($cognomeContatto)
    {
        $this->cognomeContatto = $cognomeContatto;

        return $this;
    }

    /**
     * Get cognomeContatto
     *
     * @return string
     */
    public function getCognomeContatto()
    {
        return $this->cognomeContatto;
    }

    /**
     * Set statusContatto
     *
     * @param string $statusContatto
     *
     * @return Contatti
     */
    public function setStatusContatto($statusContatto)
    {
        $this->statusContatto = $statusContatto;

        return $this;
    }

    /**
     * Get statusContatto
     *
     * @return string
     */
    public function getStatusContatto()
    {
        return $this->statusContatto;
    }

    /**
     * Set operatoreContatto
     *
     * @param string $operatoreContatto
     *
     * @return Contatti
     */
    public function setOperatoreContatto($operatoreContatto)
    {
        $this->operatoreContatto = $operatoreContatto;

        return $this;
    }

    /**
     * Get operatoreContatto
     *
     * @return string
     */
    public function getOperatoreContatto()
    {
        return $this->operatoreContatto;
    }

    /**
     * Set campagnaContatto
     *
     * @param string $campagnaContatto
     *
     * @return Contatti
     */
    public function setCampagnaContatto($campagnaContatto)
    {
        $this->campagnaContatto = $campagnaContatto;

        return $this;
    }

    /**
     * Get campagnaContatto
     *
     * @return string
     */
    public function getCampagnaContatto()
    {
        return $this->campagnaContatto;
    }

    /**
     * Set chiamateContatto
     *
     * @param string $chiamateContatto
     *
     * @return Contatti
     */
    public function setChiamateContatto($chiamateContatto)
    {
        $this->chiamateContatto = $chiamateContatto;

        return $this;
    }

    /**
     * Get chiamateContatto
     *
     * @return string
     */
    public function getChiamateContatto()
    {
        return $this->chiamateContatto;
    }

    /**
     * Set numeroTelefonoContatto
     *
     * @param string $numeroTelefonoContatto
     *
     * @return Contatti
     */
    public function setNumeroTelefonoContatto($numeroTelefonoContatto)
    {
        $this->numeroTelefonoContatto = $numeroTelefonoContatto;

        return $this;
    }

    /**
     * Get numeroTelefonoContatto
     *
     * @return string
     */
    public function getNumeroTelefonoContatto()
    {
        return $this->numeroTelefonoContatto;
    }
}

