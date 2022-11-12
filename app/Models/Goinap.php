<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Goinap
 * 
 * @property int $ID
 * @property int $KimCuong
 * @property string $MenhGia
 * @property int $TrangThai
 * 
 * @property Collection|Lichsunap[] $lichsunaps
 *
 * @package App\Models
 */
class Goinap extends Model
{
	protected $table = 'goinap';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'KimCuong' => 'int',
		'TrangThai' => 'int'
	];

	protected $fillable = [
		'KimCuong',
		'MenhGia',
		'TrangThai'
	];

	public function lichsunaps()
	{
		return $this->hasMany(Lichsunap::class, 'ID_GoiNap');
	}
}
