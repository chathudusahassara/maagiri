<div class="card" style="width: 18rem;">
            <div class="card-header">
                Menu
            </div>
            <ul class="list-group list-group-flush">
                <!-- <li class="list-group-item"><a href="{{ url('easy') }}">Dashboard</a></li> -->
                <li class="list-group-item"><a href="{{ url('easy/contents/all') }}">Page Contents</a></li>
                <!-- <li class="list-group-item"><a href="{{ url('easy/features/all') }}">Page Features</a></li> -->
                <li class="list-group-item"><a href="{{ url('easy/media/all') }}">Media</a></li>
                <li class="list-group-item">
                <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                </li>
            </ul>
            </div>