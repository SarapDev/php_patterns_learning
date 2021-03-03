<?php


namespace Application\factory_method\linkedIn;


use Application\factory_method\SocialNetworkConnector;

class LinkedInConnector implements SocialNetworkConnector
{
    private string $password;
    private string $login;

    public function __construct(string $password, string $login) {
        $this->password = $password;
        $this->login = $login;
    }

    public function login(): void
    {
        echo "Send HTTP API request to log in user $this->login with " .
            "password $this->password <br/>";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->login <br/>";
    }

    public function createPost($content): void
    {
        echo "Send HTTP API requests to create a post in LinkedIn timeline. <br/>";
    }
}