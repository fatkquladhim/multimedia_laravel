@php
    Auth::logout();
    return redirect()->route('login');
@endphp
