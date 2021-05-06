<?php

include_once '/Users/alex/PhpProjects/Phpshop/models/Category.php';
include_once '/Users/alex/PhpProjects/Phpshop/models/Product.php';

class SiteController
{

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(6);
        
        require_once('/Users/alex/PhpProjects/Phpshop/views/site/index.php');

        return true;
    }

}
