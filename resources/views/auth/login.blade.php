<x-layout>
    <div class="container">
        @if ($errors->any())
        <div id="error-box" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-md relative mb-4">
            <button id="close-error" class="absolute top-0 right-0 mt-2 mr-2 text-red-600 hover:text-red-900">&times;</button>
            <strong class="font-bold">Oops! </strong>
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST">
          @csrf
          <div>
              <label for="email">Email:</label>
              <input type="email" name="email" required>
          </div>
          <div>
              <label for="password">Password:</label>
              <input type="password" name="password" required>
          </div>
          <div>
              <button type="submit">Login</button>
          </div>
      </form>
      <a href="{{route('register')}}">Register Here</a>
    </div>
</x-layout>