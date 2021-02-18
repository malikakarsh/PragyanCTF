<!DOCKTYPE html>
<html>
    <head>
        <title>Prime Parcel</title>
        <style>
            *{margin: 0;padding: 0;}
body{
    background-color: 000000;
    color: #008000;
}

.div1 {
    text-align: center;
    color: #008000;
    padding: 300px 20px 20px 20px;
}
.div2 {
    text-align: center;
    color: #008000;
    padding: 0px 20px 20px 20px;
    font-size: 25px;
}

#image {
    display: none;
}

        </style>
    </head>
    <body>
        <header>
            <div class="div1">
                <h1>The Letter Box!</h1>
            </div>
        </header>
        <main>
            <div class="div2">
            <p style="padding-top: 40px; padding-bottom: 40px">The letterbox has a secret to share but he feels so ignored!</p> 
            <img src="letter.jpg" width="500px" id="image">
            </div>
            <?php
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo "\n\n";
                echo "p_ctf{101_1t5_crypt0_n0t_w3b!}";
                echo "\n\n";
                echo "-[------->+<]>.+[-->+<]>++.[->+++<]>+.+[->+++<]>.--[--->+<]>-.++[->+++<]>+.--.+++++++++.---------.+++++++++++++.+++[->+++<]>++.--[--->+<]>-.+++[->+++<]>.-.-[--->+<]>-.+[->+++<]>++.++++.--.+.++++++++++++.[---->+<]>+++.---[->++++<]>-.---.-----------.--.++++++.---.+++.------.[--->+<]>-.[-->+++++++<]>.++.---------.++++.--------.[--->+<]>----.+[---->+<]>+++.---[->++++<]>+.--.----------.+++++.-------.-[--->+<]>--.---[->++++<]>.------------.---.--[--->+<]>-.---[->++++<]>-.+.--.---------.+++++.-------.++++++++++++.+[---->+<]>+++.---[->++++<]>-.+++[++>---<]>.-[--->++<]>.[->+++<]>+.+++++++++++++.----------.-[--->+<]>-.---[->++++<]>-.>-[----->+<]>-.--[--->++<]>.[->+++<]>+.+++++++++++++.----------.-[--->+<]>-.+[->+++<]>.+++++.+++++++.++++.++++[->+++<]>.+++++++++.-[->+++++<]>-.+++++[->+++<]>.-.---------.--[--->+<]>-.+++++[->+++<]>.---------.[--->+<]>--.---[->++++<]>.------------.---.++++++++.[->+++++<]>-.[->+++<]>+.--[--->+<]>--.+[---->+<]>+++.[->+++<]>+.+++++++++++++.-[->+++++<]>-.-[--->++<]>-.+++++.-----.+++++++++++.-----------.--------.+++++++++++.[++>---<]>--.[-->+++++++<]>.[----->++<]>+.+++..+++++.+++++.-------.-[--->+<]>--.---[->++++<]>.-----.[--->+<]>-----.---[->++++<]>.------------.---.--[--->+<]>-.++[->+++<]>.++++++.-----------.++++++.-[--->+<]>--.[->+++<]>+.+++++++++++++.----------.-[--->+<]>-.+[->+++<]>++.+++++++++.-----------.-[--->+<]>----.+++++++.---------.++++.+++[->+++<]>.-.-[--->+<]>-.---[->++++<]>.------------.---.--[--->+<]>-.[-->+++++++<]>.[----->++<]>+.+++..+.-.-[--->+<]>-.++[->+++<]>.++++++.-----------.++++++.-[--->+<]>--.---[->++++<]>+.--.----------.+++++.-------.-[--->+<]>--.---[->++++<]>.------------.---.--[--->+<]>-.---[->++++<]>-.+++[->+++<]>+.-[--->+<]>----.---------.+++++++.++++.[---->+<]>+++.++[->+++<]>+.++.[->++++++<]>.+[->+++<]>.+++++++++.-[->+++++<]>-.[->+++<]>++.+++.+++++++.+++.++++++++.---[++>---<]>.++[--->++<]>.>++++++++++..+[--------->+<]>.+++[++>---<]>.-[--->++<]>.-[->++<]>-.+[-->+<]>+.+++++[->++<]>.+[--->++++<]>.>-[--->+<]>-.---[--->++++<]>.>-[--->+<]>.---[-->+++<]>-.>+[--->++<]>+.++++[->++++<]>-.>++++++++++.+[--------->+<]>.>-[----->+<]>-.--[--->++<]>.-[->++<]>-.+[-->+<]>+.++++[->++<]>.[--->++++<]>+.+[--->+++++<]>+.>--[----->+<]>-.--[----->+<]>+.--[-->+++<]>.[--->++<]>--.++++++++.>++++++++++.[--->+++++<]>.++++++.-----------.++++++.-[--->+<]>--.-[->++<]>-.+[-->+<]>+.+[->+++<]>.+[-->+<]>.++.++.-.---.--..++++.-[->++<]>-..----.++.++.+[-->+<]>+.++++.---.--[->++<]>-.+[-->+<]>+.----.++.++++.-----[->++<]>.[-->+<]>+++++++..-.------.++.--.+++++++.--------..+.++++++.------[->++<]>.[-->+<]>++++++.+.[----->++++<]>+.+[-->+<]>+.-[->++<]>-.+[-->+<]>.++++++.--.+++.----.---[->++<]>-.-[++++>-----<]>.----.+++++.----.-----...++[->++<]>.[-->+<]>+++.-..--[->++<]>.--.[-->+<]>+++++.----[->++<]>-.-[-->+<]>-.+.[->++<]>.[-->+<]>.++++++.-------.++++.---.++++.--[->++<]>-..----.++.-[-->+<]>.+++++++.---.++.---..----.++[->++<]>.+.+++[->+++<]>..-------.-.++++++++.>++++++++++..>-[--->+<]>-.[---->+++++<]>-.---.--[--->+<]>-.[-->+++++++<]>.[----->++<]>+.+++..+.-.-[--->+<]>-.++[->+++<]>.++++++.-----------.++++++.-[--->+<]>--.-[--->++<]>-.++++++++++.+[---->+<]>+++.-[--->++<]>-.+++++.-[->+++++<]>-.---[->++++<]>.------------.---.--[--->+<]>-.++[->+++<]>.+++++++++.+++.-----.------------.--[--->+<]>-.[-->+<]>.[-->+<]>+++.++.+++[->+++<]>+.[->+++++<]>+.-[--->++<]>.++[->+++<]>.++++++.-----------.++++++.-[--->+<]>.--.--[->++++<]>-.+[->+++<]>.---.+++++++++++++.-------------.--[--->+<]>-.[-->+++++++<]>.[->+++++<]>+.-[--->++<]>.-[--->++<]>-.++++++++++.+[---->+<]>+++.---[->++++<]>.------------.---.--[--->+<]>-.+[->+++<]>.+++++.+++++++.++++.++++[->+++<]>.+++++++++.-[->+++++<]>-.[-->+++++++<]>.++.---------.++++.--------.[->+++<]>-.>++++++++++..+[--->++++<]>-.--.--[--->+<]>-.[---->+<]>+++.--[->++<]>..+++++++++.++++++++++.---------.[-->+<]>---.-[->++<]>.[-->+<]>+.++[->+++<]>.++++++.-----------.++++++.--[->+++<]>-.++[----->+<]>.+++++++++.>++++++++++.-[->++++<]>-.--.-[-->+++<]>-.-[--->++<]>+.--.-.++[++>---<]>+.++[->++<]>.+++++++.+++++.++[->+++++<]>-.+[----->+<]>.+++++++++.-----.------------.+++++++.-.[-->+<]>----.>++++++++++.--[----->+<]>+.++++.+++.-.+++.++.[---->+<]>+++.+++++[->+++<]>.++++.>++++++++++.[--->+++++<]>.++++++.-----------.++++++.-[--->+<]>--.-[->++<]>-.+[-->+<]>+.+++++[->+++<]>.+.-----------.+++++++++.++[++>---<]>.-.>--[----->+<]>.++++++.-----------.++++++.--------.++++.-[--->+<]>--.+++[->+++<]>+.-[->+++<]>-.[--->++<]>.++++.----.+[--->+<]>.+++++.------------.+++++++.-[->+++<]>.[--->+<]>+.++.+++++.[--->++<]>--.-------------.----.+++.-[->+++<]>-.+.+++++.[--->++<]>-.+.--.---------.+++++++.[++>---<]>.+.+++++.+[--->+<]>.+++++++++.-----------.++++++++++++.-----------.+.--[->+++<]>-.+.>++++++++++.-[------->+<]>+.++.---------.+++++.++++++.+[--->+<]>+.+[--->+<]>+++.++++++.-----------.++++++.----[->+++<]>.>++++++++++...+[--->++++<]>-.+++++++++.-----------.--[--->+<]>--..+[---->+<]>+++.++[->++<]>+.-[--->+<]>++.-----------.-[--->+<]>----.+++++++.---------.++++.[-->+<]>.>++++++++++.[->+++<]>++....+[->+++<]>+.+.+.[--->+<]>--.[->+++<]>-..++++++++++.+++++.-----.+++++++++++.+[->+++<]>..-[--->++++<]>.--[->+++<]>+.++++[->+++<]>.+++++++.------.---[->+++<]>.-[-->+++<]>--.>++++++++++.[->+++<]>++........---[->++++<]>-.++++[->+++<]>.+++++++.------.-[->+++<]>-.[---------->+<]>.------.[--->+<]>++.-[---->+<]>++.-[->++<]>-.+[-->+<]>+.+++++[->+++<]>.++++.+[++>---<]>.[--->++<]>+.---.+++[->+++<]>++.+++++++++++++.----------.+++++++++++.--.+++[++>---<]>.++++++++++++++.-------------.>++++++++++..[->+++<]>++....+[->+++<]>+.+.+.[--->+<]>--.+[->+++<]>++.+++++++++.-----------.-[--->+<]>----.+++++++.---------.++++.+[--->+<]>+.--[->+++<]>+.++++[->+++<]>.+++++++.------.--[->+++<]>.------------.---[->++++<]>.+++[->+++<]>.[--->+<]>+.----.[-->+<]>.[-->+<]>+++.[->+++<]>++.[--->+<]>+++.-----.+++[->+++<]>.[--->+<]>----.-[--->+<]>+++.---------.--[-->+++<]>.---[-->+++<]>-.[-->+<]>+.[->+++<]>++.[--->+<]>+++.-----.+++[->+++<]>.[--->+<]>----.+[-->+<]>.>++++++++++.[->+++<]>++........+[->+++<]>.++++++.+++++++.--------.---.+++++++++++++.[-->+++++<]>+++.-[->++<]>-.+[-->+<]>+.[->+++<]>++.[->+++<]>+..>++++++++++.[->+++<]>++........++[->+++<]>.+++++++++.+++.[-->+++++<]>+++.-[--->++<]>-.[--->+<]>---.-[--->++<]>-.+++++.-[->+++++<]>-.---[----->++<]>.+++[->+++<]>++.+++++++++++++.-------.--.--[->+++<]>-.----[->+++<]>.-------.+++++++++.++[++>---<]>.-[->+++<]>-.+++[->+++<]>.[--->+<]>+.----.+[--->+<]>++..-[-->+++<]>--.>++++++++++.[->+++<]>++............+[->+++<]>.++++++.+++++++.--------.---.+++++++++++++.[-->+++++<]>+++.+++++++++++.-[-->+++<]>--.+[-->+<]>+.[->+++<]>++.[--->+<]>+++.-----.+++[->+++<]>.[--->+<]>----.-[--->+<]>++.[------>+<]>-.+[--->+<]>.+++[->+++<]>.[--->+<]>+.----.[->+++<]>-.-[->++++<]>+.------------.[--->+<]>+.-[->+++<]>+.-[--->+<]>+.---[->++++<]>-.++++[->+++<]>.+++++++.------.-[->+++<]>-.[---------->+<]>.------.[--->+<]>++.[->+++++<]>--.-[->++++<]>+.[--->+<]>---.+++++.-----.++[--->++<]>.-------.+++++++++.++[++>---<]>.--[->+++<]>+.++++[->+++<]>.+++++++.------.-[->+++<]>-.[---------->+<]>.------.[--->+<]>++.-[--->+<]>+.-[------>+<]>+..-[->++++++<]>+.>++++++++++.[->+++<]>++........---[----->++<]>.-------------.[--->+<]>---.+.---.----.-[->+++++<]>-.+[->+++<]>.++++++.+++++++.--------.---.+++++++++++++.>++++++++++..[->+++<]>++....+[->+++<]>+.+.+.[--->+<]>--.+[->+++<]>+.+.--.-[--->+<]>----.+++++++.---------.++++.+[--->+<]>+.--[->+++<]>+.++++[->+++<]>.+++++++.------.--[->+++<]>.------------.---[->++++<]>.+++[->+++<]>.[--->+<]>+.----.[-->+<]>.[-->+<]>+++.[->+++<]>++.[--->+<]>+++.-----.+++[->+++<]>.[--->+<]>----.-[--->+<]>+++.---------.--[-->+++<]>.---[-->+++<]>-.[-->+<]>+.[->+++<]>++.[--->+<]>+++.-----.+++[->+++<]>.[--->+<]>----.+[-->+<]>.>++++++++++.[->+++<]>++........---[----->++<]>.-------------.[--->+<]>---.+.---.----.-[->+++++<]>-.---[->++++<]>-.++++[->+++<]>.+++++++.------.-[->+++<]>-.+[--->+<]>.+++++++++.-----------.-[--->+<]>----.+++++++.---------.++++.+[--->+<]>+.-[->+++<]>-.+++[->+++<]>.[--->+<]>+.----.+[--->+<]>++.>++++++++++...+[--->++++<]>-.-[--->+<]>----.+++++++.---------.++++.-----.[--->+<]>-----.-[->++<]>-.+[-->+<]>+.++[->++<]>+.-[--->+<]>++.-----------.-[--->+<]>----.+++++++.---------.++++.+[--->+<]>+.+.>++++++++++.-[------->+<]>+.++.---------.+++++.++++++.+[--->+<]>+.-.>--[----->+<]>.++++++.-----------.++++++.++[->+++<]>++.+[-->+<]>+.+++++++.+++++.------------.+[->+++<]>.-[--->+<]>----.+++++++.---------.++++.-----.[->+++++<]>+++.+[--->+<]>.+++++++++.-----------.-[--->+<]>----.+++++++.---------.++++.+[--->+<]>+.+[--->+<]>+++.++++++.-----------.++++++.----[->+++<]>.+++++.+[--->+<]>+++.---.[--->+<]>+.[--->+<]>.+..>++++++++++..[->+++++++<]>-.++++++++++.---------.";
                echo "\n\n";
            }
            ?>
        </main>
    </body>
</html>