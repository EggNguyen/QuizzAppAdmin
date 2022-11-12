<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Linhvuc
 * 
 * @property int $ID
 * @property string $Ten
 * @property int $TrangThai
 * 
 * @property Collection|Cauhoi[] $cauhois
 *
 * @package App\Models
 */
class Linhvuc extends Model
{
	protected $table = 'linhvuc';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'TrangThai' => 'int'
	];

	protected $fillable = [
		'Ten',
		'TrangThai'
	];

	public function cauhois()
	{
		return $this->hasMany(Cauhoi::class, 'LinhVuc_ID');
	}
}
