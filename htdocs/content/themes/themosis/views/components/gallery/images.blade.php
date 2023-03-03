<div style="display: flex; flex-wrap: wrap; gap: 10px">
    @foreach($items as $gallery_item)
        <x-gallery.item :item="$gallery_item" :size="$size" />
    @endforeach
</div>