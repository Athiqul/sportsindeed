      <!-- Slider section -->
      <section class="section-padding">
        <div class="custom-container">
          <div class="mb-5 flex justify-between items-center">
            <h1 class="section-heading">Latest Score</h1>
            <select name="games" id="games" class="py-3 px-6 rounded-lg bg-transparent border border-[#D8DCE3] text-xs lg:text-base font-semibold outline-none">
              <option value="cricket">Cricket</option>
              <option value="football">Football</option>
            </select>
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
          <div class="rounded-xl max-h-[90px] grid place-content-center text-center">
            <?php echo $home_ads[0]->embed_code; ?>
          </div>
        </div>
      </section>

      <!-- News section -->
      <section class="section-padding">
        <div class="custom-container">
          <div class="flex flex-col lg:flex-row gap-10 md:gap-6 xl:gap-10">
            <div class="flex flex-col lg:flex-row gap-5 xl:gap-7">
              <div class="lg:w-[55%]">
                <div class="news-card-big bg-transparent  border-[#D9D9D9] ">
                  <div class="big-img mobile-big-img">
                    <img src="<?php echo base_url() ?>uploads/<?php echo $latest_random_news[0]->image; ?>" alt="poster" class="h-full w-full rounded-t-xl" />
                  </div>
                  <div class="px-3 py-4">
                    <h4 class="mb-3 text-lg lg:text-2xl font-semibold  ellipsis-text">
                      <a href="<?php echo base_url('news-details/') . 'featured-cricket' . '/' . $latest_random_news[0]->encode_title; ?>"><?php echo strlen($latest_random_news[0]->title) > 100 ? substr($latest_random_news[0]->title, 0, 100) . '...' : $latest_random_news[0]->title; ?></a>
                    </h4>
                    <div class="flex justify-between items-center">
                      <p class="text-[#494549]">News</p>
                      <a onclick="shareContent('<?php echo $latest_random_news[0]->stitle ?>','<?php echo $latest_random_news[0]->stitle ?>','<?php echo base_url('news-details/') . 'featured-cricket' . '/' . $latest_random_news[0]->encode_title; ?>')">
                        <img src="<?php echo base_url(); ?>/src/images/global/share.png" alt="share icon" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="lg:w-[45%] space-y-4 md:space-y-0 lg:space-y-4 md:grid lg:block md:grid-cols-2  lg:grid-cols-1 md:gap-4 lg:gap-0">
                <?php foreach ($latest_random_news as $key => $latest_random_new) { ?>
                  <?php
                  if ($key == 0) {
                    continue;
                  }
                  ?>
                  <div class="news-card-small bg-transparent   border-[#D9D9D9] border-2">
                    <div class="small-img">
                      <img src="<?php echo base_url() ?>uploads/<?php echo $latest_random_new->image; ?>" alt="poster" />
                    </div>
                    <div class="news-card-small-content">
                      <h4 class="news-small-heading text-black">
                        <a href="<?php echo base_url('news-details/') . 'featured-cricket' . '/' . $latest_random_new->encode_title; ?>"><?php echo strlen($latest_random_new->title) > 100 ? substr($latest_random_new->title, 0, 100) . '...' : $latest_random_new->title; ?></a>
                      </h4>
                      <div class="flex justify-between items-center">
                        <p class="text-[#494549]">News</p>
                        <a onclick="shareContent('<?php echo $latest_random_new->encode_title; ?>','<?php echo $latest_random_new->encode_title ?>','<?php echo base_url('news-details/') . 'featured-cricket' . '/' . $latest_random_new->encode_title; ?>')">
                          <img src="./src/images/global/share.png" alt="share icon" />
                        </a>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div class="w-[300px] shrink-0 m-auto">
              <div class="h-[250px] add-height">
                <a href=""><?php echo $home_ads[1]->embed_code; ?></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Cricket section -->
      <section>
        <div class="custom-container">
          <h1 class="mb-5 section-heading">Cricket</h1>
          <div class="flex flex-col lg:flex-row gap-5 xl:gap-7">
            <div class="lg:w-[33%]">
              <div class="news-card-big bg-transparent border-[#D9D9D9]">
                <div class="big-img mobile-big-img">
                  <img src="<?php echo base_url() ?>uploads/<?php echo $latest_crickets_news[0]->image; ?>" alt="poster" class="h-full w-full rounded-t-xl" />
                </div>
                <div class="px-3 py-4">
                  <h4 class="news-big-heading text-black ellipsis-text">
                    <a href="<?php echo base_url('news-details/') . 'cricket' . '/' . $latest_crickets_news[0]->encode_title; ?>"><?php echo strlen($latest_crickets_news[0]->title) > 100 ? substr($latest_crickets_news[0]->title, 0, 100) . '...' : $latest_crickets_news[0]->title; ?></a>
                  </h4>
                  <div class="flex justify-between items-center">
                    <p class="text-[#494549]">News</p>
                    <a onclick="shareContent('<?php echo $latest_crickets_news[0]->encode_title ?>','<?php echo $latest_crickets_news[0]->encode_title ?>','<?php echo base_url('news-details/') . 'cricket' . '/' . $latest_crickets_news[0]->encode_title; ?>')">
                      <img src="./src/images/global/share.png" alt="share icon" />
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="lg:w-[66%] space-y-4">
              <div class="grid md:grid-cols-2 gap-4 xl:gap-6">
                <div class="space-y-4">
                  <?php foreach ($latest_crickets_news as $key => $latest_crickets_new) { ?>
                    <?php
                    if ($key == 0) {
                      continue;
                    }
                    if ($key >= 4) {
                      break;
                    }
                    ?>
                    <div class="news-card-small bg-transparent  border-[#D9D9D9] border-2 ">
                      <div class="small-img">
                        <img src="<?php echo base_url() ?>uploads/<?php echo $latest_crickets_new->image; ?>" alt="poster" />
                      </div>
                      <div class="news-card-small-content">
                        <h4 class="news-small-heading text-black ellipsis-text">
                          <a href="<?php echo base_url('news-details/') . 'cricket' . '/' . $latest_crickets_new->encode_title; ?>"><?php echo strlen($latest_crickets_new->title) > 80 ? substr($latest_crickets_new->title, 0, 80) . '...' : $latest_crickets_new->title; ?></a>
                        </h4>
                        <div class="flex justify-between items-center">
                          <p class="text-[#494549]">News</p>
                          <a onclick="shareContent('<?php echo $latest_crickets_new->encode_title ?>','<?php echo $latest_crickets_new->encode_title ?>','<?php echo base_url('news-details/') . 'cricket' . '/' . $latest_crickets_new->encode_title; ?>')">
                            <img src="./src/images/global/share.png" alt="share icon" />
                          </a>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>

                <div class="space-y-4">
                  <?php
                  $latest_crickets = array_slice($latest_crickets_news, 4);
                  if (isset($latest_crickets)) {
                    foreach ($latest_crickets as $key => $latest_cricket) { ?>
                      <div class="news-card-small bg-transparent border-[#D9D9D9] border-2">
                        <div class="small-img">
                          <img src="<?php echo base_url() ?>uploads/<?php echo $latest_cricket->image; ?>" alt="poster" />
                        </div>
                        <div class="news-card-small-content">
                          <h4 class="news-small-heading text-black ellipsis-text">
                            <a href="<?php echo base_url('news-details/') . 'cricket' . '/' . $latest_cricket->encode_title; ?>"><?php echo strlen($latest_cricket->title) > 80 ? substr($latest_cricket->title, 0, 80) . '...' : $latest_cricket->title; ?></a>
                          </h4>
                          <div class="flex justify-between items-center">
                            <p class="text-[#494549]">News</p>
                            <a onclick="shareContent('<?php echo $latest_cricket->encode_title ?>','<?php echo $latest_cricket->encode_title ?>','<?php echo base_url('news-details/') . 'cricket' . '/' . $latest_cricket->encode_title; ?>')">
                              <img src="./src/images/global/share.png" alt="share icon" />
                            </a>
                          </div>
                        </div>
                      </div>
                  <?php }
                  } ?>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>

      <!-- Advertisement -->
      <section class="section-padding px-7 lg:px-0">
        <div class="custom-container">
          <div class="rounded-xl max-h-[90px] grid place-content-center text-center">
            <h4 class="text-primary text-xl font-semibold"> <?php echo $home_ads[2]->embed_code; ?></h4>
          </div>
        </div>
      </section>

      <!-- Football section -->
      <section>
        <div class="custom-container">
          <h1 class="mb-5 section-heading">Football</h1>
          <div class="flex flex-col lg:flex-row gap-5 xl:gap-7">
            <div class="lg:w-[33%]">
              <div class="news-card-big bg-transparent  border-[#D9D9D9]">
                <div class="big-img mobile-big-img">
                  <img src="<?php echo base_url() ?>uploads/<?php echo $latest_football_news[0]->image; ?>" alt="poster" class="h-full w-full rounded-t-xl" />
                </div>
                <div class="px-3 py-4">
                  <h4 class="news-big-heading text-black ellipsis-text">
                    <a href="<?php echo base_url('news-details/') . 'football' . '/' . $latest_football_news[0]->encode_title; ?>"><?php echo strlen($latest_football_news[0]->title) > 100 ? substr($latest_football_news[0]->title, 0, 100) . '...' : $latest_football_news[0]->title; ?></a>
                  </h4>
                  <div class="flex justify-between items-center">
                    <p class="text-[#494549]">News</p>
                    <a onclick="shareContent('<?php echo $latest_football_news[0]->encode_title ?>','<?php echo $latest_football_news[0]->encode_title ?>','<?php echo base_url('news-details/') . 'football' . '/' . $latest_football_news[0]->encode_title; ?>')">
                      <img src="./src/images/global/share.png" alt="share icon" />
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="lg:w-[66%] space-y-4">
              <div class="grid md:grid-cols-2 gap-4 xl:gap-6">
                <div class="space-y-4">
                  <?php foreach ($latest_football_news as $key => $latest_football_new) { ?>
                    <?php
                    if ($key == 0) {
                      continue;
                    }
                    if ($key >= 4) {
                      break;
                    }
                    ?>
                    <div class="news-card-small bg-transparent border-[#D9D9D9] border-2 ">
                      <div class="small-img">
                        <img src="<?php echo base_url() ?>uploads/<?php echo $latest_football_new->image; ?>" alt="poster" />
                      </div>
                      <div class="news-card-small-content ">
                        <h4 class="news-small-heading text-black ellipsis-text">
                          <a href="<?php echo base_url('news-details/') . 'football' . '/' . $latest_football_new->encode_title; ?>"><?php echo strlen($latest_football_new->title) > 80 ? substr($latest_football_new->title, 0, 80) . '...' : $latest_football_new->title; ?></a>
                        </h4>
                        <div class="flex justify-between items-center">
                          <p class="text-[#494549]">News</p>
                          <a onclick="shareContent('<?php echo $latest_football_new->encode_title ?>','<?php echo $latest_football_new->encode_title ?>','<?php echo base_url('news-details/') . 'football' . '/' . $latest_football_new->encode_title; ?>')">
                            <img src="./src/images/global/share.png" alt="share icon" />
                          </a>
                        </div>
                      </div>
                    </div>
                  <?php } ?>

                </div>

                <div class="space-y-4">
                  <?php
                  $latest_footballs = array_slice($latest_football_news, 4);
                  if (isset($latest_footballs)) {
                    foreach ($latest_footballs as $key => $latest_football) { ?>
                      <div class="news-card-small bg-transparent border-[#D9D9D9]">
                        <div class="small-img">
                          <img src="<?php echo base_url() ?>uploads/<?php echo $latest_football->image; ?>" alt="poster" />
                        </div>
                        <div class="news-card-small-content">
                          <h4 class="news-small-heading text-black ellipsis-text">
                            <a href="<?php echo base_url('news-details/') . 'football' . '/' . $latest_football->encode_title; ?>"><?php echo strlen($latest_football->title) > 80 ? substr($latest_football->title, 0, 80) . '...' : $latest_football->title; ?></a>
                          </h4>
                          <div class="flex justify-between items-center">
                            <p class="text-[#494549]">News</p>
                            <a onclick="shareContent('<?php echo $latest_football->encode_title ?>','<?php echo $latest_football->encode_title ?>','<?php echo base_url('news-details/') . 'football' . '/' . $latest_football->encode_title; ?>')">
                              <img src="./src/images/global/share.png" alt="share icon" />
                            </a>
                          </div>
                        </div>
                      </div>
                  <?php }
                  } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Premier League section -->
      <section class="section-padding">
        <div class="custom-container">
          <h1 class="mb-5 section-heading">Premier League</h1>

          <div class="flex flex-col lg:flex-row gap-5 xl:gap-7">
            <div class="lg:w-[66%]">
              <div class="news-card-big bg-transparent border-[#D9D9D9] border-2 ">
                <div class="h-[505px] xl:h-[600px]">
                  <img src="<?php echo base_url() ?>uploads/<?php echo $premier_league_news[0]->image; ?>" alt="poster" class="h-full w-full rounded-t-xl object-cover" />
                </div>
                <div class="px-3 py-4">
                  <div class="flex justify-between items-center">
                    <h4 class="news-big-heading text-black ellipsis-text">
                      <a href="<?php echo base_url('news-details/') . 'premier-league' . '/' . $premier_league_news[0]->encode_title; ?>"><?php echo strlen($premier_league_news[0]->title) > 100 ? substr($premier_league_news[0]->title, 0, 100) . '...' : $premier_league_news[0]->title; ?></a>
                    </h4>
                    <a onclick="shareContent('<?php echo $premier_league_news[0]->encode_title ?>','<?php echo $premier_league_news[0]->encode_title ?>','<?php echo base_url('news-details/') . 'premier-league' . '/' . $premier_league_news[0]->encode_title; ?>')">
                      <img src="./src/images/global/share.png" alt="share icon" />
                  </div>
                  </a>
                </div>
              </div>
            </div>

            <div class="lg:w-[33%] space-y-4 md:space-y-0 lg:space-y-4 md:grid lg:block md:grid-cols-2 lg:grid-cols-1 md:gap-4 lg:gap-0">
              <?php foreach ($premier_league_news as $key => $premier_league_new) { ?>
                <?php
                if ($key == 0) {
                  continue;
                }
                ?>
                <div class="news-card-small  bg-transparent border-[#D9D9D9] border-2">
                  <div class="small-img">
                    <img src="<?php echo base_url() ?>uploads/<?php echo $premier_league_new->image; ?>" alt="poster" />
                  </div>
                  <div class="news-card-small-content bg-transparent">
                    <h4 class="news-small-heading text-black ellipsis-text">
                      <a href="<?php echo base_url('news-details/') . 'premier-league' . '/' . $premier_league_new->encode_title; ?>"><?php echo strlen($premier_league_new->title) > 80 ? substr($premier_league_new->title, 0, 80) . '...' : $premier_league_new->title; ?></a>
                    </h4>
                    <div class="flex justify-between items-center">
                      <p class="text-[#494549]">News</p>
                      <a onclick="shareContent('<?php echo $premier_league_new->encode_title ?>','<?php echo $premier_league_new->encode_title ?>','<?php echo base_url('news-details/') . 'premier-league' . '/' . $premier_league_new->encode_title; ?>')">
                        <img src="./src/images/global/share.png" alt="share icon" />
                      </a>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </section>

      <!-- Advertisement -->
      <section class="px-7 lg:px-0">
        <div class="custom-container">
          <div class="rounded-xl max-h-[90px] grid place-content-center text-center">
            <h4 class="text-primary text-xl font-semibold"><?php echo $home_ads[3]->embed_code; ?></h4>
          </div>
        </div>
      </section>

      <!-- Kabaddi section -->
      <section class="section-padding">
        <div class="custom-container">
          <h1 class="mb-5 section-heading">Kabaddi</h1>
          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6">
            <?php foreach ($kabadi_news as $key => $kabadi_news_data) { ?>
              <div class="news-card-big bg-transparent  border-[#D9D9D9]">
                <div class="big-img mobile-big-img">
                  <img src="<?php echo base_url() ?>uploads/<?php echo $kabadi_news_data->image; ?>" alt="poster" class="h-full w-full rounded-t-xl" />
                </div>
                <div class="px-3 py-4">
                  <h4 class="news-big-heading text-black ellipsis-text">
                    <a href="<?php echo base_url('news-details/') . 'kabadi' . '/' . $kabadi_news_data->encode_title; ?>"><?php echo strlen($kabadi_news_data->title) > 70 ? substr($kabadi_news_data->title, 0, 70) . '...' : $kabadi_news_data->title; ?></a>
                  </h4>
                  <div class="flex justify-between items-center">
                    <p class="text-[#494549]">News</p>
                    <a onclick="shareContent('<?php echo $kabadi_news_data->encode_title ?>','<?php echo $kabadi_news_data->encode_title ?>','<?php echo base_url('news-details/') . 'kabadi' . '/' . $kabadi_news_data->encode_title; ?>')">
                      <img src="./src/images/global/share.png" alt="share icon" />
                    </a>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </section>


      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

      <script>
        $(document).ready(function() {

          function cricketApi(value = "cricket", api_key = "afaac2bb003f9d1496139436d4c337cf230d6cf894915206e342e148f7df084f") {
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
                console.log(allMatch);

                //data.forEach(allMatch => {
                //     const div = document.createElement('div');
                // div.textContent = item.title;
                // container.appendChild(div);
                //});

                var html = '';
                for (var i = 0; i < allMatch.length; i++) {

                  if (value == 'cricket') {
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

                    if (event_home_final_result == '') {
                      event_home_final_result = '--';
                    }
                    if (event_away_final_result == '') {
                      event_away_final_result = '--';
                    }
                    if (event_date_start == event_date_stop) {
                      var event_date = event_date_start
                    } else {
                      var event_date = event_date_start + '-' + event_date_stop;
                    }
                  }
                  if (value == 'football') {
                    var league_name = allMatch[i].league_name;
                    var event_home_team = allMatch[i].event_home_team;
                    var event_home_team_logo = allMatch[i].home_team_logo;
                    var event_away_team = allMatch[i].event_away_team;
                    var event_away_team_logo = allMatch[i].away_team_logo;
                    var event_date = allMatch[i].event_date;
                    var event_status_info = 'Final Result: ' + allMatch[i].event_final_result;
                    var event_toss = allMatch[i].event_toss;
                    var event_home_final_result = allMatch[i].event_home_final_result ? allMatch[i].event_home_final_result : '';
                    var event_away_final_result = allMatch[i].event_away_final_result ? allMatch[i].event_away_final_result : '';

                    if (event_home_final_result == '') {
                      event_home_final_result = '--';
                    }
                    if (event_away_final_result == '') {
                      event_away_final_result = '--';
                    }
                  }


                  // Truncate league_name to 20 characters
                  if (league_name.length > 25) {
                    league_name = league_name.substring(0, 25) + '...';
                  }


                  if (event_home_team.length > 12) {
                    event_home_team = event_home_team.substring(0, 10) + '..';
                  }


                  if (event_away_team.length > 12) {
                    event_away_team = event_away_team.substring(0, 10) + '..';
                  }


                  var homeTeamLogoHtml = event_home_team_logo ? `<img src="${event_home_team_logo}" class="w-7 lg:h-7 lg:w-12 lg:h-12 "/>` : '';
                  var awayTeamLogoHtml = event_away_team_logo ? `<img src="${event_away_team_logo}" class="w-7 lg:h-7 lg:w-12 lg:h-12 "/>` : '';

                  html += `<div class="slider-item w-80 lg:w-90 h-[156px] shrink-0 border [background:#F8F8F8] rounded-xl border-solid border-[#D9D9D9]   py-2  px-4  ">
                    <div class="flex justify-between items-start gap-2">
                      <div class="flex flex-col gap-1">
                        <h4 class=" text-[#980000]  text-[11px] font-normal leading-[13px] capitalize">
                        ${league_name}
                        </h4>
                        <p class="mt-.5 text-[10px] lg:text-[11px] leading-[11px] text-black font-semibold">${event_date}</p>
                      </div>
                      <div
                        class="shrink-0 rounded-sm py-1 px-1.5 bg-[#D32F2F] text-[10px]  flex gap-1.5 items-center "
                      >
                        
                        <span class="text-white capitalize">LIVE</span>
                      </div>
                    </div>

                    <div class="my-5 flex justify-between items-start gap-2 lg:gap-4">
                      <div class="shrink-0 flex items-center gap-3">
                        ${homeTeamLogoHtml}
                        <div class="flex flex-col gap-2">
                          <h6 class="text-[#1B1F23]   text-[12px] font-bold leading-3 uppercase">${event_home_team}</h6>
                          <p class="text-[#980000]  text-xs font-bold leading-[14px] uppercase">${event_home_final_result}</p>
                        </div>
                      </div>

                      <div class="shrink-0 text-[#980000] text-xs lg:text-sm font-medium">VS</div>

                      <div class="shrink-0 flex items-center gap-3">
                        ${awayTeamLogoHtml}
                        <div class="flex flex-col gap-2">
                          <h6 class="text-[#1B1F23]   text-[12px] font-bold leading-3 uppercase">${event_away_team}</h6>
                          <p class="text-[#980000]  text-xs font-bold leading-[14px] uppercase">${event_away_final_result}</p>
                        </div>
                      </div>
                    </div>

                    <p class="text-[#980000] text-start  text-[11px] font-medium leading-[18px] uppercase">
                      ${event_status_info}
                    </p>
                  </div>`;

                  $(".banner-slider").html(html);
                }
              })
              .catch(error => {
                html = `<div class="slider-item w-80 lg:w-90 h-[156px] shrink-0 border [background:#F8F8F8] rounded-xl border-solid border-[#D9D9D9]   py-2  px-4  ">
                    <div class="flex justify-between items-start gap-2">
                      <div class="flex flex-col gap-1">
                        <h4 class=" text-[#980000]  text-[11px] font-normal leading-[13px] capitalize">
                        Vitality Blast
                        </h4>
                        <p class="mt-.5 text-[10px] lg:text-[11px] leading-[11px] text-black font-semibold">2024-06-01</p>
                      </div>
                      <div class="shrink-0 rounded-sm py-1 px-1.5 bg-[#D32F2F] text-[10px]  flex gap-1.5 items-center ">
                        
                        <span class="text-white capitalize">LIVE</span>
                      </div>
                    </div>

                    <div class="my-5 flex justify-between items-start gap-2 lg:gap-4">
                      <div class="shrink-0 flex items-center gap-3">
                        
                        <div class="flex flex-col gap-2">
                          <h6 class="text-[#1B1F23] text-center  text-[12px] font-bold leading-3 uppercase">Birmingham..</h6>
                          <p class="text-[#980000] text-center  text-xs font-bold leading-[14px] uppercase">149</p>
                        </div>
                      </div>

                      <div class="shrink-0 text-[#980000] text-xs lg:text-sm font-medium">VS</div>

                      <div class="shrink-0 flex items-center gap-3">
                        <img src="https://apiv2.allsportsapi.com/logo-cricket/240_nottinghamshire.jpg" class="w-7 lg:h-7 lg:w-12 lg:h-12 ">
                        <div class="flex flex-col gap-2">
                          <h6 class="text-[#1B1F23] text-center  text-[12px] font-bold leading-3 uppercase">Nottingham..</h6>
                          <p class="text-[#980000] text-center  text-xs font-bold leading-[14px] uppercase">127</p>
                        </div>
                      </div>
                    </div>

                    <p class="text-[#980000] text-start  text-[11px] font-medium leading-[18px] uppercase">
                      Bears won by 22 runs
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
          intervalId = setInterval(function() {
            cricketApi();
          }, 5000);

          $("#games").change(function() {
            var selectedValue = $(this).val();
            clearInterval(intervalId);
            if (selectedValue == 'cricket') {
              cricketApi(selectedValue, 'afaac2bb003f9d1496139436d4c337cf230d6cf894915206e342e148f7df084f');
              intervalId = setInterval(function() {
                cricketApi(selectedValue, 'afaac2bb003f9d1496139436d4c337cf230d6cf894915206e342e148f7df084f');
              }, 5000);
            }
            if (selectedValue == 'football') {
              cricketApi(selectedValue, 'afaac2bb003f9d1496139436d4c337cf230d6cf894915206e342e148f7df084f');
              intervalId = setInterval(function() {
                cricketApi(selectedValue, 'afaac2bb003f9d1496139436d4c337cf230d6cf894915206e342e148f7df084f');
              }, 5000);
            }
          });
        });
      </script>