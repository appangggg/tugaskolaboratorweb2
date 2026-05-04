
<!DOCTYPE html>
<html>
<head><title>To-Do List</title></head>
<body>
    <h2>Aplikasi To-Do List Kolaborasi</h2>
    <!-- TEMPAT FORM CREATE -->
    <hr>
    <table border="1">
         <tr><th>Task</th><th>Aksi</th></tr>
         @foreach($tasks ?? [] as $t)
         <tr>
             <td>{{ $t->task_name }}</td>
             <td>
                 <form action="{{ route('tasks.destroy', $t->id) }}" method="POST">
                     @csrf @method('DELETE')
                     <button type="submit" onclick="return confirm('Hapus?')">Hapus</button>
                 </form>
             </td>
         </tr>
         @endforeach
     </table>
</body>
</html>