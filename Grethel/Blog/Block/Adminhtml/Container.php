<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 3/8/17
 * Time: 3:59 PM
 */

Class Grethel_Blog_Block_Adminhtml_Container extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * Grethel_Blog_Block_Adminhtml_Blog_Container constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->_objectId   = 'page_id';
        $this->_controller = 'adminhtml_blog';
    }

    /**
     * Prepare layout
     */
    protected function _prepareLayout() {

    }

    /**
     * Retrieve text for header element depending on loaded page
     * @return string
     */
    public function getHeaderText() {
        return Mage::helper('blog')->__('Blog Posts');
    }
}