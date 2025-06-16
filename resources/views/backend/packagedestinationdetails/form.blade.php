@php
$gallery = $detail->gallery_images ?? [];
@endphp

<div class="mb-3">
    <label for="pakage_destination_id" class="form-label">Select Package</label>
    <select name="pakage_destination_id" class="form-select" required>
        <option value="">-- Choose --</option>
        @foreach($packages as $id => $title)
        <option value="{{ $id }}" {{ old('pakage_destination_id', $detail->pakage_destination_id ?? '') == $id ? 'selected' : '' }}>
            {{ $title }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $detail->title ?? '') }}" required>
</div>



<div class="mb-3">
    <label>Country</label>
    <input type="text" name="country" class="form-control" value="{{ old('country', $detail->country ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Visa Required</label><br>
    <input type="checkbox" name="visa_required" value="1" {{ old('visa_required', $detail->visa_required ?? false) ? 'checked' : '' }}>
</div>

<div class="mb-3">
    <label>Price per Person</label>
    <input type="number" name="price_per_person" class="form-control" step="0.01" value="{{ old('price_per_person', $detail->price_per_person ?? 0) }}">
</div>

<div class="mb-3">
    <label>Language</label>
    <input type="text" name="language" class="form-control" value="{{ old('language', $detail->language ?? 'English') }}">
</div>

<div class="mb-3">
    <label>Area</label>
    <input type="text" name="area" class="form-control" value="{{ old('area', $detail->area ?? '') }}">
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea id="description" name="description" class="form-control summernote" rows="4">{{ old('description', $detail->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Google Map Embed (iframe or src)</label>
    <textarea id="map_embed" name="map_embed" class="form-control" rows="3">{{ old('map_embed', $detail->map_embed ?? '') }}</textarea>
</div>


<div class="mb-3">
    <label>Featured</label><br>
    <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $detail->is_featured ?? false) ? 'checked' : '' }}>
</div>

<div class="mb-3">
    <label>Main Image {{ isset($edit) ? '(optional)' : '' }}</label>
    <input type="file" name="main_image" class="form-control">
    @isset($detail->main_image)
    <img src="{{ asset('storage/' . $detail->main_image) }}" width="120" class="mt-2">
    @endisset
</div>

<div class="mb-3">
    <label>Gallery Images {{ isset($edit) ? '(optional)' : '' }}</label>
    <input type="file" name="gallery_images[]" multiple class="form-control">
    @if(!empty($gallery))
    <div class="mt-2 d-flex flex-wrap gap-2">
        @foreach($gallery as $img)
        <img src="{{ asset('storage/' . $img) }}" width="100">
        @endforeach
    </div>
    @endif
</div>

<button type="submit" class="btn btn-success">Save</button>