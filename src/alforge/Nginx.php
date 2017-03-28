<?php

namespace AlForge;

use AlForge\Forge;
use Alfred\Workflows\Workflow;

class Nginx extends Forge
{
    public function search($query)
    {
        echo $this->serverSearch($query);
    }

    public function execute($server_id)
    {
        $server = $this->getServerInfo($server_id);

        if($this->confirm("Are you sure you want to restart Nginx on `$server->name`?")){
            $response = $this->apiRequest("https://forge.laravel.com/api/v1/servers/$server->id/nginx/reboot");
            $this->respond(
                "Command sent to Forge",
                ["push_title" => "Restarting Nginx on `$server->name`"]
            );
        }

    }
}