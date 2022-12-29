<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Lichsu
 * 
 * @property int $ID
 * @property int $ID_TaiKhoan
 * @property int $SoCauDung
 * @property int $TongDiem
 * @property Carbon $NgayChoi
 * @property int $TrangThai
 *
 * @package App\Models
 */
class Lichsu extends Model
{
	protected $table = 'lichsu';
	protected $primaryKey = 'ID';

	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_TaiKhoan' => 'int',
		'SoCauDung' => 'int',
		'TongDiem' => 'int',
		'TrangThai' => 'int',
		'NgayChoi' => 'date'

	];

	protected $dates = [
		'NgayChoi'
	];

	protected $fillable = [
		'ID',
		'ID_TaiKhoan',
		'SoCauDung',
		'TongDiem',
		'NgayChoi',
		'TrangThai'
	];
}
