<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Carbon\Carbon;

class TestController extends Controller
{
  public function index() {
    return view('index');
  }
  public function store() {
    $factory = (new Factory)
      ->withServiceAccount(__DIR__ . "./firebase.json")
      ->withDatabaseUri("https://selfproject-1044e-default-rtdb.asia-southeast1.firebasedatabase.app");
    $database = $factory->createDatabase();
    $database->getReference("notification")->push([
      'status' => true,
      'data' => [
        'message' => 'Order Diambil'
      ]
    ]);
  }
}
