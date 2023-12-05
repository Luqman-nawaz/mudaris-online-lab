<form wire:submit="save">
    @csrf
    @method('post')
    <input type="text" name="lab_id" wire:model="lab_id" value="{{$labid}}" style="display: none;"/>

    <textarea class="form-control" rows="10" cols="10" name="code" wire:model="code" wire:model.defer="code">
        {{$co}}
    </textarea>

    
    <button class="btn btn-block btn-primary m-2"> Compile </button>
</form>