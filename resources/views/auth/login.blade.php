@extends('layouts.app')

@section('content')
    <div class="content">
        <h1>Autorizácia</h1>
        <div class="form-signin">
            @if(count($errors) > 0)
                @foreach($errors as $error)
                    <div class="alert alert-danger text-center" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <form method="POST" action="/login">
                {{ csrf_html($csrf) }}
                <div class="form-floating">
                    <input class="form-control" id="email" type="email" name="email" placeholder="Email" required />
                    <label for="email">Email</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="password" type="password" name="password" placeholder="Heslo" required />
                    <label for="password">Heslo</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember_me" value="1" id="remember_me">
                    <label class="form-check-label" for="remember_me">
                        Zapamätať si ma
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Vstúpte prosím</button>
                <div class="text-center mt-2">
                    <a href="/reset-password">Zabudnuté heslo?</a>
                </div>
            </form>
        </div>
    </div>
@endsection
