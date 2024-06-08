<x-guest-layout>
    <x-auth-card>
                <x-slot name="logo">
                        <div class="main-icon">
                            <a href="/">
                                <x-image-logo/>
                            </a>
                        </div>
                    </x-slot>
                    <x-partials.message/>
                    <h1 style="margin-top: -30px">{{_('ADMIN')}}</h1>
                    <div class="header-left-bottom">
                        <form action="{{ route('admin_validate') }}" method="post">
                            @csrf
                            <div class="icon1">
                                <x-label for="email" :value="__('Email')" /><x-email/>
                                <x-input type="email" name="email" />
                            </div>
                            <div class="icon1">
                                <x-label for="password" :value="__('Password')" /><x-password-con-password/>
                                <x-input type="password" name="password" />
                            </div>
                            <div class="login-check">
                                <label class="checkbox  ">
                                    <input type="checkbox" name="checkbox" checked="">
                                    <i></i>{{ __('Remember me') }}
                                </label>
                            </div>
                            <div class="bottom">
                                <button class="btn">{{ __('Log in') }}</button>
                            </div>
                            <div class="links">
                                <p><a href="#">{{ __('Forgot password?') }}</a></p>
                                <div class="clear"></div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>