<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Lichsu
 * 
 * @property int $ID
 * @property int $ID_NguoiChoi
 * @property int $SoCauDung
 * @property int $TongDiem
 * @property Carbon $NgayChoi
 * @property int $TrangThai
 * 
 * @property Nguoichoi $nguoichoi
 * @property Collection|Xephang[] $xephangs
 *
 * @package App\Models
 */
class Lichsu extends Model
{
	protected $table = 'lichsu';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'ID_NguoiChoi' => 'int',
		'SoCauDung' => 'int',
		'TongDiem' => 'int',
		'TrangThai' => 'int'
	];

	protected $dates = [
		'NgayChoi'
	];

	protected $fillable = [
		'ID_NguoiChoi',
		'SoCauDung',
		'TongDiem',
		'NgayChoi',
		'TrangThai'
	];

	public function nguoichoi()
	{
		return $this->belongsTo(Nguoichoi::class, 'ID_NguoiChoi');
	}

	public function xephangs()
	{
		return $this->hasMany(Xephang::class, 'ID_LichSu');
	}
}
