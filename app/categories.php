<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class categories extends Model {
	use ObservantTrait;
	
    protected $table = 'categories';

}
