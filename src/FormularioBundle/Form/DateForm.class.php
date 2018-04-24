<?php


class DateForm extends BaseDateForm
{
  public function configure()
  {
    //unset($this['cardset_id'],$this['usercard_list']);

    //Empotramos al menos un formulario de pictures
    $duracion = $this->getObject()->getDate();
    if (!$duraciones){
      $duracion = new Duracion();
      $duracion->setCard($this->getObject());
      $duraciones = array($duracion);
    }

    //Un formulario vacío hará de contenedor para todas las pictures
    $duraciones_forms = new SfForm();
    $count = 0;
    foreach ($duraciones as $duracion) {
    $dur_form = new PictureForm($duracion);
    //Empotramos cada formulario en el contenedor
    $duraciones_forms->embedForm($count, $dur_form);
    $count ++;
  }
  //Empotramos el contenedor en el formulario principal
  $this->embedForm('duracion', $duraciones_forms);

  }
}