<?php

namespace cma;

use think\Config;
use think\Route;
use think\Service;

class TimeService extends Service
{
    public function boot()
    {
        $this->registerRoutes(function (Route $route) {
            $route->get('info/time', function (Config $config) {
                $data = $config->get('extra.product', []);
                $data['conposer']  = 'Time';
                $data['statement'] = 'Cma';

                foreach ($data as $key => $value) {
                    echo $key . '：' . $value;
                    echo '<br>';
                }
            })->ext('cs');
        });
    }
}
