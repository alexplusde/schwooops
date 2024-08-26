<?php

if (rex::getUser()->isAdmin()) {
    $form = rex_config_form::factory('schwooops');

    $field = $form->addTextField('name');
    $field->setLabel($this->i18n('schwooops_settings_name_label'));
    $field->setNotice($this->i18n('schwooops_settings_name_notice'));

    $field = $form->addMediaField('logo');
    $field->setLabel($this->i18n('schwooops_settings_logo_label'));
    $field->setNotice($this->i18n('schwooops_settings_logo_notice'));

    $field = $form->addTextField('email');
    $field->setLabel($this->i18n('schwooops_settings_email_label'));
    $field->setNotice($this->i18n('schwooops_settings_email_notice'));

    $field = $form->addTextField('phone');
    $field->setLabel($this->i18n('schwooops_settings_phone_label'));
    $field->setNotice($this->i18n('schwooops_settings_phone_notice'));

    $field = $form->addTextareaField('contact');
    $field->setLabel($this->i18n('schwooops_settings_contact_label'));
    $field->setNotice($this->i18n('schwooops_settings_contact_notice'));

    $field = $form->addTextareaField('more');
    $field->setLabel($this->i18n('schwooops_settings_more_label'));
    $field->setNotice($this->i18n('schwooops_settings_more_notice'));

    $fragment = new rex_fragment();
    $fragment->setVar('class', 'edit', false);
    $fragment->setVar('title', $this->i18n('schwooops_settings'), false);
    $fragment->setVar('body', $form->get(), false);
    echo $fragment->parse('core/page/section.php');
}
