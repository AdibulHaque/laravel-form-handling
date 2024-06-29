<x-layout>
    <x-slot:title>
        Normal Form
    </x-slot:title>
    <h1>Form Example</h1>
    <p>How to create and handle forms in laravel</p>

    <form enctype="multipart/form-data" action=" {{ route('form.post') }} " method="POST">
        @csrf
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter name">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter email">
        <label> Profile Picture</label>
        <input type="file" name="profile_picture">
        <button type="submit">Submit</button>
    </form>

    <p>
        @if (@session('profile_picture'))
            <img src="{{ session('profile_picture') }}" alt="">
        @endif
    </p>
    <p>
        @if ($errors->any())
            <p> {{ $errors->first() }} </p>
        @endif
    </p>



</x-layout>
