<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Xephang
 * 
 * @property int $ID
 * @property int $ID_NguoiChoi
 * @property int $ID_LichSu
 * @property Carbon $NgayChoi
 * @property int $TrangThai
 * 
 * @property Lichsu $lichsu
 * @property Nguoichoi $nguoichoi
 *
 * @package App\Models
 */
class Xephang extends Model
{
	protected $table = 'xephang';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'ID_NguoiChoi' => 'int',
		'ID_LichSu' => 'int',
		'TrangThai' => 'int'
	];

	protected $dates = [
		'NgayChoi'
	];

	protected $fillable = [
		'ID_NguoiChoi',
		'ID_LichSu',
		'NgayChoi',
		'TrangThai'
	];

	public function lichsu()
	{
		return $this->belongsTo(Lichsu::class, 'ID_LichSu');
	}

	public function nguoichoi()
	{
		return $this->belongsTo(Nguoichoi::class, 'ID_NguoiChoi');
	}
}
