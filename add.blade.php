@extends('app')

@section('pagename', 'เพิ่มข้อมูลหนังสือ')

@section('content')
    <div class="mb-4">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
            <div class="alert alert-{{ $msg }}" {{ Session::get('alert-' . $msg) }}>{{ Session::get('alert-' . $msg) }}</div>
        @endif
        @endforeach
    </div>
    <form action="{{ route('submit_add_book') }}" method="POST" >
    @csrf
        <div class="card-body">
            <div class="mb-4">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col"> 
                            <label>หน้าปก</label>
                            <input type="file" name="img_book[]">
                            </br>
                    
                            <label>เลขหนังสือ</label>
                            <input type="number" id="isbn" name="isbn[]">
                            </br>

                            <label>ชื่อหนังสือ</label>
                            <input type="text" id="title" name="title[]">
                            </br>
                    
                            <label>ผู้แต่ง</label>
                            <input type="text" id="author" name="author[]">
                            </br>

                            <label>ปีที่พิมพ์</label>
                            <input type="number" id="year" name="year[]">
                            </br>

                            <label>ผู้จัดพิมพ์</label>
                            <input type="text" id="publisher" name="publisher[]">
                            </br>

                            <button type="reset" class="btn btn-danger px-2">ยกเลิก</button>
                            <button type="submit" class="btn btn-primary px-2">บันทึก</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
