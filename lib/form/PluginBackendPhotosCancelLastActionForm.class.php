<?php
class PluginBackendPhotosCancelLastActionForm extends sfForm
{

    public function setup()
    {
        $this->setWidgets(array(
          'color'     => new sfWidgetFormInput(array(), array('class' => 'color')),
        ));

        $this->setValidators(array(
          'color'     => new sfValidatorString(array('max_length' => 6, 'required' => true)),
        ));

        $this->widgetSchema->setNameFormat('cancellastaction[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    }

}
?>