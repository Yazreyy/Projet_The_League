<?php


class GameManager extends AbstractManager
{
    public function __construct() {
        parent::__construct();
    }

public function findAll() : array {
    $query = $this->db->prepare('SELECT games.*, t1.name AS team_1, t2.name AS team_2, m1.url AS logo_1, m2.url AS logo_2, tw.name AS winner
        FROM games JOIN teams t1 ON games.team_1 = t1.id
        JOIN teams t2 ON games.team_2 = t2.id
        JOIN media m1 ON t1.logo = m1.id
        JOIN media m2 ON t2.logo = m2.id
        JOIN teams tw ON games.winner = tw.id
        ORDER BY games.date DESC');
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    $games = [];
    foreach ($results as $result) {
        $games[] = new Game($result["id"], $result["name"], $result["date"], $result["team_1"], $result["team_2"], $result["logo_1"], $result["logo_2"], $result["winner"]);
    }
    return $games;
}

public function findOne(int $id) : Game {
    $query = $this->db->prepare('SELECT games.*, t1.name AS team_1, t2.name AS team_2, m1.url AS logo_1, m2.url AS logo_2, tw.name AS winner
        FROM games JOIN teams t1 ON games.team_1 = t1.id
        JOIN teams t2 ON games.team_2 = t2.id
        JOIN media m1 ON t1.logo = m1.id
        JOIN media m2 ON t2.logo = m2.id
        JOIN teams tw ON games.winner = tw.id
        WHERE games.id = :id');
    $query->execute(['id' => $id]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return new Game($result["id"], $result["name"], $result["date"], $result["team_1"], $result["team_2"], $result["logo_1"], $result["logo_2"], $result["winner"]);
}

public function findLast() : Game {
$query = $this->db->prepare('SELECT games.*, t1.name AS team_1, t2.name AS team_2, m1.url AS logo_1, m2.url AS logo_2, tw.name AS winner
 FROM games JOIN teams t1 ON games.team_1 = t1.id
        JOIN teams t2 ON games.team_2 = t2.id
        JOIN media m1 ON t1.logo = m1.id
        JOIN media m2 ON t2.logo = m2.id
        JOIN teams tw ON games.winner = tw.id
        ORDER BY games.date DESC LIMIT 1 ');
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return new Game ($result["id"], $result["name"],$result["date"],$result["team_1"],$result["team_2"],$result["logo_1"], $result["logo_2"], $result['winner']);
}
}