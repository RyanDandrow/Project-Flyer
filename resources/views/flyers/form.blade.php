{{ csrf_field() }}

<div class="form-group">
	<label for="street">Street:</label>
	<input type="street" name="street" id="street" class="form-control" value="{{ old('street') }}">
</div>

<div class="form-group">
	<label for="city">City:</label>
	<input type="city" name="city" id="city" class="form-control" value="{{ old('city') }}">
</div>

<div class="form-group">
	<label for="zip">Zip/Postal Code:</label>
	<input type="zip" name="zip" id="zip" class="form-control" value="{{ old('zip') }}">
</div>

<div class="form-group">
	<label for="country">Country:</label>
	<select id="country" name="country" class="form-control">
		@foreach (App\Http\Utilities\Country::all() as $country)
			<option value="{{ $country }}">{{ $country }}</option>
		@endforeach
	</select>
</div>

<div class="form-group">
	<label for="state">State:</label>
	<input type="state" name="state" id="state" class="form-control" value="{{ old('state') }}">
</div>

<hr>

<div class="form-group">
	<label for="price">Sale Price:</label>
	<input type="price" name="price" id="price" class="form-control" value="{{ old('price') }}">
</div>

<div class="form-group">
	<label for="description">Description:</label>
	<textarea type="text" name="description" id="description" class="form-control" rows="10" required>	
		{{ old('description') }}
	</textarea>		
</div>

<div class="form-group">
	<button type="submit" class="btn btn-primary">Create Flyer</button>
</div>
