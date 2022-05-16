<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservation
 * 
 * @property int $idReservation
 * @property string|null $adresseDepart
 * @property Carbon|null $dateDepart
 * @property string|null $heureDepart
 * @property int $nbPassagers
 * @property int $telephone
 * @property string|null $pays
 * @property string|null $commentaire
 * @property Carbon|null $dateReservation
 * @property int $idOption
 * @property int $idUser
 *
 * @package App\Models
 */
class Reservation extends Model
{
	protected $table = 'reservation';
	protected $primaryKey = 'idReservation';
	public $timestamps = false;

	protected $casts = [
		'nbPassagers' => 'int',
		'telephone' => 'int',
		'idOption' => 'int',
		'idUser' => 'int'
	];

	protected $dates = [
		'dateDepart',
		'dateReservation'
	];

	protected $fillable = [
		'adresseDepart',
		'dateDepart',
		'heureDepart',
		'nbPassagers',
		'telephone',
		'pays',
		'commentaire',
		'dateReservation',
		'idOption',
		'idUser'
	];
}
