@if(Auth::check())
    @if(Auth::user()->usertype === 'tenant')
        <div class="alert alert-message">
            <h1>{{_('Hello, Tenant!')}}</h1><br>
            <h5>{{_('Welcome to Homies. If you need any assistance, feel free to reach out.') }}</h5>
        </div>
    @elseif(Auth::user()->usertype === 'landlord')
        <div class="alert alert-message">
            <h1>{{_('Hello, Landlord!')}}</h1><br>
            <h5>{{_('Thank you for managing your property with Homies. Let us know if there’s anything we can do to assist you.') }}</h5>
        </div>
    @endif
@endif

@guest
<div class="alert alert-message">
    <h1>{{_('Hello, Guest!')}}</h1><br>
    <h5>{{_('Welcome to Homies! Explore and discover properties that suit your needs. Feel free to sign up for more benefits.') }}</h5>
</div>
@endguest
