<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

/**
 * Class Taikhoan
 * 
 * @property int $ID
 * @property string $TenTaiKhoan
 * @property string $MatKhau
 * @property int|null $Sdt
 * @property Carbon $NgayTao
 * @property int $VaiTro
 * @property int $TrangThai
 * 
 * @property Collection|Nguoichoi[] $nguoichois
 *
 * @package App\Models
 */
class Taikhoan extends Model
{
	protected $table = 'taikhoan';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'Sdt' => 'int',
		'VaiTro' => 'int',
		'TrangThai' => 'int'
	];

	protected $dates = [
		'NgayTao'
	];

	protected $fillable = [
		'TenTaiKhoan',
		'MatKhau',
		'Sdt',
		'NgayTao',
		'VaiTro',
		'TrangThai'
	];

	public function nguoichois()
	{
		return $this->hasMany(Nguoichoi::class, 'ID_TaiKhoan');
	}
}
