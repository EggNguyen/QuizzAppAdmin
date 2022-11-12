<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Nguoichoi
 * 
 * @property int $ID
 * @property int $ID_TaiKhoan
 * @property string $Ten
 * @property int $Credit
 * @property string|null $Image
 * @property int $TrangThai
 * 
 * @property Taikhoan $taikhoan
 * @property Collection|Lichsu[] $lichsus
 * @property Collection|Lichsunap[] $lichsunaps
 * @property Collection|Xephang[] $xephangs
 *
 * @package App\Models
 */
class Nguoichoi extends Model
{
	protected $table = 'nguoichoi';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'ID_TaiKhoan' => 'int',
		'Credit' => 'int',
		'TrangThai' => 'int'
	];

	protected $fillable = [
		'ID_TaiKhoan',
		'Ten',
		'Credit',
		'Image',
		'TrangThai'
	];

	public function taikhoan()
	{
		return $this->belongsTo(Taikhoan::class, 'ID_TaiKhoan');
	}

	public function lichsus()
	{
		return $this->hasMany(Lichsu::class, 'ID_NguoiChoi');
	}

	public function lichsunaps()
	{
		return $this->hasMany(Lichsunap::class, 'ID_NguoiChoi');
	}

	public function xephangs()
	{
		return $this->hasMany(Xephang::class, 'ID_NguoiChoi');
	}
}
