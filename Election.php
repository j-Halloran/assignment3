<?php
	// this file will extend PArentClass.php

	class Election{
    private $candidate;
    private $party;
    private $dayOfWeek;

    public function __construct($candidate, $party, $dayOfWeek){
      $this->candidate = $candidate;
      $this->party = $party;
      $this->$dayOfWeek = $dayOfWeek;
    }

    public function getCandidate(){
      return $this->candidate;
    }

    public function getParty(){
      return $this->party;
    }

    public function getDayOfWeek(){
      return $this->dayOfWeek;
    }
	}
