<div class="col-md-4">
    <div class="sidebar">
        <ul>
            <li><a href="#">Account Details</a></li>
            <li><a href="#" class="green">My Tickets</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Sign Out</a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            </li>
        </ul>
    </div>
</div>
