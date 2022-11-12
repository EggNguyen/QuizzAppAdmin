<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Lichsunap
 * 
 * @property int $ID
 * @property int $ID_NguoiChoi
 * @property int $ID_GoiNap
 * @property Carbon $ThoiGian
 * @property int $TrangThai
 * 
 * @property Goinap $goinap
 * @property Nguoichoi $nguoichoi
 *
 * @package App\Models
 */
class Lichsunap extends Model
{
	protected $table = 'lichsunap';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'ID_NguoiChoi' => 'int',
		'ID_GoiNap' => 'int',
		'TrangThai' => 'int'
	];

	protected $dates = [
		'ThoiGian'
	];

	protected $fillable = [
		'ID_NguoiChoi',
		'ID_GoiNap',
		'ThoiGian',
		'TrangThai'
	];

	public function goinap()
	{
		return $this->belongsTo(Goinap::class, 'ID_GoiNap');
	}

	public function nguoichoi()
	{
		return $this->belongsTo(Nguoichoi::class, 'ID_NguoiChoi');
	}
}
