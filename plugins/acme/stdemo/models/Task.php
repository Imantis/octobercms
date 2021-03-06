<?php namespace Acme\StDemo\Models;

use Model;

/**
 * Task Model
 */
class Task extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'acme_stdemo_tasks';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
