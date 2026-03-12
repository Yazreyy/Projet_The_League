<?php

class Router
{
    public function handleRequest() : void
    {
         if (isset($_GET["route"])) {
            if ($_GET["route"] === "home") {
                $ctrl = new HomeController();
                $ctrl->index();
            	} elseif($_GET['route'] === 'teams') {
                $ctrl = new TeamController();
                if(isset($_GET['id'])) {
                    $ctrl->show();
                } else {
                    $ctrl->index();
                }
            	} elseif($_GET['route'] === 'player'){
                    $ctrl = new PlayerController();
                    if(isset($_GET['id'])) {
                    $ctrl->show();
                	} else {
                    $ctrl->index();
                }
                } elseif($_GET['route'] === 'matchs') {
                $ctrl = new GameController();
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