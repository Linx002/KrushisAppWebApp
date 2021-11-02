@extends('layouts.app')
@section('content')
<div class="box box-info padding-1">
    <div class="box-body">
    {{-- <h1> Ta vacio </h1> --}}
    <div class="card">
        <div class="card-header">
            Contact Form
        </div>
        <div class="card-body">
            <div class="form-group col-md-12">
                <form class="form-inline">
                @csrf
                    <div class="col-md-6">
                        <div class="row mb-3">
                            {{-- <label class="form-label" for="name" style="padding-left: 25px">Name:</label> --}}
                            <input type="text" id="name" class="form-control" style="width:100%" placeholder="Name">
                        </div>
                        <div class="row mb-3">
                            {{-- <label class="form-label" for="email" style="padding-left: 25px">Email:</label> --}}
                            <input type="email" id="email" class="form-control" style="width:100%" placeholder="E-mail">
                        </div>
                        <div class="row mb-3">
                            {{-- <label class="form-label" for="phone" style="padding-left: 25px">Phone:</label> --}}
                            <input id="phone" class="form-control" style="width:100%" placeholder="Phone">
                        </div>
                        <div class="row mb-3">
                            {{-- <label class="form-label" for="reason" style="padding-left: 25px">Reason:</label> --}}
                            <select id="phone" name="reason" style="width: 100%">
                                <option disabled>Reason of contact:</option>
                                <option value="0">Suggestions and complaints</option>
                                <option value="1">Congratulations</option>
                                <option value="2">General information</option>
                                <option value="3">Events and special ocassions</option>
                            </select>
                        </div>
                    </div>{{-- col (COLUMNA IZQ)--}}
                    <div class="col-md-6" style="vertical-align: middle">
                        {{-- <label class="form-label" for="message" style="margin-bottom: 1em">Message:</label> --}}
                        <textarea id="message" name="message" class="form-control" placeholder="Message" rows="8" style="margin-left:1em; vertical-align:bottom; width:100%" aria-label="Write any message in this field"></textarea>
                    </div> {{-- col (COLUMNA DERECHA)--}}
                </div>
            </form>
            <div class="box-footer mt20">
                        <a href="/"><button type="submit" class="btn btn-primary">Send</button></a>
                    </div>
                </div>{{-- form-group --}}
            </div>{{-- card-body --}}
        </div>{{-- card --}}
    </div>{{-- box-body --}}
</div>{{-- box box-info padding-1 --}}
@endsection
