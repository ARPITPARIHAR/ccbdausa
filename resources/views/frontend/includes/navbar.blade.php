
<header class="header">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="main_head" id="myHeader">
					<div class="row align-items-center">
						<div class="col-lg-12 no_padding">
							<div class="logo">

                                    <a href="{{ route('home') }}"><img src="{{businessSetting(1)->header_logo}}" alt="logo"></a>


							</div>
						</div>
						<div class="col-lg-12 no_padding">
                            <div class="menus">
                                <nav class="navbar navbar-expand-lg navbar-light">
                                    <button class="navbar-toggler" type="button" onclick="sdbr_open()">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="mySidebar">
                                        <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                                            <button onclick="sdbr_close()" class="close">&times;</button>

                                            <!-- Dynamic Categories -->
                                            @foreach (\App\Models\Category::with('subcategories')->get() as $category)
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link @if($category->subcategories->count() > 0) dropdown-toggle @endif" href="#"
                                                       id="navbarDropdown{{ $category->id }}"
                                                       role="button"
                                                       data-bs-toggle="dropdown"
                                                       aria-expanded="false">
                                                        {{ $category->name }}
                                                    </a>

                                                    <!-- Dynamic Subcategories -->
                                                    @if ($category->subcategories->count() > 0)
                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown{{ $category->id }}">
                                                            @foreach ($category->subcategories as $subcategory)
                                                                <li><a class="dropdown-item" href="#">{{ $subcategory->name }}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>


</header>

<style>
/* Submenu visibility */
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu:hover > .dropdown-menu {
  display: block;
  position: absolute;
  top: 0;
  left: 100%;
}

.dropdown-menu {
  display: none;
  position: absolute;
  top: 0;
  left: 100%;
}
</style>
