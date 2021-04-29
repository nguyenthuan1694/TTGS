<link rel="stylesheet" href="{{ asset('frontend/css/header.css') }}">
<header class="header">
    <div class="container">
        <nav class="header-menu" style="display: flex;align-items: center;justify-content: flex-end;float: left">
            <div class="main-menu">
                <input class="menu-btn" type="checkbox" id="menu-btn" />
                <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                <div class="">
                    <ul class="ul-menu">
                        <li class="menu-li">
                            <a href="/" class="a-li">Trang chủ</a>
                        </li>
                    @foreach($categories as $category)
                        @if(count($category->children) > 0)
                        <li class="has-child menu-li">
                            <a href="#" class="a-li">{{ $category->name }}</a>
                            <ul class="sub-ul-menu">
                                @include('frontend.includes.categories_top_menu', ['categories' => $category->children])
                            </ul>
                        </li>
                        @else
                        <li class="menu-li">
                            <a href="{{ route('category', ['slug' => $category->slug]) }}" class="a-li">{{ $category->name }}</a>
                        </li>
                        @endif
                    @endforeach
                    </ul>
                </div>
            </div>
        </nav>
        <div class="px-2" id="content-dash-id" style="display: none;" >
        </div>
    </div>
</header>