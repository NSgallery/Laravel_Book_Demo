@extends('app')

@section('pagename', 'แก้ไขข้อมูลหนังสือ')

@section('content')
    <div class="mb-4">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
            <div class="alert alert-{{ $msg }}" {{ Session::get('alert-' . $msg) }}>{{ Session::get('alert-' . $msg) }}</div>
        @endif
        @endforeach
    </div>
    <form action="{{ route('submit_edit_book') }}" method="POST">
    @csrf
        <div class="card-body">
            @if ($data1)
                <div class="mb-4">
                    <div class="container">
                        <div class="row mb-2">
                            <div class="col"> 
                                <label>หน้าปก</label>
                                </br>
                                <label><img src="{{ $data1[0]->image_m }}"></label>
                                <input type="hidden" id="image_m" name="image_m[]" value="{{ $data1[0]->image_m }}" />
                                </br>
                      
                                <label>เลขหนังสือ</label>
                                <label>{{ $data1[0]->isbn }}</label>
                                <input type="hidden" id="isbn" name="isbn[]" value="{{ $data1[0]->isbn }}" />
                                </br></br>

                                <input type="file" id="img_book" name="img_book[]">
                                </br></br>

                                <label>ชื่อหนังสือ</label>
                                <input type="text" id="title" name="title[]" value="{{ $data1[0]->title }}">
                                </br>
                      
                                <label>ผู้แต่ง</label>
                                <input type="text" id="author" name="author[]"  value="{{ $data1[0]->author }}">
                                </br>

                                <label>ปีที่พิมพ์</label>
                                <input type="text" id="year" name="year[]"  value="{{ $data1[0]->year }}">
                                </br>

                                <label>ผู้จัดพิมพ์</label>
                                <input type="text" id="publisher" name="publisher[]"  value="{{ $data1[0]->publisher }}">
                                </br></br>

                                <button type="reset" class="btn btn-danger px-2">ยกเลิก</button>
                                <button type="submit" class="btn btn-primary px-2">บันทึก</button>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="mb-4">
                    <p>ไม่พบข้อมูลที่ท่านต้องการ</p>
                </div>
            @endif
        </div>
    </form>
@endsection
