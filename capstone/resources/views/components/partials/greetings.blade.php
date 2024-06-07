@if(Auth::guard('admin')->check())
    <div class="alert alert-message">
        <h1>{{ __('Hello, Admin!') }}</h1>
        <h5>{{ __('This website is for administrators.') }}</h5>
    </div>
@elseif(Auth::check())
    @if(Auth::user()->usertype === 'tenant')
        <div class="alert alert-message">
            <h1>{{ __('Hello, Tenant!') }}</h1>
            <h5>{{ __('This website is for tenants.') }}</h5>
        </div>
    @elseif(Auth::user()->usertype === 'landlord')
        <div class="alert alert-message">
            <h1>{{ __('Hello, Landlord!') }}</h1>
            <h5>{{ __('This website is for landlords.') }}</h5>
        </div>
    @endif
@else
    <div class="alert alert-message">
        <h1>{{ __('Hello, Guest!') }}</h1>
        <h5>{{ __('This website is for all users.') }}</h5>
    </div>
@endguest
