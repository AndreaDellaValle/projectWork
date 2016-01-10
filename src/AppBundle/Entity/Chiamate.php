<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chiamate
 *
 * @ORM\Table(name="cs_chiamate")
 * @ORM\Entity
 */
class Chiamate
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
     * @var \DateTime
     *
     * @ORM\Column(name="orario_inizio", type="datetime")
     */
    private $orarioInizio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="orario_fine", type="datetime")
     */
    private $orarioFine;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Contatti", inversedBy="chiamateContatto")
     * @ORM\JoinColumn(name="contatto", referencedColumnName="id")
     */
    private $contatto;

    /**
     * @var string
     *
     * @ORM\Column(name="campagna", type="string", length=255)
     */
    private $campagna;

    /**
     * @var string
     *
     * @ORM\Column(name="feedback", type="string", length=255)
     */
    private $feedback;

        /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;


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
     * Set orarioInizio
     *
     * @param \DateTime $orarioInizio
     *
     * @return Chiamate
     */
    public function setOrarioInizio($orarioInizio)
    {
        $this->orarioInizio = $orarioInizio;

        return $this;
    }

    /**
     * Get orarioInizio
     *
     * @return \DateTime
     */
    public function getOrarioInizio()
    {
        return $this->orarioInizio;
    }

    /**
     * Set orarioFine
     *
     * @param \DateTime $orarioFine
     *
     * @return Chiamate
     */
    public function setOrarioFine($orarioFine)
    {
        $this->orarioFine = $orarioFine;

        return $this;
    }

    /**
     * Get orarioFine
     *
     * @return \DateTime
     */
    public function getOrarioFine()
    {
        return $this->orarioFine;
    }

    /**
     * Set contatto
     *
     * @param string $contatto
     *
     * @return Chiamate
     */
    public function setContatto($contatto)
    {
        $this->contatto = $contatto;

        return $this;
    }

    /**
     * Get contatto
     *
     * @return string
     */
    public function getContatto()
    {
        return $this->contatto;
    }

    /**
     * Set campagna
     *
     * @param string $campagna
     *
     * @return Chiamate
     */
    public function setCampagna($campagna)
    {
        $this->campagna = $campagna;

        return $this;
    }

    /**
     * Get campagna
     *
     * @return string
     */
    public function getCampagna()
    {
        return $this->campagna;
    }

    /**
     * Set feedback
     *
     * @param string $campagna
     *
     * @return Chiamate
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * Get feedback
     *
     * @return string
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Chiamate
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}

