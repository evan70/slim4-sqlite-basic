@extends('layouts.app')

@section('content')
    <div class="content">
        <h1>Stratené heslo</h1>
        <div class="form-signin">
            @if(count($errors) > 0)
                @foreach($errors as $error)
                    <div class="alert alert-danger text-center" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <form method="POST" action="/reset-password/{{ $key }}">
                {{ csrf_html($csrf) }}
                <div class="form-floating">
                    <input class="form-control" id="password" type="password" name="password" placeholder="Nové heslo" required />
                    <label for="password">Nové heslo</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="confirm_password" type="password" name="confirm_password" placeholder="Opakuj heslo" required />
                    <label for="confirm_password">Opakuj heslo</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Zrušiť</button>
            </form>
        </div>
    </div>
@endsection
