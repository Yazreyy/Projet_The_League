<?php


class TeamManager extends AbstractManager
{
    public function __construct() {
        parent::__construct();
    }

    public function create(Team $team) : Team {
$query = $this->db->prepare("insert INTO teams (id, name, description,logo)
 VALUES (null, :name, :description, :logo)");

$parameters = [
    'name' => $team->getName(),
    'description' => $team->getDescription(),
    'logo' => $team->getLogo()
];

$query->execute($parameters);

$id = $this->db->lastInsertId();
return new Team($id, $team->getName(),$team->getDescription(),$team->getLogo());
    }

public function update(Team $team) : Team {
    $query = $this->db->prepare("UPDATE teams SET name = :name,
    description = :description, logo = :logo WHERE id = :id");

$parameters = [
    'id' => $team->getid(),
    'name' => $team->getName(),
    'description' => $team->getDescription(),
    'logo' => $team->getLogo()
];

$query->execute($parameters);

return $team;
}

public function delete(Team $team) : void {
$query = $this->db->prepare("DELETE FROM teams WHERE id = :id");
$parameters = [
    'id' => $team->getId()
];
$query->execute($parameters);
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
