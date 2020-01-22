<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Client extends Model
{
    protected $table = 'my_сlients';
	protected $primaryKey = 'сlients_id';
	
	/*App::error(function(ModelNotFoundException $e)
	{
		return Response::make('Not Found', 404);
	});*/
}
