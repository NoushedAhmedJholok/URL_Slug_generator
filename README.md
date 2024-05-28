<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Automatice Slug generator In Laravel 10

### Install 'sluggable' Plugin
### Command
```language
composer require cviebrock/eloquent-sluggable
```
### Post.php ( Model ) Edit or Config 
```language
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable; // call this 

class Post extends Model
{
    use HasFactory;
    //add this line (start)
    use Sluggable;
    public function Sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['title']
            ]
        ];
    }
        //add this line (End)
}
```
### Controller For Insert data 
```language
 function postcreate(Request $request){
        
       $data =new Post;
       $data -> title = $request->title;
       $data -> content = $request->content;
       $data->save();
        return redirect()->back();
    }
```
### Post List 
```language
@foreach ($posts as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
        <td><textarea name="" id="" cols="30" rows="0">{{$item->content}}</textarea></td>
        <td><a class="btn btn-info" href="{{url('/post/single/')}}/{{$item->slug}}">Show Post</a></td>
    </tr>
@endforeach
```
### Route For View Single Post 
```language
Route::get('/post/single/{slug}', [App\Http\Controllers\PostController::class, 'singlepost'])->name('singlepost');
```
### Controller For view Single Post 
```language
function singlepost($slug){
        $single_post = Post::where('slug', $slug)->get();
        return view('single_post', compact('single_post'));
    }
```
## If You want to Bangla Title to English Slug Generator 
### Than Install this plugin 
### Command 
```language
composer require sohibd/laravelslug
```
### and Edit Controller and insert Data / use 
```language
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
// use Sohibd\Laravelslug\Generate; // This bangla Slug Plugin 

class PostController extends Controller
{
    function post(){
        $posts = Post::all();
        return view('post', compact('posts'));
    }
    function postcreate(Request $request){
        
       $data =new Post;
       $data -> title = $request->title;
       $data -> content = $request->content;
       $data -> slug = Generate::Enslug($request->title); // bangla to English URL Slug
       $data->save();
        return redirect()->back();
    }
    function singlepost($slug){
        $single_post = Post::where('slug', $slug)->get();
        return view('single_post', compact('single_post'));
    }
}
```

# Methors 3
### Install Plugin With command 
```language
composer require ridoy/laravel-bangla-slug
```
### Insert Data With This Line 
```language
use Ridoy\Bangla\Slug\Facade\BanglaSlug;

$banglaText = "আমার সোনার বাংলা";
$englishSlug = BanglaSlug::create($banglaText);
$englishSlug = Str::slug($englishText);
```
## Hope this code will be useful for you. 
