<?php
// BlogController.php

class BlogController
{
    public function index()
    {
        $title = 'Blog Home Page';
        render('blog/index', compact('title'));
    }
}
