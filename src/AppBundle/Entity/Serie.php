<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Serie
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="serie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SerieRepository") 
 */
class Serie
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nameSerie;

    /**
    * @ORM\OneToMany(targetEntity="Episode", mappedBy="serie", cascade={"remove"})
    */
    private $episodes;

    /**
     * @var string
     * @ORM\ManyToOne(targetEntity= "Categorie", inversedBy= "series")
     * 
     */
    private $categorie;

    /**
     * @var string
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="seriesProducted")
     * 
     */
    private $realisateur;

    /**
     * @var string
     *
     * @ORM\ManyToMany(targetEntity="Person", inversedBy="seriesPlayed")
     */
    private $acteur;

    /**
     * @var string
     *
     * @ORM\Column(name="origine", type="string", length=255)
     */
    private $origine;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateProduction", type="date")
     */
    private $dateProduction;


    /**
     * @var \string
     *
     * @ORM\Column(name="description", type="string",length=10000)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modification", type="datetime")
     */
    private $modification;


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
     * Set realisateur
     *
     * @param string $realisateur
     *
     * @return Serie
     */
    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }

    /**
     * Get realisateur
     *
     * @return string
     */
    public function getRealisateur()
    {
        return $this->realisateur;
    }

    /**
     * Set acteur
     *
     * @param string $acteur
     *
     * @return Serie
     */
    public function setActeur($acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }

    /**
     * Get acteur
     *
     * @return string
     */
    public function getActeur()
    {
        return $this->acteur;
    }

    /**
     * Set origine
     *
     * @param string $origine
     *
     * @return Serie
     */
    public function setOrigine($origine)
    {
        $this->origine = $origine;

        return $this;
    }

    /**
     * Get origine
     *
     * @return string
     */
    public function getOrigine()
    {
        return $this->origine;
    }

    /**
     * Set dateProduction
     *
     * @param \DateTime $dateProduction
     *
     * @return Serie
     */
    public function setDateProduction($dateProduction)
    {
        $this->dateProduction = $dateProduction;

        return $this;
    }

    /**
     * Get dateProduction
     *
     * @return \DateTime
     */
    public function getDateProduction()
    {
        return $this->dateProduction;
    }

    public function setEpisodes($episodes)
    {
        $this->episodes = $episodes;

        return $this;
    }

    /**
     * Get episodes
     *
     * @return string
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }


    public function setNameSerie($nameSerie)
    {
        $this->nameSerie = $nameSerie;

        return $this;
    }

    /**
     * Get nameSerie
     *
     * @return string
     */
    public function getNameSerie()
    {
        return $this->nameSerie;
    }


    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    public function __toString()
    {
        return $this->nameSerie;

    }
        public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function setModfification($modification)
    {
        $this->modification = $modification;

        return $this;
    }

    /**
     * Get modification
     *
     * @return string
     */
    public function getModification()
    {
        return $this->modification;
    }


    /** 
    * @ORM\PreUpdate 
    */
    public function updateModif()
    {
        $this->modification = new \DateTime("now");
    }
}

