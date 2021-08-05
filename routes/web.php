<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');
Route::get('blog/{post}', 'PostsController@show')->name('posts.show');
Route::get('categorias/{category}', 'CategoriesController@show')->name('categories.show');
Route::get('tags/{tag}', 'TagsController@show')->name('tags.show');


Route::get('posts', function(){
    return App\Models\Post::all();
});

Auth::routes();

Route::group([
    'prefix' => 'admin', 
    'namespace' => 'Admin', 
    'middleware' => 'auth'], 
function(){
    //Rutas de administración
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('posts', 'PostsController@index')->name('admin.posts.index');    
    Route::get('/posts/create', 'PostsController@create')->name('admin.posts.create');
    Route::post('/posts/store', 'PostsController@store')->name('admin.posts.store');    
    Route::get('posts/{post}', 'PostsController@edit')->name('admin.posts.edit');
    Route::put('posts/{post}', 'PostsController@update')->name('admin.posts.update');
    Route::post('posts/{post}/photos', 'PhotosController@store')->name('admin.posts.photos.store');
    Route::post('/photos/deletephoto', 'PhotosController@deletephoto');
    Route::delete('/posts/{id}', 'PostsController@delete')->name('admin.posts.delete');

});



/*Route::get('register', function(){
    return redirect('/login');
});

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');