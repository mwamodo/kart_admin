<form class="space-y-6" wire:submit.prevent="login">
    @csrf
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">
            Email address
        </label>
        <div class="mt-1">
            <input id="email" wire:model="email" name="email" type="email" autocomplete="email" value="{{old('email')}}" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
            @if ($errors->has('email'))
                <p class="invalid-feedback" role="alert">
                    <strong class="text-xs text-red my-2 text-red-500">{{ $errors->first('email') }}</strong>
                </p>
            @endif
        </div>
    </div>

    <div>
        <label for="password" class="block text-sm font-medium text-gray-700">
            Password
        </label>
        <div class="mt-1">
            <input id="password" wire:model="password" name="password" type="password" autocomplete="current-password" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
            @if ($errors->has('password'))
                <p class="invalid-feedback" role="alert">
                    <strong class="text-xs text-red my-2 text-red-500">{{ $errors->first('password') }}</strong>
                </p>
            @endif
        </div>
    </div>

    <div class="flex items-center justify-between">
        <div class="flex items-center">
            <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-gray-600 focus:ring-gray-500 border-gray-300 rounded">
            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                Remember me
            </label>
        </div>

        <div class="text-sm">
            <a href="{{ route('forget-password') }}" class="underline font-medium text-gray-700 hover:text-gray-800">
                Forgot your password?
            </a>
        </div>
    </div>

    <div>
        <x-button class="w-full justify-center">
            Login
        </x-button>
    </div>
</form>