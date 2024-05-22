      <!-- Slider section -->
      <section class="section-padding">
              <div class="custom-container">
                <div class="mb-5 flex justify-between items-center">
                  <h1 class="section-heading">Latest Score</h1>
                </div>
                <div class="banner-slider" id="scrollport">
                       
                </div>
                <!--<div class="progress-bar-container mt-4 hidden lg:block">-->
                <!--  <div class="progress-bar" style="width: 0"></div>-->
                <!--</div>-->
              </div>
      </section>

 <!-- Advertisement -->
      <section class="px-7 lg:px-0">
        <div class="custom-container">
          <div
            class="rounded-xl max-h-[90px] grid place-content-center text-center"
          >
            <?php echo $home_ads[0]->embed_code;?>
          </div>
        </div>
      </section>

      <!-- News section -->
      <section class="section-padding">
        <div class="custom-container">
          <div class="grid lg:grid-cols-3 gap-5 xl:gap-8">
            <div class="lg:col-span-2">
              <div>
                <div class="news-card-big bg-transparent relative">
                  <div class="rounded-xl">
                    <img
                      src="<?php echo base_url()?>uploads/<?php echo $latest_crickets_news[0]->image;?>"
                      alt="poster"
                      class="h-full w-full rounded-xl"
                      style="filter: brightness(0.6)"
                    />
                  </div>
                  <div class="px-4 lg:px-10 absolute bottom-5 z-50 w-full">
                    <h4 class="mb-3 text-lg lg:text-2xl font-semibold text-white ellipsis-text">
                      <a href="<?php echo base_url('news-details/').'cricket'.'/'.$latest_crickets_news[0]->encode_title;?>"><?php echo $latest_crickets_news[0]->stitle;?></a>
                    </h4>
                    <div class="flex justify-between items-center">
                      <p class="news-tag">News</p>
                       <a onclick="shareContent('<?php echo $latest_crickets_news->encode_title?>','<?php echo $latest_crickets_news->encode_title?>','<?php echo base_url('news-details/').'football'.'/'.$latest_crickets_news->encode_title;?>')">
                          <img
                            src="./src/images/global/share.png"
                            alt="share icon"
                          />
                       </a>   
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-5 lg:mt-8 grid lg:grid-cols-2 gap-3 lg:gap-5">
                <?php foreach($latest_crickets_news as $key=>$latest_crickets_data){?>
                    <?php 
                          if($key==0){
                            continue;
                          }
                          if($key==5){
                            break;
                          }
                        $difference = time() - $latest_crickets_data->time_stamp;
                        $days = floor($difference / (60 * 60 * 24));
                        $hours = floor(($difference % (60 * 60 * 24)) / (60 * 60));
                        $minutes = floor(($difference % (60 * 60)) / 60);

                        if ($days > 0) {
                            $time = "$days day" . ($days > 1 ? 's ' : ' ');
                        }
                        if ($hours > 0) {
                            $time .= "$hours hour" . ($hours > 1 ? 's ' : ' ');
                        }
                        if ($minutes > 0) {
                            $time .= "$minutes minute" . ($minutes > 1 ? 's ' : ' ');
                        }
                        
                        $time .= "ago";
                      ?> 
                  <div class="news-card-small bg-transparent border-2 border-[#D9D9D9]">
                  <div class="small-img">
                    <img
                      src="<?php echo base_url()?>uploads/<?php echo $latest_crickets_data->image;?>"
                      alt="poster"
                    />
                  </div>
                  <div class="news-card-small-content">
                    <h4 class="news-small-heading text-black ellipsis-text">
                      <a href="<?php echo base_url('news-details/').'cricket'.'/'.$latest_crickets_data->encode_title;?>"><?php echo $latest_crickets_data->stitle;?></a>
                    </h4>
                    <div>
                      <p class="text-black">                        
                        <?php echo $time;?>
                      </p>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>

            <div class="bg-transparent rounded-xl px-4 py-6">
              <h2 class="mb-8 text-black text-xl lg:text-3xl font-semibold">Latest news</h2>
              <div class="space-y-5">
               <?php foreach($latest_crickets_news as $key=>$latest_crickets_data){?>
                <?php 
                    $difference = time() - $latest_crickets_data->time_stamp;
                    $days = floor($difference / (60 * 60 * 24));
                    $hours = floor(($difference % (60 * 60 * 24)) / (60 * 60));
                    $minutes = floor(($difference % (60 * 60)) / 60);

                    if ($days > 0) {
                        $time = "$days day" . ($days > 1 ? 's ' : ' ');
                    }
                    if ($hours > 0) {
                        $time .= "$hours hour" . ($hours > 1 ? 's ' : ' ');
                    }
                    if ($minutes > 0) {
                        $time .= "$minutes minute" . ($minutes > 1 ? 's ' : ' ');
                    }
                    
                    $time .= "ago";
                  ?>    
                 <div class="news-card-small bg-transparent  !items-center !px-0 !py-0 md:!min-h-fit xl:!min-h-fit">
                 
                  <div class="shrink-0 w-10 xl:w-[50px] bg-white h-10 xl:h-[50px] rounded-full grid place-content-center text-base xl:text-2xl font-semibold">
                    <?php echo $key+1;?>
                  </div>
                  <div class="news-card-small-content">
                    <h4 class="news-small-heading ellipsis-text text-black">
                      <a href="<?php echo base_url('news-details/').'cricket'.'/'.$latest_crickets_data->encode_title;?>"><?php echo $latest_crickets_data->title?></a>
                    </h4>
                    <div>
                      <p class="text-black"><?php echo $time;?></p>
                    </div>
                  </div>
                </div>
              <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- Videos section -->
      <section class="section-padding">
        <div class="custom-container">
          <div class="grid lg:grid-cols-3 gap-5 xl:gap-7">
            <div class="lg:col-span-2">
              <h2 class="mb-8 text-black text-xl lg:text-2xl 2xl:text-3xl font-semibold">Cricket Videos</h2>
              <div class="grid lg:grid-cols-3 gap-4 lg:gap-5">
                <div class="video-modal">
                  <div id="video-modal-open0" class="h-[305px] relative">
                    <iframe class="h-full" width="100%" src="https://www.youtube.com/embed/rpPCjyVfQOo?si=vAuZamWHiKsxza4-" 
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; web-share" 
                      allowfullscreen>
                    </iframe>
                    <div class="absolute inset-0 w-full h-full z-50 bg-transparent cursor-pointer"></div>
                  </div>
                  <h5 class="mt-3 text-base lg:text-lg font-medium text-black">Live streaming, SA20 2024 begins on January 10: Where to watch</h5>
                  <dialog class="w-full lg:w-1/2 relative bg-transparent">
                    <div class="flex justify-end">
                      <button autofocus class="mb-5 outline-none bg-white w-8 h-8 rounded-full text-danger text-lg font-semibold text-center">
                        <i class="fa-solid fa-xmark"></i>
                      </button>
                    </div>
                    <div>
                      <iframe class="modal-video" width="100%" src="https://www.youtube.com/embed/rpPCjyVfQOo?si=vAuZamWHiKsxza4-" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                      </iframe>
                    </div>
                  </dialog>
                </div>

                <div class="video-modal">
                  <div id="video-modal-open1" class="h-[305px] relative">
                    <iframe class="h-full" width="100%" src="https://www.youtube.com/embed/rpPCjyVfQOo?si=vAuZamWHiKsxza4-" 
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; web-share" 
                      allowfullscreen>
                    </iframe>
                    <div class="absolute inset-0 w-full h-full z-50 bg-transparent cursor-pointer"></div>
                  </div>
                  <h5 class="mt-3 text-base lg:text-lg font-medium text-black">Live streaming, SA20 2024 begins on January 10: Where to watch</h5>
                  <dialog class="w-full lg:w-1/2 relative bg-transparent">
                    <div class="flex justify-end">
                      <button autofocus class="mb-5 outline-none bg-white w-8 h-8 rounded-full text-danger text-lg font-semibold text-center">
                        <i class="fa-solid fa-xmark"></i>
                      </button>
                    </div>
                    <div>
                      <iframe class="modal-video" width="100%" src="https://www.youtube.com/embed/rpPCjyVfQOo?si=vAuZamWHiKsxza4-" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                      </iframe>
                    </div>
                  </dialog>
                </div>

                <div class="video-modal">
                  <div id="video-modal-open2" class="h-[305px] relative">
                    <iframe class="h-full" width="100%" src="https://www.youtube.com/embed/rpPCjyVfQOo?si=vAuZamWHiKsxza4-" 
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; web-share" 
                      allowfullscreen>
                    </iframe>
                    <div class="absolute inset-0 w-full h-full z-50 bg-transparent cursor-pointer"></div>
                  </div>
                  <h5 class="mt-3 text-base lg:text-lg font-medium text-black">Live streaming, SA20 2024 begins on January 10: Where to watch</h5>
                  <dialog class="w-full lg:w-1/2 relative bg-transparent">
                    <div class="flex justify-end">
                      <button autofocus class="mb-5 outline-none bg-white w-8 h-8 rounded-full text-danger text-lg font-semibold text-center">
                        <i class="fa-solid fa-xmark"></i>
                      </button>
                    </div>
                    <div>
                      <iframe class="modal-video" width="100%" src="https://www.youtube.com/embed/rpPCjyVfQOo?si=vAuZamWHiKsxza4-" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                      </iframe>
                    </div>
                  </dialog>
                </div>
              </div>
            </div>

            <div class="w-[300px] h-[500px] lg:h-[600px] m-auto">
              <div
                class="rounded-xl grid place-content-center text-center"
              >
                <?php echo $home_ads[1]->embed_code;?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Videos section -->
      <!--<section class="section-padding">-->
      <!--  <div class="custom-container">-->
      <!--    <div class="grid lg:grid-cols-3 gap-5 xl:gap-7">-->
      <!--      <div class="lg:col-span-2">-->
      <!--        <h2 class="mb-8 text-black text-xl lg:text-2xl 2xl:text-3xl font-semibold">Cricket Videos</h2>-->
      <!--        <div class="grid lg:grid-cols-3 gap-4 xl:gap-5">-->
      <!--          <?php foreach($latest_crickets_videos as $key => $latest_crickets_video){?>-->
      <!--            <div class="video-modal">-->
      <!--            <div id="video-modal-open<?php echo $key;?>" class="h-[305px] relative">-->
      <!--              <iframe class="h-full" width="100%" src="<?php echo $latest_crickets_video->videos;?>" -->
      <!--                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; web-share" -->
      <!--                allowfullscreen>-->
      <!--              </iframe>-->
      <!--              <div class="absolute inset-0 w-full h-full z-50 bg-transparent cursor-pointer"></div>-->
      <!--            </div>-->
      <!--            <h5 class="mt-3 text-base xl:text-lg font-medium text-black"><?php echo $latest_crickets_video->title;?></h5>-->
      <!--            <dialog class="w-full lg:w-1/2 relative bg-transparent">-->
      <!--              <div class="flex justify-end">-->
      <!--                <button autofocus class="mb-5 outline-none bg-white w-8 h-8 rounded-full text-danger text-lg font-semibold text-center">-->
      <!--                  <i class="fa-solid fa-xmark"></i>-->
      <!--                </button>-->
      <!--              </div>-->
      <!--              <div>-->
      <!--                <iframe class="modal-video" width="100%" src="<?php echo $latest_crickets_video->videos;?>" -->
      <!--                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" -->
      <!--                  allowfullscreen>-->
      <!--                </iframe>-->
      <!--              </div>-->
      <!--            </dialog>-->
      <!--          </div>-->
      <!--         <?php } ?>-->
               
      <!--        </div>-->
      <!--      </div>-->

      <!--      <div class="w-[300px] max-h-[500px] m-auto">-->
      <!--        <div-->
      <!--          class="h-full rounded-xl grid place-content-center text-center"-->
      <!--        >-->
      <!--            <?php echo $home_ads[1]->embed_code;?>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</section>-->

      <!-- About section -->
      <section class="mb-10 lg:mb-20">
        <div class="custom-container">
          <div class="grid lg:grid-cols-3">
            <div class="col-span-2 space-y-4 lg:space-y-5">
              <h3 class="text-sm lg:text-base text-[#342F31]">About Cricket</h3>
              <h5 class="text-base lg:text-xl font-semibold text-[#342F31]">Live Cricket Score</h5>
              <p class="text-sm lg:text-base text-[#342F31]">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </p>
              <h5 class="text-base lg:text-xl font-semibold text-[#342F31]">Today's Cricket Match Live Score</h5>
              <p class="text-sm lg:text-base text-[#342F31]">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </p>
              <h5 class="text-base lg:text-xl font-semibold text-[#342F31]">Women's Cricket Live Score</h5>
              <p class="text-sm lg:text-base text-[#342F31]">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </p>
            </div>
          </div>
          
        </div>
      </section>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="./src/videoModal.js"></script>

<script>
  $(document).ready(function(){ 
   
    function cricketApi(value = "cricket",api_key="afaac2bb003f9d1496139436d4c337cf230d6cf894915206e342e148f7df084f"){
        //console.log(value);
         // document.addEventListener('DOMContentLoaded', function() {
        const apiUrl = `https://apiv2.allsportsapi.com/${value}/?met=Livescore&APIkey=${api_key}`; // Replace with your API URL
    
        // Fetch data from the API
        fetch(apiUrl)
            .then(response => {
               // Check if the response is successful
               if (!response.ok) {
                    throw new Error('Network response was not ok');
               }
                // Parse JSON data from the response
                return response.json();
            })
            .then(data => {
                // Append data to HTML
                // const container = document.getElementById('match_list');
                var allMatch = data.result;
                //console.log(allMatch);
    
                //data.forEach(allMatch => {
                //     const div = document.createElement('div');
                   // div.textContent = item.title;
                   // container.appendChild(div);
                //});
    
                 var html = '';
                for(var i=0;i<allMatch.length;i++){
    
                  if(value == 'cricket'){
                      var league_name = allMatch[i].league_name;
                      var event_home_team = allMatch[i].event_home_team;
                      var event_home_team_logo = allMatch[i].event_home_team_logo;
                      var event_away_team = allMatch[i].event_away_team;
                      var event_away_team_logo = allMatch[i].event_away_team_logo;
                      var event_date_start = allMatch[i].event_date_start;
                      var event_date_stop = allMatch[i].event_date_stop;
                      var event_status_info = allMatch[i].event_status_info;
                      var event_toss = allMatch[i].event_toss;
                      var event_home_final_result = allMatch[i].event_home_final_result;
                      var event_away_final_result = allMatch[i].event_away_final_result;
    
                      if(event_home_final_result==''){
                        event_home_final_result = '--';
                      }
                      if(event_away_final_result==''){
                        event_away_final_result = '--';
                      }
                      if(event_date_start == event_date_stop){
                        var event_date = event_date_start
                      }else{
                        var event_date = event_date_start+'-'+event_date_stop;
                      }
                  }

                  html +=`<div class="slider-item min-w-[276px] lg:min-w-[350px] border-[#D9D9D9] border-2 py-3 lg:py-5 px-4 lg:px-6 bg-[#F8F8F8] rounded-xl">
                    <div class="flex justify-between items-start gap-2">
                      <div>
                        <h4 class="text-[10px] lg:text-[11px] leading-[14px] text-black">
                        ${league_name}
                        </h4>
                        <p class="mt-.5 text-[10px] lg:text-[11px] leading-[11px] text-black font-semibold">${event_date}</p>
                      </div>
                      <div
                        class="shrink-0 rounded py-1 px-1.5 bg-red-200 text-[10px]  flex gap-1.5 items-center"
                      >
                        <i class="fa-regular text-[#D32F2F] fa-circle-dot"></i>
                        <span clas="text-[#D32F2F]">Live</span>
                      </div>
                    </div>

                    <div class="my-5 flex justify-between items-start gap-2 lg:gap-4">
                      <div class="shrink-0 flex items-center gap-3">
                        <img src="${event_home_team_logo}" class="w-7 lg:h-7 lg:w-12 lg:h-12 rounded-full"/>
                        <div>
                          <h6 class="text-[10px] text-black lg:text-[11px] leading-4 text-[#F1F5F9] uppercase">${event_home_team}</h6>
                          <p class="mt-.5 text-xs  font-semibold">${event_home_final_result}</p>
                        </div>
                      </div>

                      <div class="shrink-0 text-black text-xs lg:text-sm font-medium">VS</div>

                      <div class="shrink-0 flex items-center gap-3">
                        <img
                          src="${event_away_team_logo}"
                          alt="Srilanka flag"
                          class="w-7 lg:h-7 lg:w-12 lg:h-12 rounded-full"
                        />
                        <div>
                          <h6 class="text-[10px] text-black lg:text-[11px] leading-4 text-[#F1F5F9] uppercase">${event_away_team}</h6>
                          <p class="mt-.5 text-xs  font-semibold">${event_away_final_result}</p>
                        </div>
                      </div>
                    </div>

                    <p class="text-[10px] lg:text-[11px] leading-[15px] text-black">
                      ${event_status_info}
                    </p>
                  </div>`;
                  
                    $(".banner-slider").html(html);
                }
            })
            .catch(error => {
                   html = `<div class="min-w-[276px] lg:min-w-[350px] py-3 lg:py-5 px-4 lg:px-6 bg-secondary rounded-xl">
              <div class="flex justify-between items-start gap-2">
                <div>
                  <h4 class="text-[10px] lg:text-[15px] leading-[18px] font-bold text-white">
                    Zimbabwe Tour of Sri Lanka, 2024
                  </h4>
                  <p class="lg:mt-1.5 text-[10px] lg:text-sm text-white">2nd ODi | 08 Jan 2024</p>
                </div>
                <div
                  class="shrink-0 rounded py-1 px-1.5 bg-primary/25 text-xs lg:text-sm text-primary flex gap-1.5 items-center"
                >
                  <i class="fa-regular fa-circle-dot"></i>
                  <span>Live</span>
                </div>
              </div>

              <div class="my-5 flex justify-between items-start gap-2 lg:gap-4">
                <div class="shrink-0 flex items-center gap-3">
                  <img
                    src="./src/images/global/srilanka-flag.png"
                    alt="Srilanka flag"
                    class="w-7 lg:w-auto"
                  />
                  <div>
                    <h6 class="text-[10px] lg:text-sm text-[#F1F5F9] uppercase">SRI LANKA</h6>
                    <p class="mt-.5 text-xs lg:text-base text-white font-semibold">169/7 (41.4)</p>
                  </div>
                </div>

                <div class="shrink-0 text-primary text-xs lg:text-2xl font-medium">VS</div>

                <div class="shrink-0 flex items-center gap-3">
                  <img
                    src="./src/images/global/zim-flag.png"
                    alt="Srilanka flag"
                    class="w-7 lg:w-auto"
                  />
                  <div>
                    <h6 class="text-[10px] lg:text-sm text-[#F1F5F9] uppercase">SRI LANKA</h6>
                    <p class="mt-.5 text-xs lg:text-base text-white font-semibold">169/7 (41.4)</p>
                  </div>
                </div>
              </div>

              <p class="text-[11px] lg:text-[15px] leading-[18px] text-primary font-semibold">
                Sri Lanka need 40 runs in 50 balls at 4.8 rpo
              </p>
            </div>`; 
           
               
                $(".banner-slider").html(html);
            });
    // });
    
    const scrollport = document.getElementById('scrollport');
      let isDown = false;
      let startX;
      let scrollLeft;
    
      scrollport.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - scrollport.offsetLeft;
        scrollLeft = scrollport.scrollLeft;
      });
    
      scrollport.addEventListener('mouseleave', () => {
        isDown = false;
      });
    
      scrollport.addEventListener('mouseup', () => {
        isDown = false;
      });
    
      scrollport.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - scrollport.offsetLeft;
        const walk = (x - startX) * 2; // Adjust scrolling speed here
        scrollport.scrollLeft = scrollLeft - walk;
      });

}

cricketApi();

// Call the function every 5 seconds
setInterval(cricketApi, 5000);

});


</script>