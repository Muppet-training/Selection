    
    @if(isset($home))
        <header class="band header home">
            <!-- <a class="logo__text" href="/">Time 4 Paws</a> -->
            <a class=" trigger-menu"><span class="logo__image"></span></a>
            <a class=" trigger-menu"><span class="menu__image"></span></a>
        </header>
    @else
        <header class="band header">
            <!-- <a class="logo__text" href="/">Time 4 Paws</a> -->
            <a class=" trigger-menu"><span class="logo__image"></span></a>
            <a class=" trigger-menu"><span class="menu__image"></span></a>
        </header>
    @endif






    <!--End Band--> 
    <!-- <div class="band navigation">
        <nav class="container primary"> 
            <div id="navigation" class="">
                <ul class="nav--header">
                    <li class="navTab"><a href="/">Home</a>|</li>
                    <li class="divider">{{ ((Auth::guest())? '' : ((Auth::user()->admin == 1)? HTML::link('admin', 'Profile') : HTML::link('profile', 'Profile'))) }}</li>
                    <li class="navTab "><a class="{{((Request::segment(1) === 'collections')? 'navTab_active' : '')}}" href="/collections">Collections</a>|</li>
                    <li class="navTab"><a class=" {{((Request::segment(1) === 'recipes')? 'navTab_active' : '')}}" href="/recipes">Recipes</a>|</li>
                    <li class="navTab"><a class=" {{((Request::segment(1) === 'ingredients')? 'navTab_active' : '')}}" href="/ingredients">Ingredients</a>|</li>
                    <li class="navTab"><a class=" {{((Request::segment(1) === 'events')? 'navTab_active' : '')}}" href="/events">Events</a>|</li>
                    <li class="navTab"><a class="{{((Request::segment(1) === 'catering')? 'navTab_active' : '')}}" href="/catering">Catering</a>|</li>
                </ul>
           	</div>
            
        </nav><!--End Container-->
    <!-- </div>End Band -->
