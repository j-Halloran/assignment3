<?php

  //load in reaction.php and election.php
  function __autoload($class) {
    require_once $class . '.php';
  }

  $candidates = array("polls"=>"Hillary Clinton","winner"=>"Donald Trump","future"=>"Bernie Sanders");
  $times = array("early"=>"Monday","electionDay"=>"Tuesday night","hope"=>"2020");

  $predicted = new Election($candidates["polls"],"Democrat",$times["early"]);
  $react = new Reaction($predicted," excited as hell!");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3 - Jake Halloran</title>

	<link rel="stylesheet" href="assignment3.css">
</head>

<body>
  <h1 id = "pageHeader"> Election 2016 <h1>
    <section id="contentHolder">
      <p>This week, </p>
      <?php echo $react ?>

      <p></br>However, everything changed when the fire nation attacked!</br> </p>
      <?php $react->setCandidate($candidates["winner"]);
        $react->setParty("Republican");
        $react->setDayOfWeek($times["electionDay"]);
        $react->setReaction(" scared for America :(");
        echo $react;
      ?>

      <?php
        $react->setCandidate($candidates["future"]);
        $react->setDayOfWeek($times["hope"]);
      ?>
      <p></br>That said however, we might get <?php echo $react->getCandidate(); ?> in <?php echo $react->getDayOfWeek(); ?>, so thats nice I guess</br></p>

    </section>

</body>
</html>
