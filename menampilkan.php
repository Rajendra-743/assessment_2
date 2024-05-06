<!DOCTYPE html>
<html>
<head>
    <title>Melihat Rating dan Ulasan</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div id="rating"></div>

    <script>
    $(document).ready(function() {
        $.ajax({
            url: 'modul.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Proses dan tampilkan data dalam bentuk tabel
                var html = '<table border="1">';
                html += '<tr><th>id</th><th>rating</th><th>ulasan</th><th>hapus</th>';
                for (var i = 0; i < data.length; i++) {
                    html += '<tr>';
                    html += '<td>' + data[i].id + '</td>';    
                    html += '<td>' + data[i].rating + '</td>';
                    html += '<td>' + data[i].ulasan + '</td>';
                    html += '<td><button class="delete-btn" data-id="' + data[i].id + '">Hapus</button></td>';
                    html += '</tr>';
                }
                html += '</table>';
                $('#rating').html(html);
            }
        });
    });
    </script>
</body>
</html>