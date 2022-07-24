@props(['student'])

<div class="overlay">
    <div class="modal">
        <p>Are you sure you want to proceed?</p>
        <span>
        <form method="POST" action="/students/{{$student->studid}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-proceed">Proceed</button>
        </form>
        <button class="btn dark btn-cancel">Cancel</button>
    </span>
    </div>
</div>