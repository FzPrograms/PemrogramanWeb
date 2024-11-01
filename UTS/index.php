<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Faiz</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        section {
            height: 300vh;
            background: url(https://github.com/FzPrograms/firstPortfolio/blob/master/main_bg.jpg?raw=true);
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }
        .cover{
            position: fixed;
            left: 0px;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            background-color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 10%;
        }
        .cover h1, h2 {
            text-transform: uppercase;
        }
        .cover h1 {
            line-height: 1;
            font-size: 12em;
            font-weight: 900;
            background-image: url(https://github.com/FzPrograms/firstPortfolio/blob/master/main_bg.jpg?raw=true);
            background-size: cover;
            background-attachment: fixed;
            background-clip: text;
            color: transparent;
        }
        .cover h2 {
            font-weight: 200;
            font-size: 2em;
        }

        .section2 {
            height: 100vh;
            padding: 10% 15%;
            color: white;
            background: url(https://github.com/FzPrograms/firstPortfolio/blob/master/1344005.jpeg?raw=true);
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }
        .section2 h1 {
            font-weight: 200;
            font-size: 3em;
        }
        .profil_diri{
            display: flex;
            gap: 20px;
        }
        #foto_profil{
            height: 200px;
            border-radius: 8px;
        }
        .button {
            display: flex;
            justify-content: center;

        }
        #uts{
            padding: 20px 40px;
            font-size: 24px;   
            cursor: pointer;
            border-radius: 10px;              
        }
        #uts:hover {
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4);
        }
    
    </style>
</head>
<body>
    
    <section></section>
    <div class="cover">
        <h2>
            HELLO
            <br>
            I'AM FA'IZ ALFARISI
        </h2>
        <h1>
            MID
            <br>
            SEMESTER
            <br>
            PROJECT
        </h1>
    </div>   
    
    <section class="section2">
        <h1>Tentang Saya:<br></h1>

        <?php
            $nama = "Muhammad Fa'iz Alfarisi";
            $telepon = "089666070999";
            $email = "muhammad.faiz.2203126@students.um.ac.id";
            $linkedin = "https://www.linkedin.com/in/mfaizalfarisi/";
            $foto = "https://media.licdn.com/dms/image/v2/D5603AQH5wlsoMTzJuQ/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1715479677589?e=1735171200&v=beta&t=HtXna70dBJUbw3aF9gRR6iZMod_hu_nv6UpRF97fZzc"; 
            $deskripsi = "Seorang mahasiswa S1 Matematika di Universitas Negeri Malang dengan antusiasme tinggi terhadap penerapan matematika dalam teknologi. Memiliki kemampuan Coding & Programming dengan fokus pada bidang Machine Learning (ML) / AI.";   
            
            echo '<div class="profil_diri"><img src="'.$foto.'" id="foto_profil"
            <p>Nama: '.$nama.'
            <br>Telepon: '.$telepon.'
            <br>Email: '.$email.'
            <br>LinkedIn: '.$linkedin. '
            <br>Deskripsi: '.$deskripsi.'</p>
            </div>';

            echo '<div class="button">
                <button id="uts" onclick="window.location.href=\'uts.php\'">Klik untuk Melihat Pengerjaan UTS saya!</button>
            </div>';
        ?>



    </section>

    <script>
        let cover = document.querySelector(".cover");
        window.addEventListener("scroll", function () {
        let value = window.scrollY;
        cover.style.left = value + "px"; //70px
        });
    </script>
</body>
</html>