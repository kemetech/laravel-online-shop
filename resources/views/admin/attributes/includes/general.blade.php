<div class="tile">
    <form action="{{ route('admin.attributes.store') }}" method="POST" role="form">
        @csrf
        <h3 class="tile-title">Attribute Information</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="code">Code</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter attribute code"
                    id="code"
                    name="code"
                    value="{{ old('code') }}"
                />
                @error('code') {{ $message }} @enderror

            </div>
            <div class="form-group">
                <label class="control-label" for="name">Name</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter attribute name"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                />
                @error('name') {{ $message }} @enderror

            </div>
            <div class="form-group">
                <label class="control-label" for="frontend_type">Frontend Type</label>
                @php $types = ['select' => 'Select Box', 'radio' => 'Radio Button', 'text' => 'Text Field', 'text_area' => 'Text Area']; @endphp
                <select name="frontend_type" id="frontend_type" class="form-control">
                    @foreach($types as $key => $label)
                        <option value="{{ $key }}">{{ $label }}</option>
                    @endforeach
                </select>
                @error('frontend_type') {{ $message }} @enderror

            </div>
            <div class="form-group">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="is_filterable" name="is_filterable"/>Filterable
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="is_required" name="is_required"/>Required
                    </label>
                </div>
            </div>
        </div>
        <div class="tile-footer">
            <div class="row d-print-none mt-2">
                <div class="col-12 text-right">
                    <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Attribute</button>
                    <a class="btn btn-danger" href="{{ route('admin.attributes.index') }}"><i class="fa fa-fw fa-lg fa-arrow-left"></i>Go Back</a>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
