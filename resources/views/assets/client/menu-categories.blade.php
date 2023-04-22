@foreach ($childs as $category)
                    <div class="nav-item">
                        <a href="#" class="nav-link" data-toggle="">
                            {{ $category->title }}
                           @if(!($category->parent)->isEmpty())
                            <i class="fa fa-angle-down float-right mt-1"></i>
                           @endif
                        </a>
                        @if (!($category->parent)->isEmpty())
                            @include('.assets.client.menu-categories', ['childs' => $category->parent])
                        @endif
                    </div>
        @endforeach