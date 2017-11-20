<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class categoriesController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        


			$this->filter = \DataFilter::source(new \App\Categories);
			$this->filter->add('name', 'Nombre', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('name', 'Name');
			
			$this->addStylesToGrid();

        
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        
	
			$this->edit = \DataEdit::source(new \App\Categories());

			$this->edit->label('Edit Category');

			$this->edit->add('name', 'Nombre', 'text');
            $this->edit->add('wpcode', 'Nombre', 'number');
		



        
       
        return $this->returnEditView();
    }    
}
