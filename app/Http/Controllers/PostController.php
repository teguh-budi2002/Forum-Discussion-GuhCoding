<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('permission:ban user', ['only' => ['banUser']]);
        $this->middleware('permission:unban user', ['only' => ['unbanUser']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validating = $request->validate([
            'judul' => 'required|max:230',
            'category_id' => 'required',
            'description' => 'required'
        ],
        [
            'category_id.required' => 'Anda Harus Memilih Salah Satu Kategori',
            'judul.required' => 'Judul Pada Postingan Tidak Boleh Kosong',
            'description.required' => 'Deskripsi Tidak Boleh Kosong'
        ]);

        DB::beginTransaction();
        try {
            $post = new Post;
            $post->judul = $request->judul;
            $post->slug = $request->slug;
            $post->description = $request->description;
            $post->user_id = auth()->user()->id;
            $post->save();

            if ($request->has('category_id')) {
                $category = Category::find(explode(',', $request->input('category_id')));
            } else {
                $category = null;
            }

            foreach ($category as $key => $cat) {
                $post->categories()->attach($cat);
            }

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Postingan Gagal Dipublikasi');
        }
        notify()->success('Postingan Sukses Di Publish', 'PUBLISHED POST');
        return redirect()->route('article', ['post' => $post->slug])->with('publish', 'Postingan Sukses Di Update');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Post $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Post $id)
    {
        $validating = $request->validate([
            'judul' => 'required|max:230',
            'slug' => 'required',
            'description' => 'required'
        ]);

        if ($request->user()->cannot('update', $id)) {
            return redirect()->back()->with('error', 'Dilarang Mengedit Postingan Dari User Lain');
        }
        DB::beginTransaction();
        try {
            $post = Post::find($id->id);
            $post->judul = $request->judul;
            $post->slug = $request->slug;
            $post->description = $request->description;
            $post->user_id = auth()->user()->id;
            $post->save();

            if ($request->has('category_id')) {
                $category = Category::find(explode(',', $request->input('category_id')));
            } else {
                $category = null;
            }

            $cats_id = [];
            foreach ($category as $key => $cat) {
                $cats_id[] = $cat->id;
            }
            $post->categories()->sync($cats_id, ['post_id' => true]);

            DB::commit();
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollBack();
            return redirect()->back()->with('error', 'Postingan Gagal Di Update');
        }

        notify()->success('Postingan Sukses Di Update', 'UPDATED POST');

        return redirect()->route('article', ['post' => $post->slug]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function getUserPost(User $user) {
        $post = Post::where('user_id', $user->id)->simplePaginate(6);
        $user = User::where('name', $user->name)->firstOrFail();
        return view('forum.userpost', ['userposts' => $post, 'user' => $user]);
    }

    public function banUser($email) {

        $user =  User::where('email', $email)->first();

        if ($user->isBanned) {
            return redirect()->back()->with('alreadyBan', 'User Sudah Ter-Banned');
            }

        User::where('email', $email)
                ->update([
                    'isActive' => 0,
                    'isBanned' => 1
                ]);

        return redirect()->back()->with('banned', 'User Berhasil Di Banned');
    }

    public function unbanUser($email) {
        $user =  User::where('email', $email)->first();

        if ($user->isActive) {
            return redirect()->back()->with('alreadyUnban', 'User Sudah Berhasil Di Unban');
        }

        User::where('email', $email)
        ->update([
            'isActive' => 1,
            'isBanned' => 0
        ]);

        return redirect()->back()->with('unBanned', 'User Sudah Aktif Kembali');
    }

    public function filterSearch(Request $request) {
        $post = Post::filterSearch(request(['search']))->get();

        return response()->json($post, 200);
    }
}