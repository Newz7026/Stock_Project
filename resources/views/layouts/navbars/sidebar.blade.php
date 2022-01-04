<div class="sidebar" data-color="purple" data-background-color="white"
    data-image="{{ asset('material') }}/img/sidebar-3.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="{{ url('/home') }}" class="simple-text logo-normal">
            {{ __('Stock Product') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            {{-- <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li> --}}
            <li class="nav-item{{ $activePage == 'new-product' ? ' active' : '' }}">
                <a class="nav-link" href="{{ url('product/add') }}">
                    <i class="material-icons">playlist_add</i>
                    <p>{{ __('New Product') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'product' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('product') }}">
                    <i class="material-icons">source</i>
                    <p>{{ __('Inventory') }}</p>
                </a>
            </li>

            <li class="nav-item{{ $activePage == 'inventory' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('inventory') }}">
                    <i class="material-icons">history</i>
                    <p>{{ __('Inventory History') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'claim' ? ' active' : '' }}">
                <a class="nav-link" href="{{ url('claim') }}">
                    <i class="material-icons">auto_delete</i>
                    <p>{{ __('Claim') }}</p>
                    {{-- หน้าเคลมสินค้า --}}
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'returned' ? ' active' : '' }}">
                <a class="nav-link" href="{{ url('returned') }}">
                    <i class="material-icons">rotate_90_degrees_ccw</i>
                    <p>{{ __('Returned') }}</p>
                    {{-- หน้าสินค้าคีกลับ --}}
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'product-type' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('type-product') }}">
                    <i class="material-icons">format_list_bulleted</i>
                    <p>{{ __('Type Product') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'out-of-unit' ? ' active' : '' }}">
                <a class="nav-link" href="{{ url('out_of_unit') }}">
                    <i class="material-icons">grid_off</i>
                    <p>{{ __('Out of Stock ') }}</p>
                    {{-- หน้าสินค้าหมด --}}
                </a>
            </li>
        </ul>

    </div>
</div>
