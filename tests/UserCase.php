<?php

namespace Tests;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


abstract class UserCase extends Model
{
    use CreateApplication;
    use HasFactory;
    public $baseUrl = 'http://localhost';

}
