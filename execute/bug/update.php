<?php

require_once "bootstrap.php";

$bug = $em->find("Bug", (int)$argv[1]);
$bug->close();

$em->flush();