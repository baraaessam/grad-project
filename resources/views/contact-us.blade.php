@extends('index')
@section('content')
    <h1>Contact Us</h1>
    <form action="{{route('saveContactUs')}}" method="post">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="name">First Name</label>
            <div class="input-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="First Name" required>
                <div class="invalid-feedback" style="width: 100%;">
                    Your first name is required.
                </div>
            </div>
            <label for="email">Email</label>
            <div class="input-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                <div class="invalid-feedback" style="width: 100%;">
                    Your email is required.
                </div>
            </div>
            <label for="message">Email</label>
            <div class="input-group">
                <textarea type="text" class="form-control" id="message" name="message" placeholder="message" required></textarea>
                <div class="invalid-feedback" style="width: 100%;">
                    Your message is required.
                </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">SEND</button>
        </div>
    </form>
@endsection