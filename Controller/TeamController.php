<?php

class TeamController extends AbstractController
{

    public function show(): void {
        $id = $_GET['id'];
        $manager = new TeamManager();
        $team = $manager->findOne($id);
        $player = new PlayerManager();
        $players = $player->findByTeam($id);
        
        $this->render('teams' , ['teams' => $team , 'players' => $players]);
    }
}
