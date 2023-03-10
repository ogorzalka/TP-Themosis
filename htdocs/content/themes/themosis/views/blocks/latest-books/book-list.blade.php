@if (isset($widget_content) || $widget_content !== '')
  <div>
    {{ $widget_content }}
  </div>
@else
  <div>Pas de contenu</div>
@endif