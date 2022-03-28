<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <b>
                <h3>

                    FunOlympic

                </h3>
            </b>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full bg-light" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('Country') }}" />
                <x-jet-input id="name" class="block mt-1 w-full bg-light" type="text" name="country"
                    :value="old('country')" required />

            </div>

            <div>
                <x-jet-label for="name" value="{{ __('Date of birth') }}" />
                <x-jet-input id="name" class="block mt-1 w-full bg-light" type="date" name="date of birth"
                    :value="old('country')" required />


            </div>
            <div>
                <x-jet-label for="name" value="{{ __('Gender') }}" />

            </div>
            <div class="fblock mt-1 w-full bg-light text-dark">
                <select class="form-select block mt-1 w-full bg-light text-dark" style="text-align:left"
                    id="floatingSelect">
                    <option selected>Male</option>
                    <option value="1">Female</option>

                </select>

            </div>

            {{-- <div class="dropdown mt-1">
                <a class="btn btn-light dropdown-toggle block mt-1 w-full bg-light text-dark" style="text-align:left" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                 Select
                </a>
              
              
                  <li><a class="dropdown-item block mt-1 w-full bg-light" href="#">Male</a></li>
                  <li><a class="dropdown-item block mt-1 w-full bg-light" href="#">Female</a></li>
                  
                </ul>
              </div> --}}


            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full bg-light" type="email" name="email"
                    :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full bg-light" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full bg-light" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
