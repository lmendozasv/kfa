<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;
use Illuminate\Http\Request;
use App\Helpers\CrudControllerHelper;
use Auth;



class platillosController extends CrudController{

    protected $userd;
    
	
    
     public function all($entity){
        
         
            parent::all($entity); 
            
            
            $this->userd = \Auth::guard('panel')->user()->id;        
            
            $this->filter = \DataFilter::source(\App\platillos::where('id_creator',$this->userd));
        
         
			//$this->filter = \DataFilter::source(new \App\platillos);             
			$this->filter->add('title', 'Title', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();
			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('title', 'Nombre');
			$this->grid->add('status', 'Disponible');
			$this->addStylesToGrid();

        
         
         
                 
        return $this->returnView();
    }
    
    public function  edit($entity){

        

 
        $this->edit = \DataEdit::source(new \App\platillos());

			$this->edit->label('Editar platillo');

			$this->edit->add('title', 'Nombre de platillo', 'text');
            $this->edit->add('subtitle', 'Descripción', 'text');
		    $this->edit->add('price', 'Precio', 'text');
        
            $this->edit->add('image', 'Imagen de referencia', 'file')->rule('required');
        
			$this->edit->add('qty_available', 'Cantidad disponible', 'text')->rule('required');
        
        
            //$currentuserid = Auth::user()->id;
             $user = \Auth::guard('panel')->user()->id;
            $this->edit->add('id_creator','iduser','hidden')->insertValue($user); 
            $this->edit->add('status', 'Estado', 'radiogroup')->option('Si', 'Disponible')->option('No', 'No Disponible');
            //$this->edit->add('categories.name', 'Tipo de comida', 'tags'); 
            
        $this->edit->add('category_id','Tipo de comida','select')->options(\App\categories::pluck("name", "wpcode")->all());
        
        
            //$this->edit->add('categories.name', 'Categories', 'tags'); 
        //create product
        
            
        return $this->returnEditView();
    }    
}
