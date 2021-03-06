<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require_once '/HtmlHelper.class.php';
require_once '/SqlHelper.class.php';
require_once '/sites/ProductList.class.php';
require_once '/sites/Cart.class.php';

class SuperController {

    public function __construct() {
        $this->navigate();
    }

    public function navigate() {
        if (!isset($_GET["nav"])) {
            $this->default_behaviour();
        } else {
            $nav = $_GET["nav"];
            switch ($nav) {
                case Config::PRODUCT_LIST:
                    $this->create_product_list();
                    break;
                case Config::CART:
                    $this->create_cart();
                    break;
                default:
                    $this->default_behaviour();
                    break;
            }
        }
    }

    public function default_behaviour() {
        $this->create_product_list();
    }

    public function create_product_list() {
        $product_list = new ProductList();
    }
    
    public function create_cart() {
        $cart = new Cart();
    }
}

$super_controller = new SuperController();
