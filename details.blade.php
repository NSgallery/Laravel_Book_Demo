@extends('app')

@section('pagename', 'Details')

@section('content')
    <div class="mb-4">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
            <div class="alert alert-{{ $msg }}" {{ Session::get('alert-' . $msg) }}>{{ Session::get('alert-' . $msg) }}</div>
        @endif
        @endforeach
    </div>
    <table class="table thead-light table-sm">
        <thead class="table-dark">
            <tr>
                <th>หน้าปก</th>
                <th>เลขหนังสือ</th>
                <th>ชื่อหนังสือ</th>
                <th>ผู้แต่ง</th>
                <th>ปีที่พิมพ์</th>
                <th>ผู้จัดพิมพ์</th>
                <th>ดำเนินการ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data1 as $row)  
            <tr>
                <td><img src="{{ $row->image_m }}"></td>
                <td>{{ $row->isbn }}</td>
                <td>{{ $row->title }}</td>
                <td>{{ $row->author }}</td>
                <td>{{ $row->year }}</td>
                <td>{{ $row->publisher }}</td>

                <td>
                    <a href="{{ route('edit', ['isbn' => $row->isbn]) }}" 
                        class="btn btn-primary" >แก้ไข</a>
                        
                    <a href="{{ route('delete', ['isbn' => $row->isbn]) }}" 
                        class="btn btn-danger" >ลบ</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mb-4 py-4">
        {{ $data1->appends(request()->query())->links('pagination::bootstrap-5') }}
    </div>
@endsection
