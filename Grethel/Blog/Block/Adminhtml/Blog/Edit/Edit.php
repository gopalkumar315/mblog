<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 3/8/17
 * Time: 3:59 PM
 */

Class Grethel_Blog_Block_Adminhtml_Blog_Edit_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
        $this->_objectId = 'id';
        $this->_blockGroup = 'blog';
        $this->_controller = 'adminhtml_blog';
        $this->_mode = 'edit';
    }


    /**
     * Retrieve text for header element depending on loaded page
     *
     * @return string
     */
    public function getHeaderText() {
        return $this->__('Add post');
    }
}