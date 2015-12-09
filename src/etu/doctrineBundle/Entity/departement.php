<?php

namespace etu\doctrineBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * departement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="etu\doctrineBundle\Entity\departementRepository")
 */
class departement
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


    /**
     * @var Region $region
     *
     * @ORM\ManyToOne(targetEntity="etu\doctrineBundle\Entity\Region", inversedBy="departements", cascade={"persist", "merge"})
     */
    private $region;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return departement
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set region
     *
     * @param \etu\doctrineBundle\Entity\Region $region
     *
     * @return departement
     */
    public function setRegion(\etu\doctrineBundle\Entity\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \etu\doctrineBundle\Entity\Region
     */
    public function getRegion()
    {
        return $this->region;
    }
}
