
@section('content')
<div class="container">
    <h2>Upload Foto Baru</h2>

    @if ($errors->any())
        <div>
            <strong>Error!</strong> Ada masalah dengan inputan.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('fotos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="path_foto">Pilih Foto:</label>
            <input type="file" name="path_foto" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection
