@props(['placeholder' => 'Select Options', 'id'])

<div wire:ignore>
    <select wire:target="searchCategories" id="{{ $id }}" multiple="multiple" data-placeholder="{{ $placeholder }}" style="width: auto;" data-note="@this">
        {{ $slot }}
    </select>
</div>

@once
@push('styles')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush
@endonce

@once
  @push('js')
      <!-- Select2 -->
      <script src="{{asset('backend/plugins/select2/js/select2.full.min.js')}}"></script>
  @endpush
@endonce

@push('js')
    <script>
        $(function () {
            $('#{{$id}}').select2({
                theme: 'bootstrap4',
            })
        })

        $('#{{$id}}').on('change', function (e) {
            @this.set('searchCategories', $('#{{$id}}').select2('val'));
        });
    </script>
@endpush
