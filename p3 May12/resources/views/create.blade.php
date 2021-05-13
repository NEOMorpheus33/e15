<!-- /resources/views/post/create.blade.php -->
<h1>Create JSearch Blog Post</h1>
<!-- /resources/views/post/create.blade.php -->

<label for="title">Post Title</label>
<input id="title" type="text" class="@error('title') is-invalid @enderror">

@error('title')
<div class="alert alert-danger">{{ $message }}</div>

@enderror
<!-- $errors alert-arry Form -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- Create Post Form -->
