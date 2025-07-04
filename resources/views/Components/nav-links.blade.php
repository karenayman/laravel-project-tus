<!-- attributes is an object -->
<!-- <a {{ $attributes }}>{{ $slot }}</a> -->

 @props(['active' => false])
  <a  class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-white" 
 aria-current="{{ $active ? 'page' : 'false'}}" {{$attributes}}>
 {{ $slot }}
</a>



 <!-- @props(['active' => false, 'type' => 'a']) -->
 <?php //if($type === 'a') : ?>
  <!-- @if ($type === 'a') -->
  <!-- <a  class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-white" 
 aria-current="{{ $active ? 'page' : 'false'}}" {{$attributes}}>
 {{ $slot }}
</a> -->
<?php //else : ?>
  <!-- @else -->
  <!-- <button  class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-white" 
 aria-current="{{ $active ? 'page' : 'false'}}" {{$attributes}}>
 {{ $slot }}
</button> -->
<!-- @endif -->
