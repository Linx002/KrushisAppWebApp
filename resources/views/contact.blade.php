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
            <div class="form-group">
                <form class="form-inline">
                @csrf
                    <div class="form-group lg-2">
                        <div class="row flex-row">
                            <div class="col-md-4">
                                <label for="name">Name:</label>
                                <input type="text" id="name" class="text">
                            </div>

                            <div class="col-md-4 flex-row">
                                <label for="nessage">Message</label>
                                <textarea id="message" name="message" class="text area" placeholder="Message" rows="8" aria-label="Write any message in this field"></textarea>
                            </div>
                        </div>
                        <div class="row">

                        </div>
                        {{-- <div class="col-6">
                            <div class="row">
                                <label for="name">Name:</label>
                                <input type="text" id="name" class="text">
                            </div>
                            <div class="row">
                                <label for="email">Email:</label>
                                <input type="email" id="email" class="email">
                            </div>
                            <div class="row">
                                <label for="phone">Phone:</label>
                                <input id="phone" class="text">
                            </div>
                            <div class="row">
                                <label for="reason">Reason:</label>
                                <select id="phone" name="reason">
                                    <option value="0">Suggestions and complaints</option>
                                    <option value="1">Congratulations</option>
                                    <option value="2">General information</option>
                                    <option value="3">Events and special ocassions</option>
                                </select>
                            </div>
                        </div>{{-- col (COLUMNA IZQ)
                        <div class="col">
                            <label for="nessage">Message</label>
                            <textarea id="message" name="message" class="text area" placeholder="Message" rows="8" aria-label="Write any message in this field"></textarea>
                        </div> {{-- col (COLUMNA DERECHA)--}}
                    </div>
                </form>
                <div class="box-footer mt20">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                </div>{{-- form-group --}}
            </div>{{-- card-body --}}
        </div>{{-- card --}}
    </div>{{-- box-body --}}
</div>{{-- box box-info padding-1 --}}
@endsection
