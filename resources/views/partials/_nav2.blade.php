<nav>
    <div class="nav-logo">
        <img src="{{url('../img/vexely_logo.webp')}}" height="40" width="40" alt="logo">
        <a href="/">VEXELY</a>
    </div>

    <div class="nav-dropdown-container">
        <button class="nav-dropdown-button" id="dropdown-button" aria-label="open dropdown navigation menu" onclick="showDropdown()">
            <svg class="w-6 h-6" aria-hidden="true" fill="black" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
    <div class="nav-menu-container">
        <div class="nav-menu">
            <ul>
                <li><a href="/#features">About us</a></li>
                <li><a href="/#offers">Our offers</a></li>
                <li><a href="/#call-to-action">How it works</a></li>
                <li><a href="/#contact">Contact us</a></li>
                <li><a href="/articles">Resources</a></li>
            </ul>
        </div>

        <div class="nav-cta">
            <a href="https://calendly.com/vexely/introduction-call">                
                <button class="nav-cta-button" data-popover-target="popover-bottom" aria-label="book a call" data-popover-placement="bottom" type="button">Book a call</button>
            </a>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script> 
</nav>

<div class="dropdown close-dropdown" id="dropdown" name="dropdown-button">
    <div class="dropdown-menu">
        <ul>
            <li><a href="/#offers"><button>Our offers</button></a></li>
            <li><a href="/#call-to-action"><button>How it works</button></a></li>
            <li><a href="/#contact"><button>Contact us</button></a></li>
            <li><a href="/#features"><button>About us</button></a></li>
            <li><a href="/articles"><button>Resources</button></a></li>
            <li><a href="https://calendly.com/vexely/introduction-call"><button>Book a call</button></a></ul>
        </ul>
    </div>
</div>