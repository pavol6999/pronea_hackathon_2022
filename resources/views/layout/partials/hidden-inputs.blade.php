
@if ( app('request')->input('gender')) 
            @php
            foreach(request()->get('gender') as $value)
            {
              echo '<input type="hidden" name="gender[]" value="'. $value. '">';
              
            }
            @endphp
            @endif

            @if ( app('request')->input('brand')) 
            @php
            foreach(request()->get('brand') as $value)
            {
              echo '<input type="hidden" name="brand[]" value="'. $value. '">';
              
            }
            @endphp
            @endif

            @if ( app('request')->input('category')) 
            @php
            foreach(request()->get('category') as $value)
            {
              echo '<input type="hidden" name="category[]" value="'. $value. '">';
              
            }
            @endphp
            @endif

            @if ( app('request')->input('price_min'))
            <input type="hidden" name="price_min" value="{{ app('request')->input('price_min') }}">
            @endif

            @if ( app('request')->input('price_max'))
            <input type="hidden" name="price_max" value="{{ app('request')->input('price_max') }}">
            @endif

            @if ( app('request')->input('size')) 
            @php
            foreach(request()->get('size') as $value)
            {
              echo '<input type="hidden" name="size[]" value="'. $value. '">';
              
            }
            @endphp
            @endif
            @if ( app('request')->input('color')) 
            @php
            foreach(request()->get('color') as $value)
            {
              echo '<input type="hidden" name="color[]" value="'. $value. '">';
              
            }
            @endphp
            @endif

            @if ( app('request')->input('material')) 
            @php
            foreach(request()->get('material') as $value)
            {
              echo '<input type="hidden" name="material[]" value="'. $value. '">';
              
            }
            @endphp
            @endif
            
