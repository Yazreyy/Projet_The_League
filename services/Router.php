<?php

class Router
{
    public function handleRequest() : void
    {
         if (isset($_GET["route"])) {
            if ($_GET["route"] === "home") {
                $ctrl = new HomeController();
                $ctrl->index();
            	} elseif($_GET['route'] === 'team') {
                $ctrl = new TeamController();
                $ctrl->show();
            	} elseif($_GET['route'] === 'player'){
                    $ctrl = new PlayerController();
                    if(isset($_GET['id'])) {
                    $ctrl->show();
                	} else {
                    $ctrl->index();
                }
                } else {
                $ctrl = new HomeController();
                $ctrl->index();
            }
    	} else {
        $ctrl = new HomeController();
        $ctrl->index();
        }
}
}
?>