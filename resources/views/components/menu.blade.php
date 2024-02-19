<nav class="nav flex-column">




    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
   
    @foreach ($list as $item)
    <a href="#" class="nav-link {{ $isActive($item['label']) ? 'active' : '' }}">
        {{ $item['label'] }} </a>
    
    @endforeach

</nav>