<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TestModel;


class TestController extends Controller
{
    public function index(TestModel $testModel)
    {
        $testModel->test_query();
    }
}
