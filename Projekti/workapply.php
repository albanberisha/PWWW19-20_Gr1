<!DOCTYPE html>
<html>

<head>
    <title>Formular per aplikim ne pune</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" type="text/css" href="information.css">
    <style>
        .forma h1 {
            text-shadow: 3px 2px rgb(136, 136, 255);
            border: 15px solid transparent;
            border-image: url(images/borderbackground.png) 40% stretch;
        }


        h1 {
            position: relative;
            animation-name: animacioniKryesor;
            animation-duration: 4s;
            animation-iteration-count: 1;
            animation-delay: 3s;
            animation-play-state: running;
            animation-timing-function: linear;
            -webkit-animation-name: animacioniKryesor;
            -webkit-animation-duration: 2vmax;
            -webkit-animation-delay: 3s;
            -webkit-animation-timing-function: linear;
            -webkit-animation-iteration-count: 1;
            -webkit-animation-play-state: running;
        }

        @keyframes animacioniKryesor {
            0% {
                left: 0;
                top: 0;
                background: #E0F8FB;
            }

            25% {
                left: 9vmax;
                top: 0px;
                background: #F7FDFC;
            }

            50% {
                left: 18vmax;
                top: 0;
                background: #D3F5FC;
            }

            75% {
                left: 9vmax;
                background: #F7FDFC;

                top: 0px;
            }

            100% {
                left: 0;
                background: #E0F8FB;
                top: 0;
            }

        }
    </style>
</head>

<body>
    <header>
        <button class="back_button"><a href="Seminari.html"><b>Prapa</b></a></button>
    </header>
    <script type="text/javascript">
        function hello() {
            
            if (validateForm() == false) {} else {
                var click=count();
                var clicksesion=countsesion();
                alert("Aplikim i suksesshem. Jeni aplikuesi numer "+click+". Ne kete seksion kane aplikuar "+clicksesion+" aplikues");
            }
            function count()
            {
                if (typeof(Storage) !== "undefined") {
                    if (localStorage.clickcount) {
                        localStorage.clickcount = Number(localStorage.clickcount) + 1;
                    } else {
                        localStorage.clickcount = 1;
                    }
                }
                return localStorage.clickcount; 
            }
            function countsesion()
            {
                if (typeof(Storage) !== "undefined") {
                    if (sessionStorage.clickcount) {
                    sessionStorage.clickcount = Number(sessionStorage.clickcount) + 1;
                    } else {
                        sessionStorage.clickcount = 1;
                    }
                }
                return sessionStorage.clickcount; 
            }
        

        function validateForm() {
            var id = document.forms["formaime"]["id"].value;
            var emri = document.forms["formaime"]["emri"].value;
            var mbiemri = document.forms["formaime"]["mbiemri"].value;
            var checkboxi = document.getElementById("checkboxi").checked;
            if (id == "") {
                return false;
            } else {
                if (emri == "") {
                    return false;
                } else {
                    if (mbiemri == "") {
                        return false;
                    } else {
                        if (checkboxi == false) {
                            return false;
                        }

                    }
                }
            }
        }}
    </script>
    <div class="forma">
        <h1>Aplikim per pune</h1>
        <form name="formaime" method="post" onsubmit="return validateForm()">
            <p>
                <label class="required" for="id" id="text" autoselect>Id:</label>
                <ul class="inline">
                    <li>
                        <audio id="identitynumber" src="audio/identitynumber.mp3"></audio>
                        <div class="icons">
                            <a onclick="document.getElementById('identitynumber').play()"></a>
                        </div>
                    </li>
                    <li>
                        <input type="text" id="id" name="id" required="required" placeholder="Id" autofocus>
                    </li>
                </ul>
            </p>
            <p>
                <ul>
                    <li>
                        <label class="required" for="emri" id="text">Emri:</label>
                        <ul class="inline">
                            <li>
                                <audio id="name" src="audio/name.mp3"></audio>
                                <div class="icons">
                                    <a onclick="document.getElementById('name').play()"></a>
                                </div>
                            </li>
                            <li>
                                <input type="text" id="emri" name="emri" required="required" placeholder="Emri">
                            </li>
                        </ul>
                    </li>
                    <li>
                        <label class="required" for="mbiemri" id="text">Mbiemri:</label>
                        <ul class="inline">
                            <li>
                                <audio id="surname" src="audio/surname.mp3"></audio>
                                <div class="icons">
                                    <a onclick="document.getElementById('surname').play()"></a>
                                </div>
                            </li>
                            <li>
                                <input type="text" id="mbiemri" name="mbiemri" required="required" placeholder="Mbiemri">
                            </li>
                        </ul>
                    </li>
                </ul>
            </p>

            <p>
                <label for="emaili" id="text">E-mail Addresa:</label>
                <ul class="inline">
                    <li>
                        <audio id="email" src="audio/email.mp3"></audio>
                        <div class="icons">
                            <a onclick="document.getElementById('email').play()"></a>
                        </div>
                    </li>
                    <li>
                        <input type="text" id="emaili" name="emaili" placeholder="Example@gmail.com">
                    </li>
                </ul>
                </li>
                </ul>
            </p>
            <p>
                <ul>
                    <li>
                        <label id="text" for="pozita">Pozita:</label>
                        <ul class="inline">
                            <li>
                                <audio id="position" src="audio/position.mp3"></audio>
                                <div class="icons">
                                    <a onclick="document.getElementById('position').play()"></a>
                                </div>
                            </li>
                            <li>
                                <label for="kuzhinier">Kuzhinier
                                    <input name="pozita" type="radio" id="kuzhinier" value="kuzhinier">
                                </label>
                                <label for="kamarjer"> Kamarjer
                                    <input name="pozita" type="radio" id="kamarjer" value="kamarjer">
                                </label>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <label id="text">Vite eksperience:</label>
                        <ul class="inline">
                            <li>
                                <audio id="yearsexperience" src="audio/yearsexperience.mp3"></audio>
                                <div class="icons">
                                    <a onclick="document.getElementById('yearsexperience').play()"></a>
                                </div>
                            </li>
                            <li>
                                <select class="vitet" name="vitet">
                                    <option default>-</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3+">3+</option>
                                </select>
                            </li>
                        </ul>
                </ul>

            </p>
            <p>
                <label id="text">Aftesi te tjera:</label>
                <ul class="inline">
                    <li>
                        <audio id="otherskills" src="audio/otherskills.mp3"></audio>
                        <div class="icons">
                            <a onclick="document.getElementById('otherskills').play()"></a>
                        </div>
                    </li>
                    <li>
                        <textarea class="komentet" name="komentet" cols="30" rows="5" wrap="hard" placeholder="Sheno aftesite personale te tjera"></textarea>
                    </li>
                </ul>
            </p>
            <p>
                <ul class="inline">
                    <li>
                        <audio id="privacypolicy" src="audio/privacypolicy.mp3"></audio>
                        <div class="icons">
                            <a onclick="document.getElementById('privacypolicy').play()"></a>
                        </div>
                    </li>
                    <li>

                        <label class="required"><input name="checkboxi" id="checkboxi" required="required" type="checkbox"></input>I kam lexuar dhe i pranoj kushtet e <a class="terms" href="#"> Privacy Policy</a></label>
                    </li>
                </ul>
            </p>
            <p>
                <ul class="inline">
                    <li>
                        <audio id="submit" src="audio/submit.mp3"></audio>
                        <div class="icons">
                            <a onclick="document.getElementById('submit').play()"></a>
                        </div>
                    </li>
                    <li>
                        <button id="apliko" onclick="hello()" class="submit">Apliko</button> </li>
                </ul>
            </p>
            <p>
                <label id="text">
                    <mark> <i>Shiko <u><a id="manuali" href="manualiperaplikimvideo.html" target="_blank">videon</a></u> pe ta pare <aabr title="Manuali Per Aplikim">MPA</aabr> me ane te videos</i></mark>
                </label>
            </p>
        </form>
    </div>
