<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fonction
 *
 * @property int $idfonction
 * @property string|null $Fonction
 *
 * @package App\Models
 */
class Fonction extends Model
{
	protected $table = 'fonction';
	protected $primaryKey = 'idfonction';
	public $timestamps = false;

	protected $fillable = [
		'Fonction'
	];
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
