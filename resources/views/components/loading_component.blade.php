<div 
    @if ( $unique_element_id )
        id="loading-component_{{$unique_element_id}}" 
    @endif
    class="loader_component hide-loader_component"
>
        <span class="loader_component-done"></span>
        <span class="circle c1"></span>
        <span class="circle c2"></span>
        <span class="circle c3"></span>
</div>
