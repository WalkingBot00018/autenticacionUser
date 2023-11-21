@section('content') 
    <body>
        <form action="{{ route('login') }}" method="POST" novalidate>   
            @csrf
            @if (session('mensaje')) 
                <h6>{{ session('mensaje') }}</h6>
            @endif
            <input type="email" name="email" id="" placeholder="Email" value="{{ old('email') }}"> 
            @error('email') 
                <h6>{{ $message }}</h6>
            @enderror
            <input type="password" name="password" id="" placeholder="Password">
            @error('password')

            @error('email')
                <h6>{{ $message }}</h6>
            @enderror