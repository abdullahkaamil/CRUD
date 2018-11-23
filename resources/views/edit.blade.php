@extends('layouts.app')
@section('content')

    <div class="data-table">
        <br>
        <div class="block-title"><strong>Student Update form</strong></div>
        <form class="list-block" method="post" action="{{ route('main.update2',$mains['id']) }}">
            @csrf
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-media"><i class="icon f7-icons">person</i>:</div>
                            <div class="item-input">
                                <input type="text" class="form-control" name="s_name" value={{ $mains['s_name'] }} >
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-media"><i class="icon f7-icons">persons</i>:</div>
                            <div class="item-input">
                                <input type="text" class="form-control" name="s_surname"
                                       value={{ $mains['s_surname'] }}>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <br>

            <div class="buttons-row" style="margin-left: 139px;">
                <div class="center">
                    <button type="submit" class="button button-raised">Update</button>
                </div>
                <div class="center"><a href="{{url ('/index') }}" class="link external button button-raised">Back</a>
                </div>
            </div>
        </form>
    </div>
@endsection
