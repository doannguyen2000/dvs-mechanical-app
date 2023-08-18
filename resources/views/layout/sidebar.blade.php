<div class="list-group">
    <a href="{{ route('home') }}"
        class="@if (Route::currentRouteName() === 'home') active @endif list-group-item list-group-item-action list-group-item-primary"><i
            class="fa-solid fa-house me-1"></i><span>{{ __('Trang chính') }}</span></a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary"><i
            class="fa-solid fa-users-gear me-1"></i><span>{{ __('Tài khoản') }}</span></a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary"><i
            class="fa-solid fa-list-check me-1"></i><span>{{ __('Công việc') }}</span></a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary"><i
            class="fa-solid fa-warehouse me-1"></i><span>{{ __('Kho chứa') }}</span></a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary"><i
            class="fa-solid fa-kitchen-set me-1"></i><span>{{ __('Thiết bị') }}</span></a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary"><i
            class="fa-solid fa-cubes me-1"></i><span>{{ __('vật liệu') }}</span></a>
</div>
