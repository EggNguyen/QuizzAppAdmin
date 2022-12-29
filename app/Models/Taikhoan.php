<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
/**
 * Class Taikhoan
 * 
 * @property int $ID
 * @property string $TenTaiKhoan
 * @property string $MatKhau
 * @property int|null $Credit
 * @property string|null $Email
 * @property int $VaiTro
 * @property int $TrangThai
 * @property int $Diem
 * @property string|null $remember_token
 *
 * @package App\Models
 */
class Taikhoan extends Model
{	use HasFactory,Notifiable,HasApiTokens;
	protected $table = 'taikhoan';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'Credit' => 'int',
		'VaiTro' => 'int',
		'TrangThai' => 'int',
		'Diem' => 'int'
	];

	protected $hidden = [
		'remember_token'
	];

	protected $fillable = [
		'TenTaiKhoan',
		'MatKhau',
		'Credit',
		'Email',
		'VaiTro',
		'TrangThai',
		'Diem',
		'remember_token'
	];
}
