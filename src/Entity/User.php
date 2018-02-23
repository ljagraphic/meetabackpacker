<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface, \Serializable {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @var string
     */
    private $userName;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=50)
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=50)
     * @var string
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $email;

    /**
     * @ORM\Column(type="date")
     * @var string
     */
    private $birthday;

    /**
     * @ORM\Column(type="string", length=30)
     * @var string
     */
    private $sex;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    public $avatar;

    /**
     * @ORM\Column(type="string", length=45)
     * @var string
     */
    private $language;

    /**
     * @ORM\Column(type="string", length=50)
     * @var string
     */
    private $originCountry;

    /**
     * @ORM\Column(type="boolean")
     * @var boolean
     */
    private $active;

    /**
     * @ORM\Column(type="string", length=45)
     * @var string
     */
    private $role;

    /**
     * @ORM\OneToMany(targetEntity="Advice", mappedBy="user")
     * @var Collection
     */
    private $advices;

    /**
     * @ORM\ManyToMany(targetEntity="Activity", mappedBy="users")
     * @var Collection
     */
    private $myActivities;

    /**
     * @ORM\OneToMany(targetEntity="Activity", mappedBy="creator")
     * @var Collection
     */
    private $createdActivities;

    public function getSalt() {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getRoles() {   //"ROLE_USER|ROLE_ADMIN"
        return explode('|', $this->role);
    }

    public function eraseCredentials() {
        
    }

    /** @see \Serializable::serialize() */
    public function serialize() {
        return serialize(array(
            $this->id,
            $this->userName,
            $this->password,
                // see section on salt below
                // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized) {
        list (
                $this->id,
                $this->userName,
                $this->password,
                // see section on salt below
                // $this->salt
                ) = unserialize($serialized);
    }

    public function __construct() {
        $this->myActivities = new ArrayCollection();
        $this->createdActivities = new ArrayCollection();
        $this->advices = new ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getName() {
        return $this->name;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getBirthday() {
        return $this->birthday;
    }

    public function getSex() {
        return $this->sex;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function getLanguage() {
        return $this->language;
    }

    public function getOriginCountry() {
        return $this->originCountry;
    }

    public function getActive() {
        return $this->active;
    }

    public function getRole() {
        return $this->role;
    }

    public function getAdvices(): Collection {
        return $this->advices;
    }

    public function getMyActivities(): Collection {
        return $this->myActivities;
    }

    public function getCreatedActivities(): Collection {
        return $this->createdActivities;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setBirthday($birthday) {
        $this->birthday = $birthday;
        return $this;
    }

    public function setSex($sex) {
        $this->sex = $sex;
        return $this;
    }

    public function setAvatar($avatar) {
        $this->avatar = $avatar;
        return $this;
    }

    public function setLanguage($language) {
        $this->language = $language;
        return $this;
    }

    public function setOriginCountry($originCountry) {
        $this->originCountry = $originCountry;
        return $this;
    }

    public function setActive($active) {
        $this->active = $active;
        return $this;
    }

    public function setRole($role) {
        $this->role = $role;
        return $this;
    }

    public function setAdvices(Collection $advices) {
        $this->advices = $advices;
        return $this;
    }

    public function setMyActivities(Collection $myActivities) {
        $this->myActivities = $myActivities;
        return $this;
    }

    public function setCreatedActivities(Collection $createdActivities) {
        $this->createdActivities = $createdActivities;
        return $this;
    }
    
    public function __toString() {
    return $this->name;
}

}
