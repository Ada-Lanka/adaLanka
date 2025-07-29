@extends('layouts.admin')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-white via-[var(--pink-light)] to-white py-10 px-2 md:px-12 lg:px-24">
    <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-lg p-4 md:p-12">
        <center><h2 class="text-3xl font-bold text-[var(--pink-medium)] mb-6">Create News Post</h2></center>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        {{-- General Error --}}
        @if ($errors->has('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ $errors->first('error') }}
            </div>
        @endif

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Form --}}
        <form action="{{ route('admin.store_news') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            {{-- Title --}}
            <div>
                <label for="title" class="block text-lg font-semibold text-[var(--pink-medium)] mb-1">News Full Title</label>
                <input name="title" class="w-full border border-[var(--pink-light)]  rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400" value="{{ old('title') }}" required placeholder='Ex: Sri Lanka Oil Price New Changes 2025'>
            </div>

            {{-- Thumbnail --}}
            <div>
                <label for="thumbnail" class="block text-lg font-semibold text-[var(--pink-medium)] mb-1">Upload Thumbnail Image</label>
                <input type="file" name="thumbnail" class="w-full border border-[var(--pink-light)]  rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400" required>
            </div>

            {{-- Keywords --}}
            <div>
                <label for="keywords" class="block text-lg font-semibold text-[var(--pink-medium)] mb-1">Keywords for viwers to find this post on google</label>
                <input name="keywords" class="w-full border border-[var(--pink-light)] rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400" value="{{ old('keywords') }}" placeholder='Ex: Lanka oil price, Latest oil price'>
            </div>

            {{-- Categories --}}
            <div>
                <label class="block text-lg font-semibold text-[var(--pink-medium)] mb-2">Select Main Categories</label>
                <div class="flex flex-wrap gap-4">
                    @foreach($categories as $category)
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="categories[]" value="{{ $category->id }}" class="form-checkbox text-pink-500"
                                {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}>
                            <span class="ml-2 text-gray-700">{{ $category->category_name }}</span>
                        </label>
                    @endforeach
                </div>
            </div>

            {{-- Subcategories --}}
            <div>
                <label class="block text-lg font-semibold text-[var(--pink-medium)] mb-2">Select Subcategories</label>
                <div class="flex flex-wrap gap-4">
                    @foreach($subcategories as $sub)
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="subcategories[]" value="{{ $sub->id }}" class="form-checkbox text-pink-500"
                                {{ in_array($sub->id, old('subcategories', [])) ? 'checked' : '' }}>
                            <span class="ml-2 text-gray-700">{{ $sub->subCategory_name }}</span>
                        </label>
                    @endforeach
                </div>
            </div>

            {{-- Description --}}
            <div>
                <label for="description" class="block text-lg font-semibold text-[var(--pink-medium)] mb-2">News Description with images</label>
                <div class="h-[1000px]">
                    <textarea name="description" id="editor" class="w-full h-full border border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400">{!! old('description') !!}</textarea>
                </div>
            </div>

            <div class="pt-6">
                <button type="submit" class="bg-[var(--pink-dark)] hover:bg-pink-600 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-200">
                    Publish Post
                </button>
            </div>
        </form>
    </div>
</div>
@endsection



@section('scripts')
<script src="https://cdn.tiny.cloud/1/efoa5t98c3rshimuzeo4whmhkdbvrhdmsyt5h44827pdunfn/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


<script>
tinymce.init({
    selector: '#editor',
    plugins: 'image code',
    toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange removeformat | pagebreak | charmap emoticons | fullscreen preview save print | insertfile image media link anchor codesample | ltr rtl',

    images_upload_handler: function (blobInfo, progress) {
        return new Promise(function (resolve, reject) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '{{ route('image.upload') }}');
            xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
            xhr.upload.onprogress = function (e) {
                progress(e.loaded / e.total * 100);
            };
            xhr.onload = function() {
                if (xhr.status < 200 || xhr.status >= 300) {
                    reject('HTTP Error: ' + xhr.status);
                    return;
                }
                var json = JSON.parse(xhr.responseText);
                if (!json || typeof json.location != 'string') {
                    reject('Invalid JSON: ' + xhr.responseText);
                    return;
                }
                resolve(json.location);
            };
            xhr.onerror = function () {
                reject('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
            };
            var formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
            xhr.send(formData);
        });
    }
});
</script>
@endsection


