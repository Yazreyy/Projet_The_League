<?php

class HomeController extends AbstractController
{
    public function index(): void
    {
        $TeamManager = new TeamManager();
        $teams = $TeamManager->findAll();

        $GameManager = new GameManager();
        $game = $GameManager->findLast();

        $PlayerManager = new PlayerManager();
        $players = $PlayerManager->findAll();

        $featuredTeam = $teams[0];
        $featuredPlayers = $PlayerManager->findByTeam($featuredTeam->getId());





        $this->render("home", ["teams" => $teams, "game" => $game, "players" => $players, 'featuredPlayers' => $featuredPlayers, 'featuredTeam' => $featuredTeam]);
    }
}
