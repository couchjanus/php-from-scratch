<?php
// DashboardController.php

class DashboardController
{
   public function index()
   {
       $title = 'Admin Dashboard';
       render('admin/index', compact('title'), 'admin');
   }
}
