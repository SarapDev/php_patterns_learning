<?php

namespace Application;

use Application\factory_method\SocialNetworkPoster;

class Application
{
    public function factoryMethod(SocialNetworkPoster $creator) {
        $creator->post("Hello world");
        $creator->post("I'm using factory method");
    }
}