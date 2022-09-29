<?php
namespace IIKWorks\Portfolio\App;

class Controller
{
    protected App $app;

    public function __construct(App $app)
    {
        $this->app = $app;
    }
}