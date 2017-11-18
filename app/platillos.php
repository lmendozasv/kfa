<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class platillos extends Model {
	use ObservantTrait;
	
    protected $table = 'platillos';

}
