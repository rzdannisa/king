<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class task_book extends Model {

	protected $table = 'task_book';

	protected $fillable = array('title_task_book','priority','start','finish','content');


	public function Users() {
		return $this->belongsTo('Users', 'id_user');
	}
}
