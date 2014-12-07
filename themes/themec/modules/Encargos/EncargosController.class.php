<?php

/**
 * Description of EncargosController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright ALBATRONIC
 * @date 06-nov-2012
 *
 */
class EncargosController extends ControllerProject {

    protected $controller = "Encargos";
    protected $nivel = "";

    public function IndexAction() {
        $this->values['valoresFormulario'] = $this->request;
        $a=$this->values['valoresFormulario'];
        $idEncargo=$a['EncEncargos']['Id'];
//echo "<br> NombreApellidos: ",$a['EncEncargos']['NombreApellidos'],"<br>";
//echo "<br> Id: ",$a['EncEncargos']['Id'],"<br>";
//print_r($a);

if($idEncargo<1){
        $encargo = new EncEncargos();
        //$this->NombreApellidos=$a['EncEncargos']['NombreApellidos'];
        $encargo->setNombreApellidos($a['EncEncargos']['NombreApellidos']);
        $lastId = $encargo->create();

        //echo "<br> Último Id: ",$lastId,"<br>";


        
        $encargo = $this->getEncargoActual($lastId);
        $this->values['valoresFormulario'] = $encargo[0];
        //print_r($this->values['valoresFormulario']);
        unset($encargo);

}        

if($idEncargo>0){
    echo "<br>**** UPDATE ****<br>";

        $encargo = new EncEncargos();
        //$this->NombreApellidos=$a['EncEncargos']['NombreApellidos'];
        $encargo->setNombreApellidos($a['EncEncargos']['NombreApellidos']);
        //$lastId = $encargo->create();

        //echo "<br> Último Id: ",$lastId,"<br>";


        
        $encargo = $this->getEncargoActual($lastId);
        $this->values['valoresFormulario'] = $encargo[0];
        //print_r($this->values['valoresFormulario']);
        unset($encargo);
    
    
}
        
    return parent::IndexAction();
    
    
    }

    
    protected function getEncargoActual($IdEncargo) {

        $array = array();
        $encargo = new EncEncargos($IdEncargo);

        $array[] = array(
                'NombreApellidos' => $encargo->getNombreApellidos(),
                'Id' => $IdEncargo,

                ); 

//print_r($array);
            
        unset($encargo);            
        return $array;
    }
    
    
}

?>
