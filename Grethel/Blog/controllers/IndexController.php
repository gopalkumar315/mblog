<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 3/8/17
 * Time: 2:38 PM
 */

Class Grethel_Blog_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $blogPost = Mage::getModel('test/blogpost');
        echo get_class($blogPost);
    }
}