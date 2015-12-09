<?php

namespace etu\doctrineBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use DoctrineCommonCollectionsArrayCollection;

/**
 * region
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="etu\doctrineBundle\Entity\regionRepository")
 */
class region
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
     * @var ArrayCollection $departements
     *
     * @ORM\OneToMany(targetEntity="etu\doctrineBundle\Entity\Departement", mappedBy="region", cascade={"persist", "remove", "merge"})
     */
    private $departements;


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
     * @return region
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
     * Constructor
     */
    public function __construct()
    {
        $this->departements = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add departement
     *
     * @param \etu\doctrineBundle\Entity\Departement $departement
     *
     * @return region
     */
    public function addDepartement(\etu\doctrineBundle\Entity\Departement $departement)
    {
        $this->departements[] = $departement;

        return $this;
    }

    /**
     * Remove departement
     *
     * @param \etu\doctrineBundle\Entity\Departement $departement
     */
    public function removeDepartement(\etu\doctrineBundle\Entity\Departement $departement)
    {
        $this->departements->removeElement($departement);
    }

    /**
     * Get departements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepartements()
    {
        return $this->departements;
    }
}
