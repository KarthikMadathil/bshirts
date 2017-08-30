

	<div class="fb-file form-group field-front">
		{{csrf_field()}}
		<input type="hidden" name="item_id" @isset($item)" value=" {{$item->id}} "@endisset >
		<label for="front" class="fb-file-label">Upload &nbsp;Image
			<span class="fb-required">*</span>
		</label>
		<input type="file" class="form-control" name="image" id="image"  aria-required="false" >
	</div>
	<div class="fb-text form-group field-rate">
		<label for="rate" class="fb-text-label">Item Price
			<span class="fb-required">*</span>
		</label>
		<input type="text" class="form-control" name="rate" id="rate" required="required" aria-required="true" @isset($item)" value="{{$item->rate}}" @endisset>
	</div>
	<div class="fb-textarea form-group field-desc">
		<label for="desc" class="fb-textarea-label">Item Discription</label>
		<textarea type="textarea" class="form-control" name="desc" rows="2" id="desc"  > @isset($item) {{$item->desc}} @endisset</textarea>
	</div>
	<div class="fb-button form-group field-add">
		<button type="submit" class="btn btn-default" name="add" style="default" id="add">Submit</button>
	</div>

	<div class="bak">
	<a href="/product/".@isset($item) {{$item->id}} @endisset">
			<i class="fa fa-arrow-left " aria-hidden="true"></i>
		</a>
	</div>
