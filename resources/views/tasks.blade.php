
<!DOCTYPE html>
<html>
<head><title>To-Do List</title></head>
<body>
    <h2>Aplikasi To-Do List Kolaborasi</h2>
   <form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <input type="text" name="task_name" required placeholder="Masukkan task...">
    <button type="submit">Tambah</button>
</form>
    <hr>
    <!-- TEMPAT TABLE READ & DELETE -->
</body>
</html>