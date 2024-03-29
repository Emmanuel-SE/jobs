<x-layout>
    <x-card class="max-w-lg mx-auto mt-24">
 
     <header class="text-center">
         <h2 class="text-2xl font-bold uppercase mb-1">
             Login tyty 3846
             
         </h2>
         <p class="mb-4">Login to your account </p>
     </header>

     <form method="POST" action="/users/authenticate">
         @csrf

         <div class="mb-6">
             <label for="email" class="inline-block text-lg mb-2"
                 >Email</label
             >
             <input
                 type="email"
                 class="border border-gray-200 rounded p-2 w-full"
                 name="email"
                 value="{{old('email')}}"
             />
             @error('email')
                 <p class="text-red-500 text-xm mt1">
                  {{$message}}   
                 </p>
                 @enderror
         </div>

         <div class="mb-6">
             <label
                 for="password"
                 class="inline-block text-lg mb-2"
             >
                 Password
             </label>
             <input
                 type="password"
                 class="border border-gray-200 rounded p-2 w-full"
                 name="password"
                 value="{{old('password')}}"
             />
             @error('password')
                 <p class="text-red-500 text-xm mt1">
                  {{$message}}   
                 </p>
                 @enderror
         </div>
         <div class="form-group mb-3">
            <label for="remember-me">Remember me</label>
            <input type="checkbox" name="remember-me" value="1">
      </div>

         <div class="mb-6">
             <button
                 type="submit"
                 class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
             >
                 Login
             </button>
         </div>

         <div class="flex items-center justify-between mt-6">
             <p>
                 Don't have an account?
                 <a href="/register" class="text-laravel"
                     >register</a
                 >
             </p>
             <p>
                <a href="/auth/forgot-password" class="text-laravel ml-auto"
                >Forgot Password?</a
            >
             </p>
         </div>
     </form>
    </x-card>
 
</x-layout>