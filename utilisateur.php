<?php

/**
 * Modélisation d'un client
 */
class Utilisateur extends Model {

    protected $table = 'client';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function factures() : Object {
        return $this->hasMany('\factcli\models\Facture', 'client_id')->get();
    }

    public static function getId(int $id) : Client {
        return Utilisateur::where('id', '=', $id)->first();
    }

}
?>
