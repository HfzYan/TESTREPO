<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php include 'isoman_koneksi.php';
            $teks = mysqli_query($conn,"SELECT * FROM Isoman") or die(mysqli_error($conn));
                while($hasil = mysqli_fetch_array($teks)){
        ?>
        <table>
                <tr>
                    <td style="font-family:Arial;">
                    <?php echo $hasil['teks_petunjuk'] ?></p>
                    </td>
                </tr>
                </table>
                <?php } ?>
    </body>
</html>