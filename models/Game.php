<?php

class Game {
    
public function __construct(private ? int  $id = Null, private string $name, private string $date, private string $team_1, private string $team_2,
private string $logo_1, private string $logo_2,private string $winner  )
{
    
}

public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function setTeam_1(string $team_1): void
    {
        $this->team_1 = $team_1;
    }
    public function getTeam_1(): string
    {
        return $this->team_1;
    }
     public function getLogo_1(): string
    {
        return $this->logo_1;
    }

    public function setLogo_1(string $logo_1): void
    {
        $this->logo_1 = $logo_1;
    }
     public function getLogo_2(): string
    {
        return $this->logo_2;
    }

    public function setLogo_2(string $logo_2): void
    {
        $this->logo_2 = $logo_2;
    }
    
    public function getTeam_2(): string
    {
        return $this->team_2;
    }

    public function setTeam_2(string $team_2): void
    {
        $this->team_2 = $team_2;
    }

    public function getWinner(): string
    {
        return $this->winner;
    }

    public function setWinner(string $winner): void
    {
        $this->winner = $winner;
    }
    
}