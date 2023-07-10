<?php
//total array yang disiapkan untuk disimpan
$todos  = [];
if (file_exists('todo.txt')) {
    $file = file_get_contents('todo.txt');
    $todos = unserialize($file);
}
//Jika ditemukan todo yang dikirim melalui methode POST
if (isset($_POST['todo'])) {
    $data   = $_POST['todo']; // mengambil data yang diinput pada form
    $todos[] = [
        'todo'  => $data,
        'status' => 0
    ];
    saveData($todos);
}

if (isset($_GET['status'])) {
    $todos[$_GET['key']]['status'] = $_GET['status'];
    saveData($todos);
}

if (isset($_GET['hapus'])) {
    unset($todos[$_GET['key']]);
    saveData($todos);
}

function saveData($todos)
{
    file_put_contents('todo.txt', serialize($todos));
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi TODO</title>

</head>

<body>
    <h1>Todo App</h1>
    <form method="post">
        <label>Daftar Belanja Hari ini<label><br>
                <input type="text" name="todo">
                <button type="submit">Simpan</button>
    </form>
    <ul>
        <?php foreach ($todos as $key => $value) : ?>
            <li>
                <input type="checkbox" name="todo" onclick="window.location.
                href = 'index.php?status=<?php
                                            echo ($value['status'] == 1) ? '0' : '1'
                                            ?>&key=<?php echo $key; ?>'" <?php if ($value['status'] == 1) {
                                                                                echo 'checked';
                                                                            } ?>>
                <label>
                    <?php
                    if ($value['status'] == 1) {
                        echo '<del>' . $value['todo'] . '</del>';
                    } else {
                        echo $value['todo'];
                    }
                    ?>
                </label>
                <a href="index.php?hapus=1&key=<?= $key; ?>" onclick="return confirm('Apakah kamu yakin akan menghapus todo ini?')">hapus</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>