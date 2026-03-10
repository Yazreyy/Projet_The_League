<?php

class PlayerController extends AbstractController
{
    public function index(): void
    {
        $PlayerManager = new PlayerManager();
        $players = $PlayerManager->findAll();




        $this->render("players", ["players" => $players]);
    }

    public function show(): void {
        $id = $_GET['id'];
        $playerManager = new PlayerManager();
        $player = $playerManager->findOne($id);
        $coequipiers = $playerManager->findByTeam($player->getTeamId());
        
        $this->render('player' , ['coequipiers' => $coequipiers , 'player' => $player]);
    }
}
