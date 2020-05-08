
<?php

namespace tdnote\models;

require_once 'vendor/autoload.php';

use \Illuminate\Database\Eloquent\Model;

class Client extends Model{

    protected $table = 'client';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function facture(){
    	return $this->hasMany('\tdnote\models\Facture', 'client_id')->get();
    }

    public static function recupId(int $id){
    	return Client::where('id', '=', $id)->first();
    }
}


?>
