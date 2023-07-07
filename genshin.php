<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>GAMES INCRÍVEIS</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<header>
        <a href="index.html" class="logo"><span>GAMES</span><br>INCRÍVEIS</a>
            <div class="nav-links">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="playstation.html">PLAYSTATION</a></li>
                <li><a href="xbox.html">XBOX</a></li>
                <li><a href="nintendo.html">NINTENDO</a></li>
                <li><a href="pc.html">PC</a></li>
            </ul>
        </div>
</header>

<!-- QUIZ -->
<section class="quiz">
    <h1>Prove que você conhece Teyvat</h1>
    <form method="post" action="quiz.php">
        <div class="quiz1">
            <label>Quem é Grande Mestre dos Cavaleiros Favonius?</label><br>
                <input type="radio" name="q1" value="Diluc" required>Diluc
                <input type="radio" name="q1" value="Kaeya" required>Kaeya
                <input type="radio" name="q1" value="Jean" required>Jean
                <input type="radio" name="q1" value="Lisa" required>Lisa
        </div>
        <div class="quiz2">
            <label>Quem é o Arconte de Anemo?</label><br>
                <input type="radio" name="q2" value="Venti" required>Venti
                <input type="radio" name="q2" value="Barbara" required>Barbara
                <input type="radio" name="q2" value="Aether" required>Aether
                <input type="radio" name="q2" value="Lumine" required>Lumine
        </div>
        <div class="quiz3">
            <label>Quem é a Qixing de Liyue?</label><br>
                <input type="radio" name="q3" value="Beidou" required>Beidou
                <input type="radio" name="q3" value="Ningguang" required>Ningguang
                <input type="radio" name="q3" value="Keqing" required>Keqing
                <input type="radio" name="q3" value="Ganyu" required>Ganyu
        </div>
        <div class="quiz4">
            <label>Quem é o Arconte de Geo?</label><br>
                <input type="radio" name="q4" value="Xingqiu" required>Xingqiu
                <input type="radio" name="q4" value="Chongyun" required>Chongyun
                <input type="radio" name="q4" value="Xiao" required>Xiao
                <input type="radio" name="q4" value="Zhongli" required>Zhongli
        </div>
        <div class="quiz5">
            <label>Quantos personagens são jogáveis atualmente?</label><br>
                <input type="radio" name="q5" value="33" required>33
                <input type="radio" name="q5" value="27" required>27
                <input type="radio" name="q5" value="25" required>25
                <input type="radio" name="q5" value="38" required>38
        </div>
        <div class="quiz6">
            <label>Quantos deles são 5*?</label><br>
                <input type="radio" name="q6" value="4" required>4
                <input type="radio" name="q6" value="12" required>12
                <input type="radio" name="q6" value="10" required>10
                <input type="radio" name="q6" value="16" required>16
        </div>
        <div class="quiz7">
            <label>Dragonspine faz parte de qual região do jogo?</label><br>
                <input type="radio" name="q7" value="Mondstadt" required>Mondstadt
                <input type="radio" name="q7" value="Liyue" required>Liyue
                <input type="radio" name="q7" value="Snezhnaya" required>Snezhnaya
                <input type="radio" name="q7" value="Inazuma" required>Inazuma
        </div>
        <div class="quiz8">
            <label>Qual pirata possui grande reputação com Porto de Liyue?</label><br>
                <input type="radio" name="q8" value="Beidou" required>Beidou
                <input type="radio" name="q8" value="Fischl" required>Fischl
                <input type="radio" name="q8" value="Kaeya" required>Kaeya
                <input type="radio" name="q8" value="Diluc" required>Diluc
        </div>
        <div class="quiz9">
            <label>Qual elemento do jogo ainda não possui personagem jogável?</label><br>
                <input type="radio" name="q9" value="Hidro" required>Hidro
                <input type="radio" name="q9" value="Pyro" required>Pyro
                <input type="radio" name="q9" value="Electro" required>Electro
                <input type="radio" name="q9" value="Dendro" required>Dendro
        </div>
        <div class="quiz10">
            <label>Quantos Paraísos Mágicos estão disponiveis para escolha com Tubby?</label><br>
                <input type="radio" name="q10" value="4" required>4
                <input type="radio" name="q10" value="8" required>8
                <input type="radio" name="q10" value="3" required>3
                <input type="radio" name="q10" value="5" required>5
        </div>
        <button type="submit" class="box-btn">ENVIAR</button>
    </form>
</section>

<!-- FOOTER -->
<section class="footer">
    <p>Esse site foi desenvolvido por Diego Xavier da Silva.<br>Todos direitos reservados.</p>
    <div class="icons">
        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
        <a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
        <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
    </div>
</section>



<!-- JavaScript -->
<script>
    window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    })
</script>
</body>
</html>