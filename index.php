<?php 

require_once "controllers/template.controller.php";
require_once "controllers/user.controller.php";

$template = new TemplateController();
$template->getTemplate();
