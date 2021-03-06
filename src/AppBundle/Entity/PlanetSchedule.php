<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanetSchedule
 * @ORM\Table(name="PlanetSchedule")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlanetScheduleRepository")
 */
class PlanetSchedule
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $object;

    /**
     * @ORM\Column(type="string")
     */
    private $city;

    /**
     * @ORM\Column(type="float")
     */
    private $longitude;

    /**
     * @ORM\Column(type="float")
     */
    private $latitude;

    /**
     * @ORM\Column(type="integer")
     */
    private $timezone;

    /**
     * @ORM\Column(type="string")
     */
    private $date;

    /**
     * @ORM\Column(type="string")
     */
    private $rise;

    /**
     * @ORM\Column(type="string")
     */
    private $fall;

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
     * Set object
     *
     * @param string $object
     *
     * @return PlanetSchedule
     */
    public function setObject($object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return PlanetSchedule
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
     * Set longitude
     *
     * @param float $longitude
     *
     * @return PlanetSchedule
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return PlanetSchedule
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set timezone
     *
     * @param integer $timezone
     *
     * @return PlanetSchedule
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return int
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return PlanetSchedule
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set rise
     *
     * @param string $rise
     *
     * @return PlanetSchedule
     */
    public function setRise($rise)
    {
        $this->rise = $rise;

        return $this;
    }

    /**
     * Get rise
     *
     * @return string
     */
    public function getRise()
    {
        return $this->rise;
    }

    /**
     * Set fall
     *
     * @param string $fall
     *
     * @return PlanetSchedule
     */
    public function setFall($fall)
    {
        $this->fall = $fall;

        return $this;
    }

    /**
     * Get fall
     *
     * @return string
     */
    public function getFall()
    {
        return $this->fall;
    }
}
