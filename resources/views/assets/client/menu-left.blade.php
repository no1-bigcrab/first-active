<nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0"
    id="navbar-vertical">
    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
        @foreach ($categories as $category)
                @if (!($category->parent)->isEmpty())
                <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">{{ $category->title }}<i class="fa fa-angle-down float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                            @foreach ($category->parent as $item)
                                <a href="" class="dropdown-item">{{ $item->title }}</a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="" class="nav-item nav-link">{{ $category->title }}</a>
                @endif
        @endforeach
    </div>
</nav>