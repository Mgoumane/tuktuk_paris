<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Option
 * 
 * @property int $idOption
 * @property string|null $nom
 * @property float|null $prix
 * @property string|null $duree
 * @property string|null $image
 * @property string|null $description
 *
 * @package App\Models
 */
class Option extends Model
{
	protected $table = 'options';
	protected $primaryKey = 'idOption';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idOption' => 'int',
		'prix' => 'float'
	];

	protected $fillable = [
		'nom',
		'prix',
		'duree',
		'image',
		'description'
	];
}
