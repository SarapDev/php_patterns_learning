<?php


namespace Application\factory_method\linkedIn;


use Application\factory_method\SocialNetworkPoster;
use Application\factory_method\SocialNetworkConnector;

class LinkedInPoster extends SocialNetworkPoster
{
    private string $password;
    private string $email;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}