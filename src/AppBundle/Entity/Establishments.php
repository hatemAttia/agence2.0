<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Establishments
 *
 * @ORM\Table(name="establishments")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EstablishmentsRepository")
 */
class Establishments
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="integer", unique=true)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=25)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255)
     */
    private $adress;

    /**
     * @var int
     *
     * @ORM\Column(name="sizeinCubicMeters", type="integer")
     */
    private $sizeinCubicMeters;

    /**
     * @var int
     *
     * @ORM\Column(name="pieces", type="integer")
     */
    private $pieces;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set reference
     *
     * @param integer $reference
     *
     * @return Establishments
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return int
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Establishments
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Establishments
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set sizeinCubicMeters
     *
     * @param integer $sizeinCubicMeters
     *
     * @return Establishments
     */
    public function setSizeinCubicMeters($sizeinCubicMeters)
    {
        $this->sizeinCubicMeters = $sizeinCubicMeters;

        return $this;
    }

    /**
     * Get sizeinCubicMeters
     *
     * @return int
     */
    public function getSizeinCubicMeters()
    {
        return $this->sizeinCubicMeters;
    }

    /**
     * Set pieces
     *
     * @param integer $pieces
     *
     * @return Establishments
     */
    public function setPieces($pieces)
    {
        $this->pieces = $pieces;

        return $this;
    }

    /**
     * Get pieces
     *
     * @return int
     */
    public function getPieces()
    {
        return $this->pieces;
    }
}
