<div class="page-container">
    <div class="page-content">
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">
                @include('component.container.user.user')
                @include('component.container.navigation.navigation')
            </div>
        </div>
        <div class="content-wrapper">
            {{--@include('contents.setting')--}}
            <div class="content">
                @include('component.container.content.headline')
            </div>
        </div>
    </div>
</div>