<?php
	// this file will extend PArentClass.php

	class Reaction extends Election {
    private $reaction;

    public function __construct($loser, $reaction){
        $this->candidate = $loser->getCandidate();
        $this->party = $loser->getParty();
        $this->dayOfWeek = $loser->getDayOfWeek();
        $this->reaction = $reaction;
    }

    public function setCandidate($winner){
      $this->candidate = $winner;
    }

    public function setReaction($newReact){
      $this->reaction = $newReact;
    }

    public function setDayOfWeek($newDay){
      $this->dayOfWeek = $newDay;
    }

    public function setParty($newParty){
      $this->party = $newParty;
    }

    public function getReaction(){
      return $this->reaction;
    }

    public function __toString(){
      return ("On ".$this->getDayOfWeek() . ", " .$this->getParty() . " " . $this->getCandidate() ." " . " was set to be pressident and I felt " . $this->getReaction());
    }
	}
