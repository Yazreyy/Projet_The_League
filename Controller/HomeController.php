<?php

class HomeController extends AbstractController {
    public function index(): void {
        $TeamManager = new TeamManager();
        $teams = $TeamManager->findAll();
        
        $this->render("home.php", ["teams"=> $teams]);
    }
}
?>