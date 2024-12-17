<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property int $idclient
 * @property string|null $FirstName
 * @property string|null $LastName
 * @property string|null $gender
 * @property int|null $age
 * @property int|null $idf
 *
 * @package App\Models
 */
class Client extends Model
{
    use HasFactory;
	protected $table = 'client';
	protected $primaryKey = 'idclient';
	public $timestamps = false;

	protected $casts = [
		'age' => 'int',
		'idf' => 'int'
	];

	protected $fillable = [
		'FirstName',
		'LastName',
		'gender',
		'age',
		'idf'
	];

    public function fonction()
    {
        return $this->belongsTo(Fonction::class, 'idf'); 
    }
}
