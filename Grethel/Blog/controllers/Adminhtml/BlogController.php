<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 3/8/17
 * Time: 3:51 PM
 */

Class Grethel_Blog_Adminhtml_BlogController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->setLayout();
        $this->_addContent($this->getLayout()->createBlock('blog/adminhtml_container'));
        $this->_addContent($this->getLayout()->createBlock('post/adminhtml_grid'));
        $this->renderLayout();
    }

    public function newAction()
    {
        $this->setLayout();
        $this->_addContent($this->getLayout()->createBlock('blog/adminhtml_blog_edit_edit'))->
        _addLeft($this->getLayout()->createBlock('blog/adminhtml_blog_tabs'));
        $this->renderLayout();
    }

    public function setLayout($title = 'Blog Posts')
    {
        $this->_title($this->__($title));
        $this->loadLayout();
        $this->_setActiveMenu('blog');
    }
}