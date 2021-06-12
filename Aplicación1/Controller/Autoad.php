<?php
    function CargadorClase ($class)
    {
       if(is_file('Controller/'.$class.'. Controller.php'))
    {
            include ('Controller/'.$class.'.Controller.php');
    }
    else if (is_file('Model/'.sclass.'.controller.php'))
    {
            include ('Model/'.$class.'.Controller.php');
    }
    else if (is_file('Framework/Smarty/'.sclass.'.class.php'))
    {
            include ('Framework/Smarty/'.sclass.'.class.php');
  }
    spl_autoload_register('Cargadorclase');

    ?>