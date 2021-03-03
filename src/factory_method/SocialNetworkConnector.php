<?php


namespace Application\factory_method;


interface SocialNetworkConnector
{
    public function login(): void;
    public function createPost(string $content): void;
    public function logout(): void;
}