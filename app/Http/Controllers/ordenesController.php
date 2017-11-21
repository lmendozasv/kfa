<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;
use Log;
use Illuminate\Http\Request;

class ordenesController extends CrudController{

    public function all($entity){
        parent::all($entity); 

       
         
            
            
            $this->userd = \Auth::guard('panel')->user()->id;        
            
            $this->filter = \DataFilter::source(\App\ordenes::where('id_owner',$this->userd));
        
			$this->filter->add('title', 'Title', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();
			$this->grid = \DataGrid::source($this->filter);
        
        
			$this->grid->add('qty', 'Cantidad');
			$this->grid->add('empresa', 'Empresa - Dirección');
            $this->grid->add('contacto', 'contacto');
            
        
			$this->addStylesToGrid();
        
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
         $this->edit = \DataEdit::source(new \App\ordenes());

			$this->edit->label('Editar orden');

			$this->edit->add('qty', 'Cantidad', 'number');
            $this->edit->add('id_platillo', 'Platillo', 'text');
		    $this->edit->add('empresa', 'Empresa', 'text');
			$this->edit->add('contacto', 'Contacto', 'text')->rule('required');
            $user = \Auth::guard('panel')->user()->id;
            $this->edit->add('id_owner','iduser','hidden')->insertValue($user); 
            
            $task = \App\platillos::find(1)->price;
            //$task->price;
            
            $this->edit->add('total','total','hidden')->insertValue($task); 
            
            $this->edit->add('status_order', 'Estado de orden', 'radiogroup')->option('1', 'Creada')->option('2', 'En proceso')->option('3', 'Despachada')->option('4', 'Entregada');
            //$this->edit->add('id_platillo','Platillo','select')->options(\App\platillos::pluck("title", "id")->all());
            $this->edit->add('id_platillo','Platillo','select')->options(\App\platillos::where("id_creator",$user )->pluck('title','id'));
            //$specialities = Speciality::where('role_id',$request->roleid)->pluck('name','id');
        
        return $this->returnEditView();
    }  
    
    

    
    
    
    
     public function store(Request $request){
    
         
         $bodyContent = $request->getContent();
         
         $location = json_decode($bodyContent);
         $status = $location->status;
         $items =  $location->line_items[0]->name;
         $price =  $location->line_items[0]->price;
         //sku - owner $location->status;
         
         $user = new \App\ordenes();
         $user->qty = 1;
         $user->id_platillo = 1;   
         $user->empresa = 'Ela';
         $user->contacto = 'Elaamn';
         $user->total = $price;   
         $user->status_order = 1;   
         $user->id_owner = 1;   
         $user->save();
         
         Log::error('Estado de orden: '.$items);
         
         return "ok";
    }
    
//    public function foo(Request $request){
//    $bodyContent = $request->getContent();
//}
    


    public function show($id)
    {
        return Project::findOrFail($id);
    }


    public function update($projectId)
    {
        Project::findOrFail($projectId)->update(Input::all());
    }


    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
    }
    
    
    
}
