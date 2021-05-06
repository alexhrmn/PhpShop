<?php

include_once '/Users/alex/PhpProjects/models/Blog.php';

class BlogController
{

    public function actionIndex()
    {
        $blogList = array();
        $blogList = Blog::getBlogList();

        require_once('/Users/alex/PhpProjects/views/blog/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $newsItem = Blog::getNewsItemById($id);
            require_once('/Users/alex/PhpProjects/views/blog/view.php');
        }

        return true;
    }

}
