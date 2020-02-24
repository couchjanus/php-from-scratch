<?php
// AboutController.php

class AboutController
{
   public function index()
   {
       $title = 'About Our Cats Members';
       render('about/index', compact('title'));
   }
}
