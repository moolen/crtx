<?php

namespace App\Controller;

class PageController
{
    public function __construct($Application)
    {
        $this->application = $application;
    }

    public function allPages()
    {
        echo "all pages";
    }

    public function specialPage()
    {
        echo "special Page";
    }
}
