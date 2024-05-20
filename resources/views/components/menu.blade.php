<menu type="toolbar">
    <div id="main-menu">
        <ul id="submain-menu">
            <li><a href="/"  wire:navigate.hover>ツ</a></li>
            <li><a href="{{route('basic-information')}}"
                   :active='request()->routeIs("basic-information")'
                   wire:navigate.hover>Basic Information</a></li>
            <li><a href="{{route('studys')}}"
                :active='request()->routeIs("studys")'
                wire:navigate.hover>Studys</a></li>
            <li><a href="{{route('games')}}"
                :active='request()->routeIs("games")'
                wire:navigate.hover>Games</a></li>
        </ul>
    </div>
</menu>
