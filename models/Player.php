<?php

class Player {
    
public function __construct(private ? int  $id = Null, private string $nickname, private string $bio, private string $portrait, private string $teamName, private int $teamId   )
{
    
}

public function getNickname(): string
    {
        return $this->nickname;
    }

    public function setNickname(string $nickname): void
    {
        $this->nickname = $nickname;
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getBio(): string
    {
        return $this->bio;
    }

    public function setBio(string $bio): void
    {
        $this->bio = $bio;
    }

    public function setPortrait(string $portrait): void
    {
        $this->portrait = $portrait;
    }
    public function getPortrait(): string
    {
        return $this->portrait;
    }
    public function getTeamName(): string
    {
        return $this->teamName;
    }

    public function setTeamName(string $teamName): void
    {
        $this->teamName = $teamName;
    }
    public function getTeamId(): string
    {
        return $this->teamId;
    }

    public function setTeamId(string $teamId): void
    {
        $this->teamId = $teamId;
    }



    
}