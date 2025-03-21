<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-white">

    <div class="bg-red-700 p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-4 text-white">Tambah User</h2>

        <form action="{{ route('user.store') }}" method="POST"> 
            @csrf

            <div>
                <label for="nama" class="block font-medium text-white">Nama</label>
                <input type="text" id="nama" name="nama" class="w-full border border-white bg-white text-red-700 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-white">
                
                @foreach($errors->get('nama') as $msg)
                <p style="text-red-500 text-sm mt-1">{{$msg}}</p>
                @endforeach
            </div>

            <div class="mt-4">
                <label for="npm" class="block font-medium text-white">NPM</label>
                <input type="text" id="npm" name="npm" class="w-full border border-white bg-white text-red-700 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-white">
               
                @foreach($errors->get('npm') as $msg)
                <p stlye="text-red-500 text-sm mt-1">{{$msg}}</p>
                @endforeach
            </div>

            <div class="mt-4">
                <label for="kelas" class="block font-medium text-white">Kelas</label>
                <select name="kelas_id" id="kelas_id" class="w-full border border-white bg-white text-red-700 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-white">
                    
                    @foreach($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                </select>
                @error('kelas_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
            <button type="submit" class="w-full bg-white text-red-700 font-semibold py-2 rounded-lg hover:bg-gray-200 transition mt-4">
                Submit
            </button>
        </form>
    </div>

</body>
</html>
