@extends('dashboard.layouts.master')
@section('container')


   <div class="container">
      <div class="row">
         <div class="col-lg-10 px-4 py-3">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th scope="col">No.</th>
                     <th scope="col">NIS</th>
                     <th scope="col">Nama</th>
                     <th scope="col">JK</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($students as $student)
                     <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $student->nis }}</td>
                        <td>{{ $student->nama }}</td>
                        <td>{{ $student->jenis_kelamin }}</td>
                     </tr>
                  @endforeach

               </tbody>
            </table>

         </div>
      </div>
   </div>

@endsection
