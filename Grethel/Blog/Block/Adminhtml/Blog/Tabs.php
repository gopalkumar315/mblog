<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 9/8/17
 * Time: 5:21 PM
 */

class Grethel_Blog_Block_Adminhtml_Blog_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('currency_edit_tabs');
        $this->setDestElementId('currency_edit_form');
        $this->setTitle(Mage::helper('blog')->__('Currency'));
    }

    protected function _beforeToHtml()
    {
        $this->addTab('general', array(
            'label'     => Mage::helper('blog')->__('General Information'),
            'content'   => $this->getLayout()->createBlock('blog/adminhtml_blog_edit_content')->toHtml(),
            'active'    => true
        ));

        $this->addTab('meta', array(
            'label'     => Mage::helper('blog')->__('Meta Data'),
            'content'   => $this->getLayout()->createBlock('blog/adminhtml_blog_edit_meta')->toHtml(),
        ));


        return parent::_beforeToHtml();
    }
}