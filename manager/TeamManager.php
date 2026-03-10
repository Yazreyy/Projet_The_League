<?php


class TeamManager extends AbstractManager
{
    public function __construct() {
        parent::__construct();
    }

public function findOne(int $id) : Team {
$query = $this->db->prepare('SELECT teams.*, media.url AS logo FROM teams JOIN media ON teams.logo = media.id WHERE teams.id = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return new Team($result["id"], $result["name"],
        $result["description"],$result["logo"]);
}

public function findAll() : array
    {
        $query = $this->db->prepare('SELECT teams.*, media.url AS logo FROM teams JOIN media ON teams.logo = media.id');
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        $teams = [];

        foreach($results as $result)
        {
            $teams[] = new Team($result["id"], $result["name"],
            $result["description"],$result["logo"]);
        }

        return $teams;
    }
}
