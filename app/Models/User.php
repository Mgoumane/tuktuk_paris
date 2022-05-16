<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $idUser
 * @property string|null $nom
 * @property string|null $mdp
 * @property Carbon|null $dateCreation
 * @property Carbon|null $dateModif
 * @property string|null $photo
 * @property string|null $role
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'user';
	protected $primaryKey = 'idUser';
	public $timestamps = false;

	protected $dates = [
		'dateCreation',
		'dateModif'
	];

	protected $fillable = [
		'nom',
		'mdp',
		'dateCreation',
		'dateModif',
		'photo',
		'role'
	];
}
