<?php
// HomeController.php

class HomeController
{
    public function index()
    {
        $title = 'Our Best Cats Members Home Page';
        render('home/index', compact('title'));
    }
}
