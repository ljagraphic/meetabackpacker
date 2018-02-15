<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdvicesRepository")
 */
class Advice {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     * var string
     */
    private $registerDate;

    /**
     * @ORM\Column(type="text")
     * var string
     */
    private $message;

    /**
     * @ORM\Column(type="integer")
     * var integer
     */
    private $activityNotation;

    /**
     * @ORM\Column(type="integer")
     * var integer
     */
    private $adviceNotation;

    /**
     * @ORM\ManyToOne(targetEntity="Activity", inversedBy="advices")
     * @var Activity
     */
    private $activity;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="advice")
     * @var User
     */
    private $user;

    public function getId() {
        return $this->id;
    }

    public function getRegisterDate() {
        return $this->registerDate;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getActivityNotation() {
        return $this->activityNotation;
    }

    public function getAdviceNotation() {
        return $this->adviceNotation;
    }

    public function getActivity(): Activity {
        return $this->activity;
    }

    public function getUser(): User {
        return $this->user;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setRegisterDate($registerDate) {
        $this->registerDate = $registerDate;
        return $this;
    }

    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    public function setActivityNotation($activityNotation) {
        $this->activityNotation = $activityNotation;
        return $this;
    }

    public function setAdviceNotation($adviceNotation) {
        $this->adviceNotation = $adviceNotation;
        return $this;
    }

    public function setActivity(Activity $activity) {
        $this->activity = $activity;
        return $this;
    }

    public function setUser(User $user) {
        $this->user = $user;
        return $this;
    }

}
