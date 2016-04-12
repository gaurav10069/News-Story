@extends('layouts.app')


@section('content')

 <h1>News</h1>
 
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Title</th>
         <th>Author</th>
         
         <th>date</th>
         
        
         <th colspan="1">Actions</th>
     </tr>
     </thead>
     <tbody>
    @foreach ($newss as $news)
         <tr>
             <td>{{ $news['title'] }}</td>
             <td>{{ $news['author'] }}</td>
             
             <td>{{ $news['date'] }}</td>
             
             <td><a href="{{url('news',$news['guid'])}}" class="btn btn-primary">Read</a></td>
             
           
			 
         </tr>
	 
     @endforeach

     </tbody>

 </table>
@endsection