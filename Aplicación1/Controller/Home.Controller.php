<?php
    class Home
    {
        public function Inicio
        {
            $smaty=new Smarty();

            $vec=array();

            $vec=[
                ['nombre'=>'Carlos', 'pass'=>'123'],
                ['nombre'=>'Miguel', 'pass'=>'456'], 
                ['nombre'=>'Arturo', 'pass'=>'789'],
                ['nombre'=>'Javier', 'pass'=>'321'],
                ['nombre'=>'Manuel', 'pass'=>'654'],
                ['nombre'=>'Alonso', 'pass'=>'987'],

            ];

            

            //var_dump($vec);

            $smaty->assing('datos',$vec);
            $smaty->assing('nombre','otra página');
            $smaty->display('Home.tpl');
        }
    }
?>