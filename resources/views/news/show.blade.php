@extends('layouts.app')
@section('content')
   

    <form class="form-horizontal">
     <table class="table table-striped table-bordered table-hover">  
		<tbody>
        <div class="form-group">
			<tr><td>
            <label for="title" class="col-sm-2 control-label">Title</label></td>
            <div class="col-sm-10">
                <td><span for="title" >{{ $news['title'] }}</span></td></tr>
            </div>
        </div>
		
        <div class="form-group">
			<tr><td>
            <label for="author" class="col-sm-2 control-label">Author</label></td>
            <div class="col-sm-10">
                 <td><span for="title" >{{ $news['author'] }}</span></td></tr>
            </div>
        </div>
        <div class="form-group">
            <tr><td>
			<label for="date" class="col-sm-2 control-label">Date</label></td>
            <div class="col-sm-10">
                 <td><span for="title" >{{ $news['date'] }}</span></td></tr>
            </div>
        </div>
		<div class="form-group">
			<tr><td>
            <label for="body" class="col-sm-2 control-label">Contents</label></td>
            <td>
				<div class="col-sm-10">
                 <span for="title" ><?php echo $news['body']; ?></span>
            </div></td></tr>
        </div>
		</tbody>
		</table>
        <div class="form-group">
            <div class="col-sm-10">
                <a href="{{ url('news')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
@stop