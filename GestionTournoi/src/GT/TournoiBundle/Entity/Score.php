<?php

namespace GT\TournoiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Score
 *
 * @ORM\Table(name="score")
 * @ORM\Entity(repositoryClass="GT\TournoiBundle\Repository\ScoreRepository")
 */
class Score
{
    /**
     * @ORM\OneToOne(targetEntity="GT\TournoiBundle\Entity\Equipe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $equipes;


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
     * @ORM\Column(name="nombre_buts", type="integer")
     */
    private $nombreButs;

    /**
     * @var string
     *
     * @ORM\Column(name="type_victoire", type="string", length=45)
     */
    private $typeVictoire;

    /**
     * @var int
     *
     * @ORM\Column(name="bonus", type="integer")
     */
    private $bonus;

    /**
     * @var int
     *
     * @ORM\Column(name="points", type="integer")
     */
    private $points;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_buts_contre", type="integer")
     */
    private $nombreButsContre;

    /**
     * @var int
     *
     * @ORM\Column(name="forfait", type="integer")
     */
    private $forfait;

    /**
     * @var int
     *
     * @ORM\Column(name="gagnant_penalty", type="integer")
     */
    private $gagnantPenalty;


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
     * Set nombreButs
     *
     * @param integer $nombreButs
     *
     * @return Score
     */
    public function setNombreButs($nombreButs)
    {
        $this->nombreButs = $nombreButs;

        return $this;
    }

    /**
     * Get nombreButs
     *
     * @return int
     */
    public function getNombreButs()
    {
        return $this->nombreButs;
    }

    /**
     * Set typeVictoire
     *
     * @param string $typeVictoire
     *
     * @return Score
     */
    public function setTypeVictoire($typeVictoire)
    {
        $this->typeVictoire = $typeVictoire;

        return $this;
    }

    /**
     * Get typeVictoire
     *
     * @return string
     */
    public function getTypeVictoire()
    {
        return $this->typeVictoire;
    }

    /**
     * Set bonus
     *
     * @param integer $bonus
     *
     * @return Score
     */
    public function setBonus($bonus)
    {
        $this->bonus = $bonus;

        return $this;
    }

    /**
     * Get bonus
     *
     * @return int
     */
    public function getBonus()
    {
        return $this->bonus;
    }

    /**
     * Set points
     *
     * @param integer $points
     *
     * @return Score
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set nombreButsContre
     *
     * @param integer $nombreButsContre
     *
     * @return Score
     */
    public function setNombreButsContre($nombreButsContre)
    {
        $this->nombreButsContre = $nombreButsContre;

        return $this;
    }

    /**
     * Get nombreButsContre
     *
     * @return int
     */
    public function getNombreButsContre()
    {
        return $this->nombreButsContre;
    }

    /**
     * Set forfait
     *
     * @param integer $forfait
     *
     * @return Score
     */
    public function setForfait($forfait)
    {
        $this->forfait = $forfait;

        return $this;
    }

    /**
     * Get forfait
     *
     * @return int
     */
    public function getForfait()
    {
        return $this->forfait;
    }

    /**
     * Set gagnantPenalty
     *
     * @param integer $gagnantPenalty
     *
     * @return Score
     */
    public function setGagnantPenalty($gagnantPenalty)
    {
        $this->gagnantPenalty = $gagnantPenalty;

        return $this;
    }

    /**
     * Get gagnantPenalty
     *
     * @return int
     */
    public function getGagnantPenalty()
    {
        return $this->gagnantPenalty;
    }

    /**
     * Set equipes
     *
     * @param \GT\TournoiBundle\Entity\Equipe $equipes
     *
     * @return Score
     */
    public function setEquipes(\GT\TournoiBundle\Entity\Equipe $equipes)
    {
        $this->equipes = $equipes;

        return $this;
    }

    /**
     * Get equipes
     *
     * @return \GT\TournoiBundle\Entity\Equipe
     */
    public function getEquipes()
    {
        return $this->equipes;
    }
}