</body>
<script src="js/ndrrimiibackgroundit.js" type="text/JavaScript"></script>

</html>


<?php

if (isset($_POST['id'])) {
    $info = "\n\nInformata:\n";
    $data = $_POST['id'];
    $filename = $data . ".txt";
    $putt = "Id: " . $data;
    $fp = fopen($filename, 'a+');
    fwrite($fp, $info);
    fwrite($fp, $putt);
}

if (isset($_POST['emri'])) {
    $data = $_POST['emri'];
    $putt = "\nEmri: " . $data;
    $fp = fopen($filename, 'a+');
    fwrite($fp, $putt);
}

if (isset($_POST['mbiemri'])) {
    $data = $_POST['mbiemri'];
    $putt = "\nMbiemri: " . $data;
    $fp = fopen($filename, 'a+');
    fwrite($fp, $putt);
}

if (isset($_POST['emaili'])) {
    $data = $_POST['emaili'];
    $putt = "\nEmaili: " . $data;
    $fp = fopen($filename, 'a+');
    fwrite($fp, $putt);
}
if (isset($_POST['pozita'])) {
    $pozita = $_POST['pozita'];
    $putt = "\nPozita: " . $pozita;
    $fp = fopen($filename, 'a+');
    fwrite($fp, $putt);
}
if (isset($_POST['vitet'])) {
    $pozita = $_POST['vitet'];
    $putt = "\nVite Eksperience: " . $pozita;
    $fp = fopen($filename, 'a+');
    fwrite($fp, $putt);
}

if (isset($_POST['komentet'])) {

    $data = $_POST['komentet'];
    $putt = "\nAftesi te tjera:" . $data;
    $fp = fopen($filename, 'a+');
    fwrite($fp, $putt);
}

?>