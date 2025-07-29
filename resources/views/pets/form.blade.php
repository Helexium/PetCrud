<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $pet->name ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Type</label>
    <input type="text" name="type" class="form-control" value="{{ old('type', $pet->type ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Breed</label>
    <input type="text" name="breed" class="form-control" value="{{ old('breed', $pet->breed ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Age</label>
    <input type="number" name="age" class="form-control" value="{{ old('age', $pet->age ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Owner</label>
    <input type="text" name="owner" class="form-control" value="{{ old('owner', $pet->owner ?? '') }}" required>
</div>
