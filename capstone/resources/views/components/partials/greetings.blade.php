    @if(Auth::check())
            @if(Auth::user()->usertype === 'tenant')
                <div class="alert alert-message">
                    <h1>{{_('Hello, Tenant!') }}</h1><br>
                    <h5>{{_('this website is blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablab
                    blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla
                    blablablablablablablablablablablablablablablablablablablablablablablablablablablabla
                    blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla
                    blablablablablablablablablablablablablablablablablablablablablablablablablablablablablalablablablablablabla') }}</h5>
                </div>
            @elseif(Auth::user()->usertype === 'landlord')
                <div class="alert alert-message">
                    <h1>{{_('Hello, Landlord!')}}</h1><br>
                    <h5>{{_('this website is blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablab
                    blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla
                    blablablablablablablablablablablablablablablablablablablablablablablablablablablabla
                    blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla
                    blablablablablablablablablablablablablablablablablablablablablablablablablablablablablalablablablablablabla') }}</h5>
                </div>
            @endif
        @endif

        @guest
        <div class="alert alert-message">
            <h1>{{_('Hello, Guest!') }}</h1><br>
            <h5>{{_('this website is blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablab
            blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla
            blablablablablablablablablablablablablablablablablablablablablablablablablablablabla
            blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla
            blablablablablablablablablablablablablablablablablablablablablablablablablablablablablalablablablablablabla') }}</h5>
        </div>
        @endguest