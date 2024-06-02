<x-guest-layout>
    <x-auth-card>
                <x-slot name="logo">
                        <div class="main-icon">
                            <a href="/">
                                <x-image-logo/>
                            </a>
                        </div>
                    </x-slot>
                    <h1 style="margin-top: -30px">{{_('REGISTER')}}</h1>
                    <div class="header-left-bottom">
                        <form action="{{ route('validate_register') }}" method="post">
                            @csrf
                            <div class="icon1">
                                <x-label for="name" :value="__('Username')" /><x-name/>
                                <x-input type="name" name="name" :value="old('name')" />
                            </div>
                            <div class="icon1">
                                <x-label for="email" :value="__('Email')" /><x-email/>
                                <x-input type="email" name="email" :value="old('email')" />
                            </div>
                            <div class="icon1">
                                <x-label for="password" :value="__('Password')" /><x-password-con-password/>
                                <x-input type="password" name="password" />
                            </div>
                            <div class="icon1">
                                <x-label for="password" :value="__('Confirm Password')" />
                                <x-input type="password" name="password_confirmation" />
                            </div>
                            <div class="icon1">
                                <x-label for="usertype" :value="__('User Type')" />
                                <select name="usertype">
                                    <option value="tenant">{{ __('Tenant') }}</option>
                                    <option value="landlord">{{ __('Landlord') }}</option>
                                </select>
                            </div>
                            <div class="bottom">
                                <button class="btn">{{ __('Register') }}</button>
                            </div>
                            <div class="links">
                                <p><a href="#"></a></p>
                                <p class="right"><a href="{{ route('login') }}">{{ __('New User? Register') }}</a></p>
                                <div class="clear"></div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>