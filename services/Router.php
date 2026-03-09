<?php

class Router
{
    public function handleRequest() : void
    {
        $ctrl = new HomeController();
        $ctrl->index();
    }
}
?>