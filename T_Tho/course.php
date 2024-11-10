 <div class="container">
        <div class="top">
         <h1>HOẠT ĐỘNG CỦA KHOA NGOẠI NGỮ - TIN HỌC</h1>
         <p>NỘI DUNG</p>
         <br>
         <p id="red-line"></p>
         <br>
        </div>

        <div class="cotlon">

            <div class="card" onmouseout="stopVideo(this)" onmouseover="playVideo(this)">
                <img width="500" height="400"src="T_Tho/img/chaodonk24.jpg"/>
                <video muted="" width="600" height="400" src="T_Tho/video/TA.mp4">
                </video>
             <div class="card-body">
              <h4>Cuộc Thi Sáng Tạo Video "Tri Ân Thầy Cô"</h4>
              
              <p>Bài Dự Thi của lớp K23 Cao Đẳng Tiếng Anh trong cuộc thi sáng tạo Video "Tri Ân Thầy Cô"</p>
              <a class="btn" href="#">APPLY NOW</a>
             </div>
            </div>

            <div class="card" onmouseout="stopVideo(this)" onmouseover="playVideo(this)">
                <img width="500" height="400"src="T_Tho/img/LOPHOC.jpg"/>
                <video muted="" width="600" height="400" src="T_Tho/video/video_chen.mp4">
                </video>
             <div class="card-body">
              <h4>LỚP 23CĐTI</h4>
            
              <p>Cả lớp 23CĐTI cùng cô Thái Thị Hồng Diễm chụp ảnh ghi lại những khoảnh khắc đẹp</p>
              <a class="btn" href="#">APPLY NOW</a>
             </div>
            </div>


            <div class="card" onmouseout="stopVideo(this)" onmouseover="playVideo(this)">
                <img width="500" height="400"src="T_Tho/img/23cdti.jpg"/>
                <video muted="" width="600" height="400" src="T_Tho/video/video_chen.mp4">
                </video>
             <div class="card-body">
              <h4>LỚP 23CĐTI</h4>
              
              <p>Lớp 23 Tin Học Ứng Dụng hưởng ứng và cùng nhau ăn uống chia sẻ với nhau</p>
              <a class="btn" href="#">APPLY NOW</a>
             </div>
            </div>         


        </div>
       </div>

<script>
    function playVideo(card) {
             const img = card.querySelector('img');
             const video = card.querySelector('video');
             img.style.display = 'none';
             video.style.display = 'block';
             video.play();
         }
 
    function stopVideo(card) {
             const img = card.querySelector('img');
             const video = card.querySelector('video');
             video.pause();
             video.style.display = 'none';
             img.style.display = 'block';
         }
   </script>
