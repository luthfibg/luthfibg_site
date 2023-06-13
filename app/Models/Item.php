<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Item
 * 
 * @property int $id
 * @property string $name
 * @property string $subname
 * @property string $category
 * @property string|null $sub_category
 * @property float $effort_level
 * @property int $percentage
 * @property string $status
 * @property string $description
 * @property Carbon $started_at
 * @property Carbon|null $finished_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Item extends Model
{
	protected $table = 'items';

	protected $dates = [
		'updated_at',
		'created_at',
		'started_at',
	];

	protected $casts = [
		'effort_level' => 'float',
		'percentage' => 'int',
		'started_at' => 'datetime',
		'finished_at' => 'datetime'
	];

	protected $fillable = [
		'name',
		'subname',
		'category',
		'sub_category',
		'effort_level',
		'percentage',
		'status',
		'description',
		'started_at',
		'finished_at'
	];
}