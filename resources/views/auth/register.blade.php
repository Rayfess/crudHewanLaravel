<x-layout>
  <h1>Register</h1>
  <form action="{{ route('register') }}" method="POST">
      @csrf
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required>
      <br>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required>
      <br>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" required>
      <br>
      <label for="password_confirmation">Confirm Password:</label>
      <input type="password" name="password_confirmation" id="password_confirmation" required>
      <br>
      <button type="submit">Register</button>
  </form>
  <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
</x-layout>