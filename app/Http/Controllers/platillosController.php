<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

use Auth;


class platillosController extends CrudController{

//     protected $currentAppId;
//    function __construct()
//    {
//      $this->currentAppId = \Auth::guard('panel')
//                                    ->user()
//                                    ->app_id;
//    }
    
    public function all($entity){
        parent::all($entity); 

        $this->filter = \DataFilter::source(new \App\platillos);
			$this->filter->add('name', 'Name', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('title', 'Nombre');
			
			$this->addStylesToGrid();
                 
        return $this->returnView();
    }
    
    public function  edit($entity){

        

 
        $this->edit = \DataEdit::source(new \App\platillos());

			$this->edit->label('Editar platillo');

			$this->edit->add('title', 'Nombre', 'text');
//            $this->edit->add('subtitle', 'Descripción', 'text');
//		    $this->edit->add('price', 'Precio', 'text');
//        
//            $this->edit->add('image', 'Image', 'file')->rule('required');
//        
//			$this->edit->add('qty_available', 'Cantidad disponible', 'text')->rule('required');
//        
//        
//            //$currentuserid = Auth::user()->id;
//             $user = \Auth::guard('panel')->user()->id;
//            $this->edit->add('id_creator','iduser','hidden')->insertValue($user); 
        
        //create product
        
            
        return $this->returnEditView();
    }    
}
