<?php

    namespace Wishlist\modele;

    require_once 'vendor/autoload.php';

    use \Illuminate\Database\Eloquent\Model;

    class Item extends Modele{

        protected $table = 'items';
        protected $primaryKey = 'id';
        public $timestamps = false;

        public function Item(){
            return $this->hasMany('\Wishlist\modele\Item', 'item_id')->get();
        }

        public static function recupId(int $id){
            return Item::where('id', '=', $id)->first();
        }
    }
?>
