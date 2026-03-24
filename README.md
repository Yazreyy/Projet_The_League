#  The League

A sports league website built with PHP following the MVC architecture pattern, featuring teams, players, and game data with multilingual support (French/English).

##  Screenshots

### Homepage
<img width="1892" height="931" alt="Image" src="https://github.com/user-attachments/assets/1e6d8229-825e-43e6-9536-31b6a5a88815" />

### Players

<img width="1905" height="901" alt="Image" src="https://github.com/user-attachments/assets/166dd2a8-a547-4520-aeb7-410324bb38ff" />

### Matchs

<img width="1909" height="888" alt="Image" src="https://github.com/user-attachments/assets/b62ba41b-9068-4626-84d3-c3a54ffadcf9" />



##  Features

-  Browse all teams with logos and details
-  View player rosters for each team
-  Track game results and schedules
-  Multilingual support (French / English)
-  Fully responsive design

##  Tech Stack

<p>
  <img src="https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=react&logoColor=61DAFB" />
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=javascript&logoColor=black" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=flat-square&logo=css3&logoColor=white" />
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=flat-square&logo=html5&logoColor=white" />
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=flat-square&logo=javascript&logoColor=black" />
</p>


##  Project Structure
```
the-league/
├── config/
│   └── database.txt
├── controllers/
│   ├── AbstractController.php
│   ├── HomeController.php
│   ├── TeamController.php
│   ├── PlayerController.php
│   └── GameController.php
├── managers/
│   ├── AbstractManager.php
│   ├── TeamManager.php
│   ├── PlayerManager.php
│   └── GameManager.php
├── models/
│   ├── Team.php
│   ├── Player.php
│   └── Game.php
├── services/
│   └── Router.php
├── templates/
│   └── *.phtml
├── assets/
│   └── style/
│       └── style.css
├── autoload.php
└── index.php
```

##  Author

**Marlonn Gillet** - [GitHub](https://github.com/Yazreyy)
