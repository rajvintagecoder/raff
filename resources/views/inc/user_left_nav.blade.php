<div class="col-md-4">
    <div class="sidebar">
        <ul>
        <li><a href="account-details"  id="active">Account Details</a></li>
        <li><a href="{{route('my-tickets')}}" id="nactive">My Tickets</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Sign Out</a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            </li>
        </ul>
    </div>
</div>
