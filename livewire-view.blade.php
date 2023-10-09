
<div>
    <label for='country'>Country</label>
    <select id='country' class='select2' wire:model='country'>
        <option></option>
        <option value='BR'>Brazil</option>
        <option value='US'>United States</option>
        <option value='FR'>France</option>
    </select>
</div>

@push('script')
    <script>
        $('.select2').select2({
            placeholder: 'Select a country',
            allowClear: true
        }).on('select2:select', function (e) {
            var data = e.params.data;
            var model = $(this).data('wire:model');
            @this.set(model, data.id);
        })
    </script>
@endsection