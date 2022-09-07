<header class="d-flex justify-content-between container">
  <div class="img-container">
    <img src="{{ asset('./images/dc-logo.png') }}" alt="dc-logo">

  </div>
  <div>
    
    <ul class="d-flex align-items-center">
      <li>
        @forelse ($links as $link)
      <li 
      @if($link->isActive==true)
      class="active" 
      @endif
      >
        {{$link->name}}
      </li>
      @empty

      <div> "Non è stato trovato il nav" </div>

      @endforelse

      </li>
    </ul>
  </div>
</header>