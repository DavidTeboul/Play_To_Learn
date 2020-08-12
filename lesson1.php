
<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width" />
    <title>HTML Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
     <style>
		 buttton {
            text-align: center;
            background-color: #00BFFF;
            color: white;
            padding: 14px 20px;
            margin-top:-50px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 8px;
            font-size: 18px;
            float:right;
            }
       
        buttton:hover {
            opacity: 0.8;
            }</style>

</head>
<body>
    <div class="container body-content">


        <center>
            <font color=00BFFF>
            <label><h1>-Play To Learn-</h1></label>
        </center>
        <center>
            <h3>click on the letter to hear it</h3>
            </font>
        </center>

        <div class="container">

            <div class="row justify-content-end" style="padding-top:10px;">

            </div>
            <div class="row justify-content-start" style="padding-top:10px;">


                <audio id="aSound" src="audio/a.mp3" preload="metadata" type="audio/mpeg">
                </audio>
                <div class="col">
                    <img src="image/a.jpg" class="btn btn-primary" id="btn-a" style="height:100px;width:100px;padding:0px">
                    <audio id="bSound" src="audio/b.mp3" preload="metadata" type="audio/mpeg">
                    </audio>
                </div>
                <div class="col">
                    <img src="image/b.jpg" class="btn btn-primary" id="btn-b" style="height:100px;width:100px;padding:0px">

                    <audio id="cSound" src="audio/c.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/c.jpg" class="btn btn-primary" id="btn-c" style="height:100px;width:100px;padding:0px">

                    <audio id="dSound" src="audio/d.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/d.jpg" class="btn btn-primary" id="btn-d" style="height:100px;width:100px;padding:0px">

                    <audio id="eSound" src="audio/e.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/e.jpg" class="btn btn-primary" id="btn-e" style="height:100px;width:100px;padding:0px">

                    <audio id="fSound" src="audio/f.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/f.jpg" class="btn btn-primary" id="btn-f" style="height:100px;width:100px;padding:0px">


                </div>
            </div>
            <div class="row justify-content-start" style="padding-top:20px;">

                <div class="col" style="padding-top:10px;">
                    <img src="image/g.jpg" class="btn btn-primary" id="btn-g" style="height:100px;width:100px;padding:0px">

                    <audio id="gSound" src="audio/g.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/h.jpg" class="btn btn-primary" id="btn-h" style="height:100px;width:100px;padding:0px">

                    <audio id="hSound" src="audio/h.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/i.jpg" class="btn btn-primary" id="btn-i" style="height:100px;width:100px;padding:0px">

                    <audio id="iSound" src="audio/i.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/j.jpg" class="btn btn-primary" id="btn-j" style="height:100px;width:100px;padding:0px">

                    <audio id="jSound" src="audio/j.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/k.jpg" class="btn btn-primary" id="btn-k" style="height:100px;width:100px;padding:0px">

                    <audio id="kSound" src="audio/k.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/l.jpg" class="btn btn-primary" id="btn-l" style="height:100px;width:100px;padding:0px">

                    <audio id="lSound" src="audio/l.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
            </div>
            <div class="row justify-content-start" style="padding-top:20px;">

                <div class="col" style="padding-top:10px;">
                    <img src="image/m.jpg" class="btn btn-primary" id="btn-m" style="height:100px;width:100px;padding:0px">

                    <audio id="mSound" src="audio/m.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/n.jpg" class="btn btn-primary" id="btn-n" style="height:100px;width:100px;padding:0px">

                    <audio id="nSound" src="audio/n.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/o.jpg" class="btn btn-primary" id="btn-o" style="height:100px;width:100px;padding:0px">

                    <audio id="oSound" src="audio/o.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/p.jpg" class="btn btn-primary" id="btn-p" style="height:100px;width:100px;padding:0px">

                    <audio id="pSound" src="audio/p.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/q.jpg" class="btn btn-primary" id="btn-q" style="height:100px;width:100px;padding:0px">

                    <audio id="qSound" src="audio/q.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/r.jpg" class="btn btn-primary" id="btn-r" style="height:100px;width:100px;padding:0px">

                    <audio id="rSound" src="audio/r.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
            </div>
            <div class="row justify-content-start" style="padding-top:20px;">

                <div class="col" style="padding-top:10px;">
                    <img src="image/s.jpg" class="btn btn-primary" id="btn-s" style="height:100px;width:100px;padding:0px">

                    <audio id="sSound" src="audio/s.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/t.jpg" class="btn btn-primary" id="btn-t" style="height:100px;width:100px;padding:0px">
                    <audio id="tSound" src="audio/t.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/u.jpg" class="btn btn-primary" id="btn-u" style="height:100px;width:100px;padding:0px">

                    <audio id="uSound" src="audio/u.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/v.jpg" class="btn btn-primary" id="btn-v" style="height:100px;width:100px;padding:0px">

                    <audio id="vSound" src="audio/v.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/w.jpg" class="btn btn-primary" id="btn-w" style="height:100px;width:100px;padding:0px">

                    <audio id="wSound" src="audio/w.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/x.jpg" class="btn btn-primary" id="btn-x" style="height:100px;width:100px;padding:0px">

                    <audio id="xSound" src="audio/x.mp3" preload="metadata" type="audio/mpeg">
                    </audio>
                </div>
            </div>
            <div class="row justify-content-start" style="padding-top:20px;">

                <div class="col" style="padding-top:10px;">
                    <img src="image/y.jpg" class="btn btn-primary" id="btn-y" style="height:100px;width:100px;padding:0px">

                    <audio id="ySound" src="audio/y.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
                <div class="col" style="padding-top:10px;">
                    <img src="image/z.jpg" class="btn btn-primary" id="btn-z" style="height:100px;width:100px;padding:0px">

                    <audio id="zSound" src="audio/z.mp3" preload="metadata" type="audio/mpeg">
                    </audio>

                </div>
            </div>

        </div>

    </div>

    <!--    SCRIPTS    -->
    <script>
        var aSound = document.getElementById('aSound');
        var aBtn = document.getElementById('btn-a');

        var bSound = document.getElementById('bSound');
        var bBtn = document.getElementById('btn-b');

        var cSound = document.getElementById('cSound');
        var cBtn = document.getElementById('btn-c');

        var dSound = document.getElementById('dSound');
        var dBtn = document.getElementById('btn-d');

        var eSound = document.getElementById('eSound');
        var eBtn = document.getElementById('btn-e');

        var fSound = document.getElementById('fSound');
        var fBtn = document.getElementById('btn-f');

        var gSound = document.getElementById('gSound');
        var gBtn = document.getElementById('btn-g');

        var hSound = document.getElementById('hSound');
        var hBtn = document.getElementById('btn-h');

        var iSound = document.getElementById('iSound');
        var iBtn = document.getElementById('btn-i');

        var jSound = document.getElementById('jSound');
        var jBtn = document.getElementById('btn-j');

        var kSound = document.getElementById('kSound');
        var kBtn = document.getElementById('btn-k');

        var lSound = document.getElementById('lSound');
        var lBtn = document.getElementById('btn-l');

        var mSound = document.getElementById('mSound');
        var mBtn = document.getElementById('btn-m');

        var nSound = document.getElementById('nSound');
        var nBtn = document.getElementById('btn-n');

        var oSound = document.getElementById('oSound');
        var oBtn = document.getElementById('btn-o');

        var pSound = document.getElementById('pSound');
        var pBtn = document.getElementById('btn-p');

        var qSound = document.getElementById('qSound');
        var qBtn = document.getElementById('btn-q');

        var rSound = document.getElementById('rSound');
        var rBtn = document.getElementById('btn-r');

        var sSound = document.getElementById('sSound');
        var sBtn = document.getElementById('btn-s');

        var tSound = document.getElementById('tSound');
        var tBtn = document.getElementById('btn-t');

        var uSound = document.getElementById('uSound');
        var uBtn = document.getElementById('btn-u');

        var vSound = document.getElementById('vSound');
        var vBtn = document.getElementById('btn-v');

        var wSound = document.getElementById('wSound');
        var wBtn = document.getElementById('btn-w');

        var xSound = document.getElementById('xSound');
        var xBtn = document.getElementById('btn-x');

        var ySound = document.getElementById('ySound');
        var yBtn = document.getElementById('btn-y');

        var zSound = document.getElementById('zSound');
        var zBtn = document.getElementById('btn-z');



        function playPause(song) {
            if (song.paused && song.currentTime >= 0 && !song.ended) {
                song.play();
            } else {
                song.pause();
            }
        }

        function reset(btn, song) {
            if (btn.classList.contains('playing')) {
                btn.classList.toggle('playing');
            }
            song.pause();
            song.currentTime = 0;
        }

        function progress(btn, song) {
            setTimeout(function () {
                var end = song.duration;
                var current = song.currentTime;
                var percent = current / (end / 100);
                //check if song is at the end
                if (current == end) {
                    reset(btn, song);
                }
                //set inset box shadow
                btn.style.boxShadow = "inset " + btn.offsetWidth * (percent / 100) + "px 0px 0px 0px rgba(0,0,0,0.125)"
                //call function again
                progress(btn, song);
            }, 1000);
        }

        aBtn.addEventListener('click', function () {
            aBtn.classList.toggle('playing');
            playPause(aSound);
            progress(aBtn, aSound);
        });

        bBtn.addEventListener('click', function () {
            bBtn.classList.toggle('playing');
            playPause(bSound);
            progress(bBtn, bSound);
        });

        cBtn.addEventListener('click', function () {
            cBtn.classList.toggle('playing');
            playPause(cSound);
            progress(cBtn, cSound);
        });

        dBtn.addEventListener('click', function () {
            dBtn.classList.toggle('playing');
            playPause(dSound);
            progress(dBtn, dSound);
        });

        
        eBtn.addEventListener('click', function () {
            eBtn.classList.toggle('playing');
            playPause(eSound);
            progress(eBtn, eSound);
         });

        fBtn.addEventListener('click', function () {
            fBtn.classList.toggle('playing');
            playPause(fSound);
            progress(fBtn, fSound);
        });

        gBtn.addEventListener('click', function () {
            gBtn.classList.toggle('playing');
            playPause(gSound);
            progress(gBtn, gSound);
        });

        hBtn.addEventListener('click', function () {
            hBtn.classList.toggle('playing');
            playPause(hSound);
            progress(hBtn, hSound);
        });

        iBtn.addEventListener('click', function () {
            iBtn.classList.toggle('playing');
            playPause(iSound);
            progress(iBtn, iSound);
        });

        jBtn.addEventListener('click', function () {
            jBtn.classList.toggle('playing');
            playPause(jSound);
            progress(jBtn, jSound);
        });

        kBtn.addEventListener('click', function () {
            kBtn.classList.toggle('playing');
            playPause(kSound);
            progress(kBtn, kSound);
        });

        lBtn.addEventListener('click', function () {
            lBtn.classList.toggle('playing');
            playPause(lSound);
            progress(lBtn, lSound);
        });

        mBtn.addEventListener('click', function () {
            mBtn.classList.toggle('playing');
            playPause(mSound);
            progress(mBtn, mSound);
        });

        nBtn.addEventListener('click', function () {
            nBtn.classList.toggle('playing');
            playPause(nSound);
            progress(nBtn, nSound);
        });

        oBtn.addEventListener('click', function () {
            oBtn.classList.toggle('playing');
            playPause(oSound);
            progress(oBtn, oSound);
        });

        pBtn.addEventListener('click', function () {
            pBtn.classList.toggle('playing');
            playPause(pSound);
            progress(pBtn, pSound);
        });

        qBtn.addEventListener('click', function () {
            qBtn.classList.toggle('playing');
            playPause(qSound);
            progress(qBtn, qSound);
        });

        rBtn.addEventListener('click', function () {
            rBtn.classList.toggle('playing');
            playPause(rSound);
            progress(rBtn, rSound);
        });

        sBtn.addEventListener('click', function () {
            sBtn.classList.toggle('playing');
            playPause(sSound);
            progress(sBtn, sSound);
        });

        tBtn.addEventListener('click', function () {
            tBtn.classList.toggle('playing');
            playPause(tSound);
            progress(tBtn, tSound);
        });

        uBtn.addEventListener('click', function () {
            uBtn.classList.toggle('playing');
            playPause(uSound);
            progress(uBtn, uSound);
        });

        vBtn.addEventListener('click', function () {
            vBtn.classList.toggle('playing');
            playPause(vSound);
            progress(vBtn, vSound);
        });

        wBtn.addEventListener('click', function () {
            wBtn.classList.toggle('playing');
            playPause(wSound);
            progress(wBtn, wSound);
        });

        xBtn.addEventListener('click', function () {
            xBtn.classList.toggle('playing');
            playPause(xSound);
            progress(xBtn, xSound);
        });

        yBtn.addEventListener('click', function () {
            yBtn.classList.toggle('playing');
            playPause(ySound);
            progress(yBtn, ySound);
        });

        zBtn.addEventListener('click', function () {
            zBtn.classList.toggle('playing');
            playPause(zSound);
            progress(zBtn, zSound);
        });
         
        </script>
</body >
 <buttton onclick="window.location.href = 'Menu-Lesson.php';"> -Menu-</buttton>
    <style>
        buttton {
            background-color: #00BFFF;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 8px;
            font-size: 18px;
        }
       
    buttton:hover {
            opacity: 0.8;
        }


    </style>
        
</html >
