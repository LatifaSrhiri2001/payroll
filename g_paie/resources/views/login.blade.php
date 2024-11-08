
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
  <title>Login admin</title>
</head>
<body>
  <div class="max-w-md w-10 mx-auto mt-10">
    <h2 class="text-2xl font-semibold text-center mb-6">Admin Login</h2>
    
    {{-- Error Alert --}}
    @if ($errors->any())
        <x-mary-alert 
            class="bg-red-200" 
            title="Login Error" 
            description="Please correct the errors below." 
            icon="o-exclamation-triangle" 
            dismissible 
        />
    @endif
    
    {{-- Login Form --}}
    <form action="{{ route('admin.login') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md dark:bg-gray-800">
        @csrf
        
        {{-- Email Input --}}
        <x-mary-input 
            label="Email" 
            placeholder="Enter your email" 
           
            type="email"
            name="email"
            :value="old('email')" 
            required 
        />
        {{-- Display Email Error --}}
        @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
        
        {{-- Password Input with Toggle --}}
        <x-mary-input 
        label="Password" 
        placeholder="Enter your password" 
       
        type="password"
        name="password"
      
        required 
    />

        {{-- Display Password Error --}}
        @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        {{-- Submit Button --}}
        <button type="submit" class="w-full mt-4">
            Login
        </button>
    </form>
</div>
</body>
</html>