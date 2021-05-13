<?php

include_once '/Users/alex/PhpProjects/Phpshop/models/Category.php';
include_once '/Users/alex/PhpProjects/Phpshop/models/Product.php';

class ProductController
{

    public function actionView($productId)
    {

        $categories = array();
        $categories = Category::getCategoriesList();
        
        $product = Product::getProductById($productId);

        require_once('/Users/alex/PhpProjects/Phpshop/views/product/view.php');

        return true;
    }

}
