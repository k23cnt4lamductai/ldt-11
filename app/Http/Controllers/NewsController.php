<?php
namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
class NewsController extends Controller
{
// Chức năng hiển thị tất cả dữ liệu trong bảng news
public function index()
{
$news = News::all();
return view('news.index',['news'=>$news]);
}
}