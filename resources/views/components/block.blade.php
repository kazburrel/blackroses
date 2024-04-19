<form action="{{ $href }}" method="GET">
    @csrf
    <button type="submit" class="btn btn-danger">{{$status == true ? 'block' : 'unblock'}}</button>
</form>