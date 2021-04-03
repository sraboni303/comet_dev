<!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li>
                        <a href="{{ route('dashboard.admin') }}"><i class="fe fe-home"></i> <span> Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{ route('create.posts') }}"> <i class="fe fe-document"></i> <span> Create Post</a>
                    </li>
                    <li>
                        <a href="{{ route('index.posts') }}"> <i class="fe fe-document"></i> <span> Posts List</a>
                    </li>
                    <li>
                        <a href="{{ route('trashes.posts') }}"> <i class="fe fe-document"></i> <span> Trashes</a>
                    </li>
                    <li>
                        <a href="{{ route('index.category') }}"><i class="fe fe-document"></i> <span> Categories </a>
                    </li>
                    <li><a href="{{ route('index.tag') }}"><i class="fe fe-document"></i> <span>  Tags </a></li>

                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->

