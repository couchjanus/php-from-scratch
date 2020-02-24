<?php
// CategoryController.php

class CategoryController
{
    /**
     * страница управления категориями
     *
     * @return bool
     */
    public function index()
    {
        try {
            $db = Connection::getInstance(require_once CONFIG.('/database.php'));
            $sql = 'SELECT * FROM categories';
            $stm = $db->prepare($sql);
            $stm->execute();
            $categories = $stm->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($categories);
          
        } catch (Exception $e) {
            print $e->getMessage();
        }
        $title = 'Category List Page ';
        $this->view->render('admin/categories/index', compact('title', 'categories'), 'admin');
    }
}
