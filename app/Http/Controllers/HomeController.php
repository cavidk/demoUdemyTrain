<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */

    public function __invoke(Request $request)
    {

        $posts = Post::with('tags')->get();

        $tag = Tag::first();

//        $post->tags()->attach([2,3,4]);

        return view('home', compact('posts'));



        /*$categories = Category::find(4)->posts;

        return (view('home', compact('categories')));*/

        /*$users = User::all();
        return view('home', compact('users'));*/

        /*$address = Address::all();
        return view('home', compact('address'));*/



        //Eloquent ORM
        //update data with Eloquent

//      $post = Post::find(4);
//
//      $post->description = 'Here is a description for id 4';
//
//      $post->save();
//
//      \dd('des updated');

//        return $post = Post::find(4)->delete();
//
//        \dd('success');

     /*$post = Post::create([
            'title' => 'post 5 tested by mass assignment',
            'description' => 'post 5 is here and tested by mass assignment',
            'views' => 7,
            'status' => 1,
            'publish_date' => date('Y-m-d'),
            'user_id' => 2
        ]);*/

     /*$post = Post::find(5)->update([
         'title' => 'Updated post 5 tested by mass assignment',
         'description' => 'Updated post 5 is here and tested by mass assignment',
         'views' => 3,
         'status' => 1,
         'publish_date' => date('Y-m-d'),
         'user_id' => 2
     ]);*/

          /* $post2 = Post::where('status',1)->update([

            'status' => 4,
        ]);


            \dd('success');*/

//       Post::where('id',12)->delete();
//       \dd('success');

//       return Post::onlyTrashed()->restore();




        /* insert and save data with eloquent

        $post = new Post();

        $post->title = 'post 4';
        $post->description = 'post 4 is here';
        $post->views = 9;
        $post->status = 1;
        $post->publish_date = date('Y-m-d');
        $post->user_id = 2;

        $post->save();

        \dd('success');
*/


//        return Post::where('views' , '>' ,4)->where('id', '=',5)->get();

//             return Post::where('views' , '>' , 3)->orWhere('id', '=',4)->get();


        /*         $posts = Post::all();

                foreach ($posts as $post){
                    echo $post ->title;
                }
        */

//      return  $post = Post::findOrFail(10);


        /*   DB::table('post')->insert([
            [
                'title' => 'This is a test data 1',
               'description' => 'Lorem ipsum dolor sit amet,Dolares edst assumeda totam molestie',
               'status' => 1,
               'publish_date' => date('Y-m-d'),
               'user_id' => 1
           ],
           [
                   'title' => 'This is a test data 2',
                   'description' => ' Second Lorem ipsum dolor sit amet,Dolares edst assumeda totam molestie',
                   'status' => 1,
                   'publish_date' => date('Y-m-d'),
                   'user_id' => 1
           ],
          ]);

           //return data like json inside post table

             $postData = DB::table('post')->get();
             return response()->json($postData);
  */
        // Update Data in database

        /*DB::table('post')->where('id', 53)->update([
            'title' => 'Hey we have updated our data right now,take care',
            'description' => 'Lorem update data',
            'status' => 1,
            'publish_date' => date('Y-m-d'),
            'user_id' => 1

        ]); */

        //Delete Data in database

//        DB::table('post')->delete(52);


//        DB::table('post')->find(7);  just define and search with variable id
//      $blogs = DB::table('post')->pluck('title'); show me the identified idx
//      $blogs = DB::table('post')->where('id', '=' ,10)->get();

//        $blogs = [
//            [
//                'status' => 1
//                'body' => 'This is first body text',
//                'title' => 'Title one',
//            ],
//            [
//                'title' => 'Title two',
//                'body' => 'This is second body text',
//                'status' => 0
//            ],
//            [
//                'title' => 'Title three',
//                'body' => 'This is third body text',
//                'status' => 1
//            ],
//            [
//                'title' => 'Title four',
//                'body' => 'This is four body text',
//                'status' => 0
//            ],
//        ];
//         return view('home', compact('blogs'));

        //Categories table

//        DB::table('categories')->insert([
//                [
//                    'name' => 'News'
//                ],
//                [
//                    'name' => 'Tech'
//                ],
//                [
//                    'name' => 'Education'
//                ]
//            ]
//        );
//
//        dd('success');

    }
}
