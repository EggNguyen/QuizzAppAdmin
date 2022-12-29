<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cauhoi
 * 
 * @property int $ID
 * @property int $LinhVuc_ID
 * @property string $NoiDung
 * @property string $A
 * @property string $B
 * @property string $C
 * @property string $D
 * @property string $DapAn
 * @property int $Diem
 * @property int $TrangThai
 * 
 * @property Linhvuc $linhvuc
 *
 * @package App\Models
 */
class Cauhoi extends Model
{
	protected $table = 'cauhoi';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'LinhVuc_ID' => 'int',
		'Diem' => 'int',
		'TrangThai' => 'int'
	];

	protected $fillable = [
		'LinhVuc_ID',
		'NoiDung',
		'A',
		'B',
		'C',
		'D',
		'DapAn',
		'Diem',
		'TrangThai'
	];

	public function linhvuc()
	{
		return $this->belongsTo(Linhvuc::class, 'LinhVuc_ID');
	}
}
