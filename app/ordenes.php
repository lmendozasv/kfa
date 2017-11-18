<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class ordenes extends Model {
	use ObservantTrait;
	
    protected $table = 'ordenes';

}
