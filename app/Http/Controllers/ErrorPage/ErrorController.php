<?php
namespace App\Http\Controllers\ErrorPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
/**
 *
 */
class ErrorController extends Controller
{
  public function notfound()
  {
      return view('errors.404');
  }
  public function fatal()
  {
      return view('errors.500');
  }
}
