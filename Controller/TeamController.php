<?php

class TeamController extends AbstractController
{

    public function index(): void {
        $manager = new TeamManager();
        $teams = $manager->findAll();
        $this->render('teams', ['teams' => $teams]);
    }

    public function show(): void {
        $id = $_GET['id'];
        $manager = new TeamManager();
        $team = $manager->findOne($id);
        $player = new PlayerManager();
        $players = $player->findByTeam($id);
        
        $this->render('team' , ['teams' => $team , 'players' => $players]);
    }
}
