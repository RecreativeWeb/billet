<?php

namespace RW\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapitre
 *
 * @ORM\Table(name="chapitre")
 * @ORM\Entity(repositoryClass="RW\BlogBundle\Repository\ChapitreRepository")
 */
class Chapitre
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="text")
     */
    private $resume;

    /**
     * @var string
     * @ORM\Column(name="content", type="text")
     */
     private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePublication", type="datetime")
     */
    private $datePublication;

    /**
     * @var bool
     *
     * @ORM\Column(name="publishable", type="boolean")
     */
    private $publishable;

    /**
     * @var string
     * 
     * @ORM\Column(name="picture", type="string", length=255)
     */
    private $picture;

    public function __construct()
    {
        // Par défaut, la date de l'annonce est la date d'aujourd'hui
        $this->datePublication = new \Datetime();
        $this->publishable = false;
    }

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
     * Set title
     *
     * @param string $title
     *
     * @return Chapitre
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set resume
     *
     * @param string $resume
     *
     * @return Chapitre
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set datePublication
     *
     * @param \DateTime $datePublication
     *
     * @return Chapitre
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set publishable
     *
     * @param boolean $publishable
     *
     * @return Chapitre
     */
    public function setPublishable($publishable)
    {
        $this->publishable = $publishable;

        return $this;
    }

    /**
     * Get publishable
     *
     * @return bool
     */
    public function getPublishable()
    {
        return $this->publishable;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Chapitre
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Chapitre
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }
}
