<?php

namespace Application;

use Application\builder\SqlQueryBuilder;
use Application\factory_method\SocialNetworkPoster;

class Application
{
    public function factoryMethod(SocialNetworkPoster $creator): void {
        $creator->post("Hello world");
        $creator->post("I'm using factory method");
    }

    public function builder(SqlQueryBuilder $builder) {
        echo $builder->select('users', ['*'])
                ->where('age', 19, ">")
                ->where('age', 30, "<")
                ->where('email', '%rocketfirm%' ,'LIKE')
                ->limit(10, 20)
                ->getSql();
    }
}