<div class="form-group">
    <label class="input-label" for="exampleFormControlSelect1">{{trans('messages.branch')}}<span
            class="input-label-secondary">*</span></label>
    <select name="branch_id" id="branch-id" class="form-control js-select2-custom">
        @foreach($branches as $branch)
            @if(isset($product))
                <option value="{{$branch->id}}" {{ $branch->id==$product->branch->id ? 'selected' : ''}} >{{$branch->name}}</option>
            @else
                <option value="{{$branch->id}}">{{$branch->name}}</option>
            @endif
        @endforeach
    </select>
</div>