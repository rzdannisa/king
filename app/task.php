<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model {

	protected $table = 'task';

	protected $fillable = array('title_task','priority','id_task_book','start','finish','content','progress');


	public function Users() {
		return $this->belongsTo('Users', 'id_user');

}
}