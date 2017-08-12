<?php

class Grethel_Blog_Block_Adminhtml_Blog_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{

    public function __construct()
    {
        parent::__construct();
        $this->setId('currency_edit_form');
        $this->setTitle(Mage::helper('blog')->__('Add Post'));
    }

    protected function _prepareForm()
    {
        $form = new Varien_Data_Form(array('id' => 'currency_edit_form', 'action' => $this->getData('action'), 'method' => 'post'));
        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }


}