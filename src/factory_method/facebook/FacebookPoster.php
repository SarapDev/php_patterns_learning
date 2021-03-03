<?php


namespace Application\factory_method\facebook;


use Application\factory_method\SocialNetworkPoster;
use Application\factory_method\SocialNetworkConnector;

class FacebookPoster extends SocialNetworkPoster
{
    private string $password;
    private string $login;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}