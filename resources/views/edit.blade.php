@extends('layouts.app')
@section('content')
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Student Update form
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('main.update2',$mains['id']) }}">
                    @method('post')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="s_name" value={{ $mains['s_name'] }} />
                    </div>
                    <div class="form-group">
                        <label for="Surname">Surname :</label>
                        <input type="text" class="form-control" name="s_surname" value={{ $mains['s_surname'] }} />
                    </div>
                    <button type="submit" class="btn btn-success ">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection
