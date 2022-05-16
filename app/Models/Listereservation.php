<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Listereservation
 * 
 * @property int $idListeReservation
 * @property int $quantite
 * @property int $idUser
 *
 * @package App\Models
 */
class Listereservation extends Model
{
	protected $table = 'listereservation';
	protected $primaryKey = 'idListeReservation';
	public $timestamps = false;

	protected $casts = [
		'quantite' => 'int',
		'idUser' => 'int'
	];

	protected $fillable = [
		'quantite',
		'idUser'
	];
}
