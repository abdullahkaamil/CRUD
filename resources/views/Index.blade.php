@extends('layouts.app')
@section('content')
    <div class="table-responsive col-md-9 ">
        <br>
        <h2>Student Entry</h2>
        @if(session()->has('msg'))
            <div class="alert alert-success">
                {{ session()->get('msg') }}
            </div>
        @endif
        <form action="{{ route('main.create') }}" method="post">
            @csrf
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col"> Name</th>
                    <th scope="col"> Surname</th>
                    <th>&emsp;</th>
                </tr>
                </thead>
                <tr>
                    <td><input type="text" name="s_name" id="s_name" placeholder="Name"
                               class="form-control  {{ $errors->has('s_name') ? 'is-invalid': '' }}"
                               value="{{ old('s_name') }}">
                        <div class="invalid-feedback">
                            {{  $errors->has('s_name') ? $errors->first('s_name'):''  }}
                        </div>
                    </td>
                    <td>
                        <input type="text" name="s_surname" id="s_surname" placeholder="SurName"
                               class="form-control {{ $errors->has('s_surname') ? 'is-invalid': '' }}"
                               value="{{ old('s_surname') }}">
                        <div class="invalid-feedback">
                            {{  $errors->has('s_surname') ? $errors->first('s_surname'):''  }}
                        </div>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary"> Save</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div class="table-responsive col-md-9 ">
        <h2>Student List</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th scope="col"> Name</th>
                <th scope="col"> Surname</th>
                <th>&emsp;</th>
                <th>&emsp;</th>
            </tr>
            </thead>
            @foreach( $mains as $main)
                <tr>
                    <td> {{  $main->id  }}</td>
                    <td> {{  $main->s_name  }}</td>
                    <td> {{  $main->s_surname  }}</td>
                    <td style="width: 3em">

                        {{--<a href="{{ route('main.update',$main->id) }}" class="btn badge-warning" id="edit"> Edit</a>--}}
                        <button class="btn badge-warning edit" id="Edit" onclick="EditEvent();"> Edit</button>

                    </td>
                    <form method="post" action="{{ route('main.update2',$mains) }}">
                    <td style="width: 3em">
                        <button class="btn badge-pill save" id="Save" onclick="SaveEvents();" type="submit"> SAve</button>
                    </td>
                    </form>
                    <td style="width: 3em">
                        <form action="{{  route('main.destroy',$main->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"> Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $mains->links() }}
    </div>
@endsection
<script>


</script>
