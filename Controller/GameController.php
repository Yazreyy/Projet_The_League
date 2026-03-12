<?php

class GameController extends AbstractController
{
    public function index(): void {
        $manager = new GameManager();
        $games = $manager->findAll();
        $this->render('matchs', ['games' => $games]);
    }

    public function show(): void {
        $id = $_GET['id'];
        $manager = new GameManager();
        $game = $manager->findOne($id);
        $playerManager = new PlayerManager();
        $performances = $playerManager->findPerformancesByGame($id);
        $this->render('match', ['game' => $game, 'performances' => $performances]);
    }
}
