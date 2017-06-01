@if($errors->has())
    <div style="border: 1px solid red;border-radius: 5px;background-color: #ffddff">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif