<?php

class Grethel_Blog_Block_Adminhtml_Blog_Edit_Meta extends Mage_Adminhtml_Block_Widget_Form
{

    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();

        if($this->getRequest()->getParam('id')) {
            $fieldset = $form->addFieldset('add_form', array(
                'legend' =>Mage::helper('blog')->__('Update post')
            ));
        } else {
            $fieldset = $form->addFieldset('add_form', array(
                'legend' =>Mage::helper('blog')->__('Add Meta Data')
            ));
        }

        $fieldset->addField('meta_keywords', 'textarea', array(
            'label'     => Mage::helper('blog')->__('Meta Keywords'),
            'class'     => 'required-entry',
            'required'  => true,
            'name'      => 'meta_keywords',
            'rows' => 10,
            'cols' => 40
        ));

        $fieldset->addField('meta_description', 'textarea', array(
            'label'     => Mage::helper('blog')->__('Meta Description'),
            'class'     => 'required-entry',
            'required'  => true,
            'name'      => 'meta_description',
        ));

        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }


}