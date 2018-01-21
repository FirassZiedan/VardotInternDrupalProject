<?php

namespace Drupal\testmodule\form ;

use Drupal\Core\Form\FormBase;

class RsvpForm extends FormBase{

  function getFormId(){    
    return 'RSVP_form';
  }
  function buildForm(array $form, FormStateInterface $form_state){
    
  }


}
