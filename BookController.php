<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Storage;

class BookController extends Controller
{
    public function get_record() {
        $data1 = DB::table('book_detail')
            ->select('*')
            ->paginate(10);
        return view('details', ['data1'=>$data1]);

    }

    public function del_record(Request $request) {
        // return $request;
        $isbn = $request->isbn;

        $data1 = DB::table('book_detail')
            ->where([
                ['isbn',$isbn]
            ])
            ->delete();

        Session::flash('alert-danger', 'ลบสำเร็จ');
        return back();

    }

    public function edit_record(Request $request) {
        // return $request;
        $isbn = $request->isbn;

        $data1 = DB::table('book_detail')
            ->where([
                ['isbn',$isbn]
            ])
            ->get();
        // return $data1[0]->isbn;

        return view('edit', ['data1'=>$data1]);

    }

    public function submit_edit_book(Request $request) {
        // return $request;
        // return $request->img_book;

        $isbn = $request->isbn;
        $title = $request->title;
        $author = $request->author;
        $year = $request->year;
        $publisher = $request->publisher;
        

        // return $image;

        $request->validate([
            'file' => 'required|mimes:jpeg,JPEG,jpg,png,pdf|max:2048',
        ]);

        $filename = 'new_image.'.$request->img_book->extension();

        // $folder = storage_path('app/public/uploads');
        // $file = $request->file->extension();
        // $request->img_book->move($folder, $filename);

        $request->img_book->storeAs("uploads", $filename);

        return "Finally";

        // $request->img_book->storeAs("uploads", $image);

        // return redirect()->back();

        // return "Uploads Finally";

        // dd($file);
        // $path = Storage::putFile('uploads', $file);

        // if (is_array($file)) {
        //     foreach ($file as $item) {
        //         $item->store('uploads');

        //     }
        // } else {
        //     $file->store('uploads');
        // }

        // $uploads = Storage::disk(name:'public')->put(path:'/', $request->file(key:'file'));

     
        // $data1 = DB::table('book_detail')
        //     ->where([
        //         ['isbn',$isbn]
        //     ])
        //     ->update([
        //         ['isbn' => $isbn],
        //         ['title' => $title],
        //         ['author' => $author],
        //         ['year' => $year],
        //         ['publisher' => $publisher],
        //         ['image_m' => $path],
        //     ]);

        // return "Update Success";

        // return view('edit', ['data1'=>$data1]);

    }


    public function submit_add_book(Request $request) {
        // dd($request);
        // return $request;
        // return $request->isbn[0];
 
        $isbn = $request->isbn[0];
        $title = $request->title[0];
        $author = $request->author[0];
        $year = $request->year[0];
        $publisher = $request->publisher[0];
        $image_m = $request->img_book[0];

        $image_s = null;
        $image_l = null;

        $array1 = [
            'isbn' => $isbn,
            'title' => $title,
            'author' => $author,
            'year' => $year,
            'publisher' => $publisher,
            'image_m' => $image_m,
            'image_s' => $image_s,
            'image_l' => $image_l
        ];

        $data1 = DB::table('book_detail')->insert($array1);

        Session::flash('alert-success', 'เพิ่มสำเร็จ');
        return back();

    }
}
