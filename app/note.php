<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model {

	protected $table = 'notes';

	protected $fillable = array('title_notes','content');


	public function Users() {
		return $this->belongsTo('Users', 'id_user');

}
}