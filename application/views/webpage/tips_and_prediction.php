
      <!-- Advertisement -->
      <section class="px-7 lg:px-0 mt-10 lg:mt-4 mb-10">
        <div class="custom-container">
          <div
            class="rounded-xl max-h-[90px] grid place-content-center text-center"
          >
            <?php echo $home_ads[0]->embed_code;?>
          </div> 
        </div>
      </section>

      <!-- Breadcrumbs -->
      <section>
        <div class="custom-container">
          <ul>
            <li class="flex items-center gap-4">
              <span class="text-[#444D56] font-medium"><a href="">Home</a></span>
              <span class="text-[#73738C] font-semibold"> > </span>
              <span class="text-[#73738C] font-medium">Tops & Predictions</span>
            </li>
          </ul>
        </div>
      </section>

      <!-- Top Betting site in india -->
      <section class="mt-7 mb-10">
        <div class="custom-container">
          <div class="flex justify-between items-center mb-5">
            <h1 class="text-black text-xl lg:text-3xl font-semibold">Top Betting site in india</h1>
          </div>

          <div class="space-y-4 lg:space-y-5">
              
            <?php
                $i=0;
                foreach($all_tips_predictions as $key=>$all_tips_prediction){
                $i++;
            ?>
            <!-- Item -->
            <div class="py-6 lg:py-4 px-3 lg:px-5 rounded-xl bg-cover bg-no-repeat bg-center flex flex-col lg:flex-row justify-between items-center gap-4" style="background-color: <?php echo $all_tips_prediction->color;?>;">
              <div class="lg:w-[80%] 2xl:w-[75%] grid grid-cols-3 lg:grid-cols-6 gap-2 2xl:gap-4">
                <div class="col-span-2 flex">
                  <div style="background: linear-gradient(161deg, rgba(255, 255, 255, 0.35) 15.68%, rgba(255, 255, 255, 0.00) 98.26%);" class="shrink-0 text-white w-14 lg:w-[90px] rounded-l-xl text-xl lg:text-[40px] font-medium grid place-content-center">
                   <?= $key+1;?>
                  </div>
                  <div style="background: linear-gradient(161deg, rgba(255, 255, 255, 0.35) 15.68%, rgba(255, 255, 255, 0.00) 98.26%);" class="grow rounded-r-xl p-4 2xl:pr-10 grid place-content-center">
                    <img class="h-20 w-[230px] object-contain" src="<?php echo base_url()?>assets/newDesign/tipsPrediction/<?php echo $all_tips_prediction->logo;?>" alt="1xbet logo">
                  </div>
                </div>

                <div style="background: linear-gradient(161deg, rgba(255, 255, 255, 0.35) 15.68%, rgba(255, 255, 255, 0.00) 98.26%);" class="px-2 py-3 2xl:p-5 rounded-xl text-center space-y-2">
                  <p class="text-white text-xs xl:text-base font-semibold">Welcome Bonus</p>
                  <p class="text-white font-semibold text-base lg:text-lg xl:text-2xl">₹<?php echo $all_tips_prediction->welcome_bonus;?></p>
                  <p class="text-white text-xs xl:text-base font-semibold">Bet credit</p>
                </div>

                <div style="background: linear-gradient(161deg, rgba(255, 255, 255, 0.35) 15.68%, rgba(255, 255, 255, 0.00) 98.26%);" class="px-2 py-3 2xl:p-5 rounded-xl text-center space-y-2">
                  <img src="./src/images/listing/power.png" alt="power icon" class="m-auto">
                  <p class="text-white text-xs xl:text-base font-semibold">Win Rate</p>
                  <p class="text-white font-semibold text-base lg:text-lg xl:text-2xl"><?php echo $all_tips_prediction->win_rate;?>%</p>
                </div>

                <div style="background: linear-gradient(161deg, rgba(255, 255, 255, 0.35) 15.68%, rgba(255, 255, 255, 0.00) 98.26%);" class="px-2 py-3 2xl:p-5 rounded-xl text-center space-y-2">
                  <img src="./src/images/listing/time-pay.png" alt="time pay icon" class="m-auto">
                  <p class="text-white text-xs xl:text-base font-semibold">Payout</p>
                  <p class="text-white font-semibold text-base lg:text-lg xl:text-2xl"><?php echo $all_tips_prediction->payout;?></p>
                </div>

                <div style="background: linear-gradient(161deg, rgba(255, 255, 255, 0.35) 15.68%, rgba(255, 255, 255, 0.00) 98.26%);" class="px-1 py-3 2xl:p-5 rounded-xl text-center space-y-2 grid place-content-center">
                  <p style="text-align:center;color:#ffffff;">
                  <?php 
                    for($i=1;$i<=$j=5;$i++){
                        if($i<=$all_tips_prediction->rating){
                            $text = 'checked';
                            $color = '#ff8100';
                        }else{
                            $text = '';
                            $color = '';
                        }
                  ?>
                    <span class="fa fa-star <?=$text?>" style="font-size: 11px;color:<?=$color?>;"></span>
                    
                <?php
                    }
                ?>
                </p>
                  <p class="text-white text-xs 2xl:text-sm font-bold"><?php echo $all_tips_prediction->rating;?>( Read review )</p>
                </div>
              </div>

              <div class="lg:w-[20%] 2xl:w-[25%] mt-7 lg:mt-0 text-center lg:text-right">
                <a target="_blank" style="background: linear-gradient(161deg, rgba(255, 255, 255, 0.35) 15.68%, rgba(255, 255, 255, 0.00) 98.26%);" href="<?php echo $all_tips_prediction->website_url;?>" class="text-white rounded-xl py-2.5 xl:py-4 px-3.5 xl:px-8 font-bold text-sm uppercase inline-block shadow-[0px_13px_37px_0px_#00000036]">
                  <span class="mb-1">View more</span>
                  <i class="fa-solid fa-up-right-from-square text-lg 2xl:text-2xl pl-3"></i>
                </a>
                <p class="mt-2 text-sm text-[#C7C7C7]">New Customer only. 18+ T & 1 apply</p>
              </div>
            </div>

            <?php } ?>
            <!-- Item -->
            <!--<div class="py-6 lg:py-4 px-3 lg:px-5 rounded-xl bg-cover bg-no-repeat bg-center flex flex-col lg:flex-row justify-between items-center gap-4" style="background-image: url('./src/images/listing/gradient-2.png');">-->
            <!--  <div class="lg:w-[70%] grid grid-cols-3 lg:grid-cols-6 gap-2 lg:gap-4">-->
            <!--    <div class="col-span-2 flex">-->
            <!--      <div class="shrink-0 bg-[#dbde85] bg-gradient-to-t from-[#757729] to-[#c9cd6a] text-white w-14 lg:w-[90px] rounded-l-xl text-xl lg:text-[40px] font-medium grid place-content-center">-->
            <!--        02-->
            <!--      </div>-->
            <!--      <div class="bg-[#c9cd6a] bg-gradient-to-t from-[#6d7010] to-[#c9cd6a] rounded-r-xl p-4 lg:pr-10 grid place-content-center">-->
            <!--        <img src="./src/images/listing/1xbet.png" alt="1xbet logo">-->
            <!--      </div>-->
            <!--    </div>-->

            <!--    <div class="bg-[#c9cd6a] bg-gradient-to-t from-[#6d7010] to-[#c9cd6a] px-2 py-3 lg:p-5 rounded-xl text-center space-y-2">-->
            <!--      <p class="text-white text-xs lg:text-base font-semibold">Welcome Bonus</p>-->
            <!--      <p class="text-white font-semibold text-base lg:text-2xl">₹62000</p>-->
            <!--      <p class="text-white text-xs lg:text-base font-semibold">Bet credit</p>-->
            <!--    </div>-->

            <!--    <div class="bg-[#c9cd6a] bg-gradient-to-t from-[#6d7010] to-[#c9cd6a] px-2 py-3 lg:p-5 rounded-xl text-center space-y-2">-->
            <!--      <img src="./src/images/listing/power.png" alt="power icon" class="m-auto">-->
            <!--      <p class="text-white text-xs lg:text-base font-semibold">Win Rate</p>-->
            <!--      <p class="text-white font-semibold text-base lg:text-2xl">97.41%</p>-->
            <!--    </div>-->

            <!--    <div class="bg-[#c9cd6a] bg-gradient-to-t from-[#6d7010] to-[#c9cd6a] px-2 py-3 lg:p-5 rounded-xl text-center space-y-2">-->
            <!--      <img src="./src/images/listing/time-pay.png" alt="time pay icon" class="m-auto">-->
            <!--      <p class="text-white text-xs lg:text-base font-semibold">Win Rate</p>-->
            <!--      <p class="text-white font-semibold text-base lg:text-2xl">97.41%</p>-->
            <!--    </div>-->

            <!--    <div class="bg-[#c9cd6a] bg-gradient-to-t from-[#6d7010] to-[#c9cd6a] px-1 py-3 lg:p-5 rounded-xl text-center space-y-2 grid place-content-center">-->
            <!--      <img src="./src/images/listing/stars.png" alt="stars icon" class="m-auto">-->
            <!--      <p class="text-white text-xs lg:text-[15px] font-bold">4.5( Read review )</p>-->
            <!--    </div>-->
            <!--  </div>-->

            <!--  <div class="lg:w-[30%] mt-7 lg:mt-0 text-center lg:text-right">-->
            <!--    <a href="" class="bg-[#F8FF00] text-black rounded-xl py-4 px-8 font-bold text-sm uppercase inline-block shadow-[0px_13px_37px_0px_#00000036]">-->
            <!--      <span class="mb-1">View more</span>-->
            <!--      <i class="fa-solid fa-up-right-from-square text-2xl pl-3"></i>-->
            <!--    </a>-->
            <!--    <p class="mt-2 text-sm text-[#C7C7C7]">New Customer only. 18+ T & 1 apply</p>-->
            <!--  </div>-->
            <!--</div>-->

            <!-- Item -->
            <!--<div class="py-6 lg:py-4 px-3 lg:px-5 rounded-xl bg-cover bg-no-repeat bg-center flex flex-col lg:flex-row justify-between items-center gap-4" style="background-image: url('./src/images/listing/gradient-1.png');">-->
            <!--  <div class="lg:w-[70%] grid grid-cols-3 lg:grid-cols-6 gap-2 lg:gap-4">-->
            <!--    <div class="col-span-2 flex">-->
            <!--      <div class="shrink-0 bg-[#659ef4] bg-gradient-to-t from-[#4E77E1] to-[#659ef4] text-white w-14 lg:w-[90px] rounded-l-xl text-xl lg:text-[40px] font-medium grid place-content-center">-->
            <!--        03-->
            <!--      </div>-->
            <!--      <div class="bg-[#2c78ec] bg-gradient-to-t from-[#3b55d1] to-[#659ef4] rounded-r-xl p-4 lg:pr-10 grid place-content-center">-->
            <!--        <img src="./src/images/listing/1xbet.png" alt="1xbet logo">-->
            <!--      </div>-->
            <!--    </div>-->

            <!--    <div class="bg-[#659ef4] bg-gradient-to-t from-[#3b55d1] to-[#659ef4] px-2 py-3 lg:p-5 rounded-xl text-center space-y-2">-->
            <!--      <p class="text-white text-xs lg:text-base font-semibold">Welcome Bonus</p>-->
            <!--      <p class="text-white font-semibold text-base lg:text-2xl">₹62000</p>-->
            <!--      <p class="text-white text-xs lg:text-base font-semibold">Bet credit</p>-->
            <!--    </div>-->

            <!--    <div class="bg-[#659ef4] bg-gradient-to-t from-[#3b55d1] to-[#659ef4] px-2 py-3 lg:p-5 rounded-xl text-center space-y-2">-->
            <!--      <img src="./src/images/listing/power.png" alt="power icon" class="m-auto">-->
            <!--      <p class="text-white text-xs lg:text-base font-semibold">Win Rate</p>-->
            <!--      <p class="text-white font-semibold text-base lg:text-2xl">97.41%</p>-->
            <!--    </div>-->

            <!--    <div class="bg-[#659ef4] bg-gradient-to-t from-[#3b55d1] to-[#659ef4] px-2 py-3 lg:p-5 rounded-xl text-center space-y-2">-->
            <!--      <img src="./src/images/listing/time-pay.png" alt="time pay icon" class="m-auto">-->
            <!--      <p class="text-white text-xs lg:text-base font-semibold">Win Rate</p>-->
            <!--      <p class="text-white font-semibold text-base lg:text-2xl">97.41%</p>-->
            <!--    </div>-->

            <!--    <div class="bg-[#659ef4] bg-gradient-to-t from-[#3b55d1] to-[#659ef4] px-1 py-3 lg:p-5 rounded-xl text-center space-y-2 grid place-content-center">-->
            <!--      <img src="./src/images/listing/stars.png" alt="stars icon" class="m-auto">-->
            <!--      <p class="text-white text-xs lg:text-[15px] font-bold">4.5( Read review )</p>-->
            <!--    </div>-->
            <!--  </div>-->

            <!--  <div class="lg:w-[30%] mt-7 lg:mt-0 text-center lg:text-right">-->
            <!--    <a href="" class="bg-[#FC4C04] text-white rounded-xl py-4 px-8 font-bold text-sm uppercase inline-block shadow-[0px_13px_37px_0px_#00000036]">-->
            <!--      <span class="mb-1">View more</span>-->
            <!--      <i class="fa-solid fa-up-right-from-square text-2xl pl-3"></i>-->
            <!--    </a>-->
            <!--    <p class="mt-2 text-sm text-[#C7C7C7]">New Customer only. 18+ T & 1 apply</p>-->
            <!--  </div>-->
            <!--</div>-->

             <!-- Item -->
            <!-- <div class="py-6 lg:py-4 px-3 lg:px-5 rounded-xl bg-cover bg-no-repeat bg-center flex flex-col lg:flex-row justify-between items-center gap-4" style="background-image: url('./src/images/listing/gradient-3.png');">-->
            <!--  <div class="lg:w-[70%] grid grid-cols-3 lg:grid-cols-6 gap-2 lg:gap-4">-->
            <!--    <div class="col-span-2 flex">-->
            <!--      <div class="shrink-0 bg-[#cea3e3] bg-gradient-to-t from-[#8b57ce] to-[#cea3e3] text-white w-14 lg:w-[90px] rounded-l-xl text-xl lg:text-[40px] font-medium grid place-content-center">-->
            <!--        04-->
            <!--      </div>-->
            <!--      <div class="bg-[#be90dd] bg-gradient-to-t from-[#8b57ce] to-[#be90dd] rounded-r-xl p-4 lg:pr-10 grid place-content-center">-->
            <!--        <img src="./src/images/listing/1xbet.png" alt="1xbet logo">-->
            <!--      </div>-->
            <!--    </div>-->

            <!--    <div class="bg-[#be90dd] bg-gradient-to-t from-[#8b57ce] to-[#be90dd] px-2 py-3 lg:p-5 rounded-xl text-center space-y-2">-->
            <!--      <p class="text-white text-xs lg:text-base font-semibold">Welcome Bonus</p>-->
            <!--      <p class="text-white font-semibold text-base lg:text-2xl">₹62000</p>-->
            <!--      <p class="text-white text-xs lg:text-base font-semibold">Bet credit</p>-->
            <!--    </div>-->

            <!--    <div class="bg-[#be90dd] bg-gradient-to-t from-[#8b57ce] to-[#be90dd] px-2 py-3 lg:p-5 rounded-xl text-center space-y-2">-->
            <!--      <img src="./src/images/listing/power.png" alt="power icon" class="m-auto">-->
            <!--      <p class="text-white text-xs lg:text-base font-semibold">Win Rate</p>-->
            <!--      <p class="text-white font-semibold text-base lg:text-2xl">97.41%</p>-->
            <!--    </div>-->

            <!--    <div class="bg-[#be90dd] bg-gradient-to-t from-[#8b57ce] to-[#be90dd] px-2 py-3 lg:p-5 rounded-xl text-center space-y-2">-->
            <!--      <img src="./src/images/listing/time-pay.png" alt="time pay icon" class="m-auto">-->
            <!--      <p class="text-white text-xs lg:text-base font-semibold">Win Rate</p>-->
            <!--      <p class="text-white font-semibold text-base lg:text-2xl">97.41%</p>-->
            <!--    </div>-->

            <!--    <div class="bg-[#be90dd] bg-gradient-to-t from-[#8b57ce] to-[#be90dd] px-1 py-3 lg:p-5 rounded-xl text-center space-y-2 grid place-content-center">-->
            <!--      <img src="./src/images/listing/stars.png" alt="stars icon" class="m-auto">-->
            <!--      <p class="text-white text-xs lg:text-[15px] font-bold">4.5( Read review )</p>-->
            <!--    </div>-->
            <!--  </div>-->

            <!--  <div class="lg:w-[30%] mt-7 lg:mt-0 text-center lg:text-right">-->
            <!--    <a href="" class="bg-[#A44BC9] text-white rounded-xl py-4 px-8 font-bold text-sm uppercase inline-block shadow-[0px_13px_37px_0px_#00000036]">-->
            <!--      <span class="mb-1">View more</span>-->
            <!--      <i class="fa-solid fa-up-right-from-square text-2xl pl-3"></i>-->
            <!--    </a>-->
            <!--    <p class="mt-2 text-sm text-[#C7C7C7]">New Customer only. 18+ T & 1 apply</p>-->
            <!--  </div>-->
            <!--</div>-->
          </div>

        </div>
      </section>

      <!-- Why only SportsRani?? -->
      <section>
        <div class="custom-container">
          <div class="lg:w-[55%]">
            <h3 class="mb-4 text-[#1B1F23] text-xl lg:text-2xl font-semibold">Why only SportsRani??</h3>
            <p class="text-textGray text-base lg:text-xl">
              Statistics, Tips, Analysis and everything you need to know about the world of betting is available to you on our sportsRani 
              Platform. This is no ordinary place; We have tried to make your playing and winning experience better and more entertaining.  
            </p>
          </div>

          <div class="lg:w-[75%] mt-7">
            <h3 class="mb-4 text-[#1B1F23] text-xl lg:text-2xl font-semibold">Here’s the Truth</h3>
            <p class="text-textGray text-base lg:text-xl">
              There’s no fun in playing if you don’t win. So our aim is to make sure you end up with nothing instead of wasting hours 
              looking for the best sports bookie to make moeny.We’ve done the research for you and now you have everything you need to 
              make the best choice, all in one place.  
            </p>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="py-10 lg:py-16">
        <div class="custom-container">
          <h1 class="mb-7 text-black text-2xl lg:text-3xl font-semibold">Betting FAQs</h1>

          <div class="bg-white text-black">
            <div class="accordion bg-white faq space-y-3 lg:space-y-4">
              <div class="a-container bg-white" style="background-color: #ffffff;">
                <p class="a-btn text-black">
                  <span class="title text-black">Are online gambling sites legal in india??</span>
                  <span class="arrow"></span>
                </p>
                <div class="a-panel">
                  <p class="text-black">
                    Despite not being fully regulated in most states. online gambling is permitted throughout india.
                  </p>
                  <p class="text-black">
                    There are no laws that consider online betting as an illegal activity . The legality of different 
                    betting and gaming activities depends on which state you are in.
                  </p>
                </div>
              </div>

              <div class="a-container bg-white" style="background-color: #ffffff;">
                <p class="a-btn text-black">
                  <span class="title text-black">Are online gambling sites legal in india??</span>
                  <span class="arrow"></span>
                </p>
                <div class="a-panel">
                  <p class="text-black">
                    Despite not being fully regulated in most states. online gambling is permitted throughout india.
                  </p>
                  <p class="text-black">
                    There are no laws that consider online betting as an illegal activity . The legality of different 
                    betting and gaming activities depends on which state you are in.
                  </p>
                </div>
              </div>

              <div class="a-container bg-white" style="background-color: #ffffff;">
                <p class="a-btn text-black">
                  <span class="title text-black">Are online gambling sites legal in india??</span>
                  <span class="arrow"></span>
                </p>
                <div class="a-panel">
                  <p class="text-black">
                    Despite not being fully regulated in most states. online gambling is permitted throughout india.
                  </p>
                  <p class="text-black">
                    There are no laws that consider online betting as an illegal activity . The legality of different 
                    betting and gaming activities depends on which state you are in.
                  </p>
                </div>
              </div>

              <div class="a-container bg-white" style="background-color: #ffffff;">
                <p class="a-btn text-black">
                  <span class="title text-black">Are online gambling sites legal in india??</span>
                  <span class="arrow"></span>
                </p>
                <div class="a-panel">
                  <p class="text-black">
                    Despite not being fully regulated in most states. online gambling is permitted throughout india.
                  </p>
                  <p class="text-black">
                    There are no laws that consider online betting as an illegal activity . The legality of different 
                    betting and gaming activities depends on which state you are in.
                  </p>
                </div>
              </div>
              
            </div>
          </div>
      </div>
      </section>
      <script src="./src/accodion.js"></script>
