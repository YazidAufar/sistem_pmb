<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .aksi {
        color: #777;
    }

    #tbpeserta {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        max-height: 400px;
        overflow-y: scroll;
    }

    #tbpeserta td,
    #tbpeserta th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #tbpeserta tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customtbpesertaers tr:hover {
        background-color: #ddd;
    }

    #tbpeserta th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }

    .title {
        color: grey;
        font-size: 18px;
    }

    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    button:hover,
</style>
<div id="form-registrasi">
    <h2 style="color: #1a355b; margin-top:30px; text-align:center; ">
        <a href="index.php?link=dashboard&level=admin" style="color: #777; font-size:24px;"> Informasi Pendaftaran </a>
        | Informasi User
    </h2>
    <br>
    <div class="card">
        <img src="images/my_profil.jpg" alt="John" style="height:250px; margin-top:20px;">
        <h1>John Doe</h1>
        <p class="title">Beny Rahman Hakim, Web Administrator</p>
        <p>Sistem Informasi Penerimaan Siswa</p>
        <div style="margin: 24px 0; padding:20px;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
    </div>
</div>