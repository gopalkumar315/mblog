<?php

class Grethel_Blog_Block_Adminhtml_Blog_Edit_Content extends Mage_Adminhtml_Block_Widget_Form
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
                'legend' =>Mage::helper('blog')->__('Add post')
            ));
        }

        $fieldset->addField('TPTags', 'text', array(
            'label'     => Mage::helper('blog')->__('Title'),
            'class'     => 'required-entry',
            'required'  => true,
            'name'      => 'TPTags',
        ));

        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }


}