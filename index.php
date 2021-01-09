<?php include("include/header.php"); ?>






<script>
        function startTime() {
            var today = new Date();
            var hours = today.getHours();
            var minutes = today.getMinutes();
            var seconds = today.getSeconds();

            if (hours < 10){
                hours = "0" + hours;
            }
            if (minutes < 10){
                minutes = "0" + minutes;
            }
            if (seconds < 10){
                seconds = "0" + seconds;
            }
            
            document.getElementById('clock').innerHTML =
            hours + ":" + minutes + ":" + seconds;
            var t = setTimeout(startTime, 500);
        }
        </script>
</head>
<body onload="startTime()" oncontextmenu="return false">
    <nav class="head">
        <div class="top-row">
                <div class="top-left">
                </div>

                <div class="top-right">
                        <div class="container">
                
                            </div>
                    </div>
                </div>
            </nav>
    <header>
        <div class="header_container">
            <div class="header_cell">
                    <div class="container">

                 
                        <h1><div id="clock"></div></h1>
                        <p><?php $today = date("Y년 m월 d일"); echo $today; ?></p>
                        <center><test> <a href="https://naver.com" target="_blank"><img src="logo/logo.png" border=0></a>  |  <a href="https://youtube.com" target="_blank"><img src="logo/youtube.png" border=0></a>   |  <a href="https://google.com" target="_blank"><img src="logo/google logo.png" border=0></a>   |  <a href="https://gmail.com" target="_blank"><img src="logo/google.png" border=0></a>   |   
                         <a href="https://drive.google.com" target="_blank"><img src="logo/google drive.png" border=0></a> 
                          <!-- <br/> <br/> <a href="http://newtab.gq/dev-newtab.php" target="_blank"><img src="logo/developer.png" border=0></a></test></center><br/> -->

                                
                            
                
                               
                    </div>
                </div>
            </div>
    </header>

  </html>
</body>

