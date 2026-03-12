<?php


class PlayerManager extends AbstractManager
{
    public function __construct() {
        parent::__construct();
    }

public function findOne(int $id) : Player {
$query = $this->db->prepare('SELECT players.*, media.url AS portrait, teams.name AS numberTeam, players.team AS teamId FROM players JOIN media ON players.portrait = media.id
        JOIN teams ON players.team = teams.id WHERE players.id = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return new Player ($result["id"], $result["nickname"],
        $result["bio"],$result["portrait"], $result["numberTeam"], $result['teamId']);
}

public function findAll() : array
    {
        $query = $this->db->prepare('SELECT players.*, media.url AS portrait, teams.name AS numberTeam, players.team AS teamId FROM players JOIN media ON players.portrait = media.id
        JOIN teams ON players.team = teams.id');
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        $player = [];

        foreach($results as $result)
        {
            $player[] = new Player ($result["id"], $result["nickname"],
            $result["bio"],$result["portrait"], $result['numberTeam'], $result['teamId']);
        }

        return $player;
    }

    public function findPerformancesByGame(int $gameId) : array {
        $query = $this->db->prepare('SELECT players.nickname, teams.name AS team_name, pp.points, pp.assists
            FROM player_performance pp
            JOIN players ON pp.player = players.id
            JOIN teams ON players.team = teams.id
            WHERE pp.game = :gameId
            ORDER BY pp.points DESC');
        $query->execute(['gameId' => $gameId]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findByTeam($teamId) : array {
        $query = $this->db->prepare('SELECT players.*, media.url AS portrait, teams.name AS numberTeam, players.team AS teamId FROM players JOIN media ON players.portrait = media.id
        JOIN teams ON players.team = teams.id WHERE players.team = :teamId');
        $parameters = 
            ['teamId' => $teamId];
        
        $query->execute($parameters);
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        $player = [];

        foreach($results as $result)
        {
            $player[] = new Player ($result["id"], $result["nickname"],
            $result["bio"],$result["portrait"], $result['numberTeam'], $result['teamId']);
        }

        return $player;
    } 
}
