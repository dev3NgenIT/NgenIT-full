<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{ url('/admin') }}">
                        <img src="assets/backend/images/logo.png" width="100px" alt=""/></a></div>
                <li class="label">Main</li>
                <li><a href="{{ url('/admin') }}" ><i class="ti-home"></i> Dashboard </a>
                </li>

                <li class="label">Apps</li>
                
                <li><a class="sidebar-sub-toggle"><i class="ti-package"></i> Product<span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('products') }}">View</a></li>
                        <li><a href="{{ route('ProductT') }}">Create</a></li>
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-light-bulb"></i> Solution <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('solutions') }}">View</a></li>
                        <li><a href="{{ route('SolutionT') }}">Create</a></li>
                        {{-- <li><a href="/blogs/{blog}/edit">Edit</a></li>
                        <li><a href="{{ route('SolutionT') }}">Delete</a></li> --}}
                    </ul>
                </li>
                
                <li><a class="sidebar-sub-toggle"><i class="ti-agenda"></i> Catagory <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('categories') }}">View</a></li>
                        <li><a href="{{ route('CategoriesT') }}">Create</a></li>
                    </ul>
                </li>
                
                <li><a class="sidebar-sub-toggle"><i class="ti-bookmark-alt"></i> Brand <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('brands') }}">View</a></li>
                        <li><a href="{{ route('BrandsT') }}">Create</a></li>
                    </ul>
                </li>

                <li><a class="sidebar-sub-toggle"><i class="ti-bookmark-alt"></i> Industry <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('industries') }}">View</a></li>
                        <li><a href="{{ route('IndustryT') }}">Create</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>