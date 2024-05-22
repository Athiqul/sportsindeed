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
            <li class="flex items-center gap-1.5 lg:gap-4 flex-wrap text-xs lg:text-sm">
              <span class="text-[#444D56] font-medium"><a href="">Home</a></span>
              <span class="text-[#73738C] font-semibold"> > </span>
              <span class="text-[#73738C] font-medium"><?php echo $this->uri->segment(2);?></span>
              <span class="text-[#73738C] font-semibold"> > </span>
              <span class="text-[#73738C] font-medium">News</span>
              <span class="text-[#73738C] font-semibold"> > </span>
              <span class="text-[#73738C] font-medium">
                <?php echo $details_news->stitle;?>
            </span>
            </li>
          </ul>
        </div>
      </section>

      <div class="py-10 lg:py-14">
        <div class="custom-container">
            <div class="flex flex-col lg:flex-row gap-0 md:gap-6 xl:gap-10">
                <div class="lg:w-[75%]">
                    <h2 class="mb-6 text-base lg:text-2xl font-semibold">
                        <?php echo $details_news->title;?>
                    </h2>

                    <div class="news-content">
                        <p>
                            <?php echo $details_news->stitle;?>

                        <div class="my-5 flex justify-between items-center">
                            <p class="!text-[#73738C] !text-xs !mt-0 font-medium"><?php echo date('d F, Y', strtotime($details_news->post_date)); ?></p>
                          <a class="cursor-pointer" onclick="shareContent('<?php echo $details_news->encode_title?>','<?php echo $details_news->stitle?>','<?php echo base_url('news-details/').$this->uri->segment(2).'/'.$details_news->encode_title;?>')">  
                            <img src="<?php echo base_url();?>/src/images/global/blue-share-icon.jpeg" alt="share icon" class="w-4" />
                          </a>
                        </div>

                        <div>
                            <img
                                src="<?php echo base_url()?>uploads/<?php echo $details_news->image;?>"
                                alt="cricket img"
                                class="h-full w-full"
                            />
                        </div>

                        <!-- Advertisement -->
                        <div class="my-10">
                            <div class="custom-container">
                              <div
                                class="rounded-xl w-[80%] mx-auto max-h-[90px] grid place-content-center text-center"
                              >
                                <?php echo $home_ads[2]->embed_code;?>
                              </div>
                            </div>
                        </div>

                        <div>
                            <?php echo $details_news->news; ?>
                        </div>

                         <!-- Advertisement -->
                         <div class="my-10">
                            <div class="custom-container">
                              <div
                                class="rounded-xl w-[80%] mx-auto max-h-[90px] grid place-content-center text-center"
                              >
                                  <?php echo $home_ads[3]->embed_code;?>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Sidebar -->
                <aside class="lg:w-[25%] md:gap-4 lg:gap-0 md:flex lg:block">
                    <!-- Advertisement -->
                    <div class="shrink-0 m-auto w-[200px] lg:w-full max-h-[600px] rounded-xl grid place-content-center text-center">
                        <?php echo $home_ads[1]->embed_code;?>
                    </div>

                    <div class="mt-7 md:mt-0 lg:mt-7 bg-transparent  rounded-xl px-4 py-6">
                        <h4 class="mb-5 text-black text-base lg:text-lg font-semibold"><?php echo ucfirst($this->uri->segment(2)); ?> Updates</h4>
                        <ul class="space-y-4">
                            <?php foreach($latest_news as $key=>$latest_news_data){?>
                             <li class="flex gap-2 items-center" border-2 border-[#D9D9D9]>
                                <div class="w-[30%] shrink-0">
                                  <img
                                    src="<?php echo base_url()?>uploads/<?php echo $latest_news_data->image;?>"
                                    alt="poster"
                                    class="rounded-md h-full"
                                  />
                                </div>
                                <div class="flex flex-col justify-between">
                                  <h4 class="text-xs text-black font-semibold ellipsis-text">
                                    <a href="<?php echo base_url('news-details/').$this->uri->segment(2).'/'.$latest_news_data->encode_title;?>"><?php echo strlen($latest_news_data->title) > 85 ? substr($latest_news_data->title, 0, 85) . '...' : $latest_news_data->title; ?></a>
                                  </h4>
                                  <div class="mt-2 flex justify-between items-center">
                                    <p class="text-[10px] text-black font-medium">News</p>
                                  <a class="cursor-pointer" onclick="shareContent('<?php echo $latest_news_data->encode_title?>','<?php echo $latest_news_data->encode_title?>','<?php echo base_url('news-details/').$this->uri->segment(2).'/'.$latest_news_data->encode_title;?>')">
                                    <img
                                      src="<?php echo base_url();?>/src/images/global/share.png"
                                      alt="share icon"
                                      class="w-4"
                                    />
                                 </a>   
                                  </div>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
      </div>
