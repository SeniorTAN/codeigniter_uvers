<html>
<head>
    <title>UVERS</title>
</head>
<body>
    <center><h1>Membuat Upload File Dengan CodeIgniter | Uvers</h1></center>
        <?php echo $error;?>
        <?php echo form_open_multipart('upload/aksi_upload');?>
        <input type="file" name="berkas" />
        <br /><br />
        <input type="submit" value="upload" />
        </form>
</body>
</html>