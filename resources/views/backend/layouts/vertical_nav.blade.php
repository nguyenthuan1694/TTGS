<nav class="hk-nav hk-nav-light">
    <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
    <div class="nicescroll-bar">
        <div class="navbar-nav-wrap">
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.home') }}">
                        <i class="ion ion-md-analytics"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#categories_drp">
                        <i class="icon" data-icon="`"></i>
                        <span class="nav-link-text">Categories</span>
                    </a>
                    <ul id="categories_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('categories.index') }}">Listing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('categories.create') }}">Create</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#products_drp">
                        <i class="icon" data-icon="p"></i>
                        <span class="nav-link-text">Products</span>
                    </a>
                    <ul id="products_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('products.index') }}">Listing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('products.create') }}">Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('product.trashed') }}">Trashed</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#order_drp">
                        <i class="icon" data-icon="+"></i>
                        <span class="nav-link-text ml-5">Orders</span>
                    </a>
                    <ul id="order_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('orders.index') }}">Listing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('order.trashed') }}">Trashed</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#cmt_drp">
                        <i class="icon" data-icon="7"></i>
                        <span class="nav-link-text ml-5">Commnets</span>
                    </a>
                    <ul id="cmt_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('comments.index') }}">Listing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('comment.trashed') }}">Trashed</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#news_drp">
                        <i class="icon" data-icon="7"></i>
                        <span class="nav-link-text ml-5">Introduce</span>
                    </a>
                    <ul id="news_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('introduces.index') }}">Listing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('introduce.trashed') }}">Trashed</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#note_drp">
                        <i class="icon" data-icon="b"></i>
                        <span class="nav-link-text ml-5">Setting Detail</span>
                    </a>
                    <ul id="note_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('parentsNotes.index') }}">Parent Note</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#customer_drp">
                        <i class="icon" data-icon="+"></i>
                        <span class="nav-link-text ml-5">Customers</span>
                    </a>
                    <ul id="customer_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('customers.index') }}">Listing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('customer.trashed') }}">Trashed</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </div>
</nav>
<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
