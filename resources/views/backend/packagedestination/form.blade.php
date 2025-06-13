<div class="mb-3">
    <label for="destination_id" class="form-label">Select Destination</label>
    <select name="destination_id" class="form-control" required>
        <option value="">Choose...</option>
        @foreach($destinations as $id => $title)
        <option value="{{ $id }}" {{ (old('destination_id') ?? ($pakageDestination->destination_id ?? '')) == $id ? 'selected' : '' }}>
            {{ $title }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $pakageDestination->title ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control">{{ old('description', $pakageDestination->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Location</label>
    <input type="text" name="location" class="form-control" value="{{ old('location', $pakageDestination->location ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Duration</label>
    <input type="text" name="duration" class="form-control" value="{{ old('duration', $pakageDestination->duration ?? '') }}">
</div>

<div class="mb-3">
    <label>Price ($)</label>
    <input type="number" name="price" step="0.01" class="form-control" value="{{ old('price', $pakageDestination->price ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Image {{ isset($edit) ? '(Leave blank to keep current)' : '' }}</label>
    <input type="file" name="image" class="form-control" {{ isset($edit) ? '' : 'required' }}>
    @isset($pakageDestination->image)
    <img src="{{ asset('storage/' . $pakageDestination->image) }}" width="100" class="mt-2">
    @endisset
</div>

<div class="mb-3">
    <label>Is Featured</label><br>
    <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $pakageDestination->is_featured ?? false) ? 'checked' : '' }}>
</div>

<div class="mb-3">
    <label>Discount (%)</label>
    <input type="number" name="discount" class="form-control" value="{{ old('discount', $pakageDestination->discount ?? '') }}">
</div>

<div class="mb-3">
    <label>Rating (1 to 5)</label>
    <input type="number" name="rating" class="form-control" min="1" max="5" value="{{ old('rating', $pakageDestination->rating ?? 5) }}">
</div>

<button type="submit" class="btn btn-success">Save</button>