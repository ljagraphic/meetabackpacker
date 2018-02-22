<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ActivitiesRepository")
 */
class Activity {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     * var string
     */
    private $title;
    function getTitle() {
        return $this->title;
    }

    function setTitle($title) {
        $this->title = $title;
    }

        /**
     * @ORM\Column(type="text")
     * var string
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=100)
     * var string
     */
    private $category;
    
    /**
     * @ORM\Column(type="string", length=255)
     * var string
     */
    private $pictures;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     * var string
     */
    private $prices;

    /**
     * @ORM\Column(type="string", length=255)
     * var string
     */
    private $tips;

    /**
     * @ORM\Column(type="decimal", precision=9, scale=6)
     * var integer
     */
    private $longitude;

    /**
     * @ORM\Column(type="decimal", precision=9, scale=6)
     * var integer
     */
    private $latitude;

    /**
     * @ORM\Column(type="string", length=150)
     * var string
     */
    private $address;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="createdActivities")
     * @var User
     */
    private $creator;

    /**
     * @ORM\ManyToMany(targetEntity="User", inversedBy="myActivities")
     * @var Collection
     */
    private $users;

    /**
     * @ORM\OneToMany(targetEntity="Advice", mappedBy="activity")
     * @var Collection
     */
    private $advices;

    public function __construct() {
        $this->users = new ArrayCollection();
        $this->advices = new ArrayCollection();
        $this->creator = new ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getPictures() {
        return $this->pictures;
    }

    public function getPrices() {
        return $this->prices;
    }

    public function getTips() {
        return $this->tips;
    }

    public function getLongitude() {
        return $this->longitude;
    }

    public function getLatitude() {
        return $this->latitude;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getCreator(): User {
        return $this->creator;
    }

    public function getUsers(): Collection {
        return $this->users;
    }

    public function getAdvices(): Collection {
        return $this->advices;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    public function setPictures($pictures) {
        $this->pictures = $pictures;
        return $this;
    }

    public function setPrices($prices) {
        $this->prices = $prices;
        return $this;
    }

    public function setTips($tips) {
        $this->tips = $tips;
        return $this;
    }

    public function setLongitude($longitude) {
        $this->longitude = $longitude;
        return $this;
    }

    public function setLatitude($latitude) {
        $this->latitude = $latitude;
        return $this;
    }

    public function setAddress($address) {
        $this->address = $address;
        return $this;
    }

    public function setCreator(User $creator) {
        $this->creator = $creator;
        return $this;
    }

    public function setUsers(Collection $users) {
        $this->users = $users;
        return $this;
    }

    public function setAdvices(Collection $advices) {
        $this->advices = $advices;
        return $this;
    }

}
