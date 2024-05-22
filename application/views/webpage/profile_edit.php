
 <!-- Advertisement -->
  <section class="px-7 lg:px-0 mt-4 lg:mt-4">
    <div class="custom-container">
      <div
        class="rounded-xl max-h-[90px] grid place-content-center text-center"
      >
        <?php echo $home_ads[0]->embed_code;?>
      </div>
    </div>
  </section>
  
    <form method="post" action="<?php echo base_url('profile-update')?>/<?=$profile_id?>" enctype="multipart/form-data">
        <!-- form -->
        <section class="my-5">
          <div class="custom-container"> 
             <?php if ($this->session->flashdata('message')) { ?>
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert" style="background-color:green;">
                        <span class="" style="color:white;"><?= $this->session->flashdata('message')?></span>
                    </div>
             <?php } ?>
            <div class="bg-white p-4 lg:py-7 xl:px-10 rounded-xl flex flex-col lg:flex-row lg:justify-between lg:items-center gap-10"> 
                <div class="lg:w-[70%]">
                    <div>
                        <h1 class="text-xl lg:text-2xl font-bold text-[#1B1F23]">My Profile</h1>
                        <p class="mt-2 text-[13px] text-[#6A737D]">Edit your profile</p>
                    </div>
        
                    <div class="my-5 lg:my-10">
                        <div class="grid md:grid-cols-2 gap-4 xl:gap-x-10 lg:gap-y-6">
                            <div>
                                <p class="mb-2 font-bold text-sm text-textGray capitalize">First name</p>
                                <div class="relative">
                                  <input type="text" name="first_name" value="<?=$profile_info->name?>" class="relative w-full h-12 pl-4 pr-10 py-1 border border-[#D8DCE3] focus:border-gray/30 outline-none placeholder:text-[#6A737D] text-[#6A737D] text-sm"/>
                                  <div class="absolute right-3 top-1/2 -translate-y-1/2 opacity-90 font-bold">
                                    <img src="<?php echo base_url()?>/src/images/global/user-gray.png" alt="user icon" class="w-5 lg:w-auto">
                                   

                                  </div>
                                </div> 
                            </div> 
        
                            <div>
                                <p class="mb-2 font-bold text-sm text-textGray capitalize">Last name</p>
                                <div>
                                  <input type="text" name="last_name" value="<?=$profile_info->nick_name?>" class="relative w-full h-12 p-4 py-1 border border-[#D8DCE3] focus:border-gray/30 outline-none placeholder:text-[#6A737D] text-[#6A737D] text-sm"
                                  />
                                </div>
                            </div>
        
                            <div>
                                <p class="mb-2 font-bold text-sm text-textGray capitalize">Username*</p>
                                <div>
                                  <input type="text" name="user_name" value="<?=$profile_info->pen_name?>" placeholder="Enter your username" required class="relative w-full h-12 p-4 py-1 border border-[#D8DCE3] focus:border-gray/30 outline-none placeholder:text-[#6A737D] text-[#6A737D] text-sm"
                                  />
                                </div>
                            </div>
        
                            <div>
                                <p class="mb-2 font-bold text-sm text-textGray capitalize">Email Address</p>
                                <div>
                                  <input
                                    type="email" name="email" value="<?=$profile_info->email?>" class="relative w-full h-12 p-4 py-1 border border-[#D8DCE3] focus:border-gray/30 outline-none placeholder:text-[#6A737D] text-[#6A737D] text-sm"
                                  />
                                </div>
                            </div>
        
                            <div>
                                <p class="mb-2 font-bold text-sm text-textGray capitalize">Gender</p>
                                <div class="flex gap-3 xl:gap-7">
                                  <div class="grow">
                                    <input <?php if($profile_info->sex=='male'){echo "checked";}?> type="radio" name="sex" value="male" name="female" id="radio-one"
                                      class="hidden custom-radio-button"/>
                                    <label for="radio-one">Male</label>
                                  </div>
                                  <div class="grow">
                                    <input <?php if($profile_info->sex=='female'){echo "checked";}?> type="radio" name="sex" value="female" id="radio-two" class="hidden custom-radio-button"/>
                                    <label for="radio-two">Female</label>
                                  </div>
                                  <div class="grow">
                                    <input <?php if($profile_info->sex=='other'){echo "checked";}?> type="radio" name="sex" value="other" id="radio-three" class="hidden custom-radio-button"/>
                                    <label for="radio-three">Other</label>
                                  </div>
                                </div>
                            </div>
        
                            <div>
                                <p class="mb-2 font-bold text-sm text-textGray capitalize">Date of birth</p>
                                <div class="relative">
                                  <input name="birth_date" value="<?=$profile_info->birth_date?>" type="text" placeholder="Date of birth"
                                    class="relative w-full h-12 pl-4 pr-10 py-1 border border-[#D8DCE3] focus:border-gray/30 outline-none placeholder:text-[#6A737D] text-[#6A737D] text-sm"/>
                                  <div class="absolute right-3 top-1/2 -translate-y-1/2 opacity-90 font-bold">
                                    <img src="<?php echo base_url()?>/src/images/global/calendar.png" alt="calendar icon" class="w-5 lg:w-auto">
                                  </div> 
                                </div>
                            </div>
        
                            <div class="flex items-center gap-6 xl:gap-10">
                                <p class="text-sm lg:text-base text-[#1B1F23] capitalize">Subscribe Newsletter</p>
                                <div class="flex items-center gap-5">
                                  <div class="flex items-center gap-1.5">
                                    <input type="radio" value="yes" <?php if($profile_info->newsletter=='yes'){echo "checked";}?> name="newsletter" id="yes" checked class="accent-black w-4 lg:w-5 h-4 lg:h-5" />
                                    <label for="yes" class="text-sm text-[#6A737D] capitalize">Yes</label>
                                  </div>
                                  <div class="flex items-center gap-1.5">
                                    <input type="radio" value="no" <?php if($profile_info->newsletter=='no'){echo "checked";}?> name="newsletter" id="no" class="accent-black w-4 lg:w-5 h-4 lg:h-5" />
                                    <label for="no" class="text-sm text-[#6A737D] capitalize">no</label>
                                  </div>
                                </div>
                            </div>
                            
                            <div>
                                <p class="mb-2 font-bold text-sm text-textGray capitalize">Image</p>
                                <div class="relative">
                                  <input name="image" type="file"/>
                                  
                                </div>
                            </div>
                            
                             
        
                        </div>
                    </div>
                </div>
        
                <div class="lg:w-[30%] hidden lg:block">
                    <img src="<?php echo base_url()?>assets/newDesign/profile/<?php echo $profile_info->photo;?>" alt="Profile picture" class="m-auto">
                </div>
            </div>
        </div>
        </section>
        
        <!-- My Profile -->
        <section class="my-5">
          <div class="custom-container">
            <div class="bg-white p-4 lg:py-7 xl:px-10 rounded-xl">
                <p class="mb-4 text-[#1B1F23] text-lg lg:text-xl font-bold">Select Your favorite sports</p>
        
                <div class="grid md:grid-cols-3 gap-4 xl:gap-10">
                    <div>
                        <input type="radio" value="cricket" <?php if($profile_info->fav_sports == 'cricket') { echo "checked style='background-color: #feffd4;'"; } ?> name="fav_sports" id="cricket" class="hidden custom-radio-btn"/>
                        <label for="cricket"> 
                          <div class="w-[200px] py-2 px-4 bg-primary rounded-lg flex items-center gap-x-2.5 lg:gap-x-4">
                            <img src="<?php echo base_url()?>/src/images/profile/cricket-ball.png" alt="cricket ball">
                            <p>Cricket</p>
                          </div>
                          <i class="fa-solid fa-circle-check"></i>
                        </label>
                    </div>
        
                    <div>
                        <input type="radio" value="football" <?php if($profile_info->fav_sports == 'football') { echo "checked"; } ?> name="fav_sports" id="football" class="hidden custom-radio-btn"/>
                        <label for="football"> 
                          <div class="w-[200px] py-2 px-4 bg-primary rounded-lg flex items-center gap-x-2.5 lg:gap-x-4">
                            <img src="<?php echo base_url()?>/src/images/profile/football.png" alt="football">
                            <p>Football</p>
                          </div>
                          <i class="fa-solid fa-circle-check" <?php if($profile_info->fav_sports == 'football') { echo "style='color: #feffd4;'"; } ?>></i>
                        </label>
                    </div>
        
                    <div>
                        <input type="radio" value="kabadi" <?php if($profile_info->fav_sports == 'kabadi') { echo "checked style='background-color: #feffd4;'"; } ?> name="fav_sports" id="kabaddi" class="hidden custom-radio-btn"/>
                        <label for="kabaddi"> 
                          <div class="w-[200px] py-2 px-4 bg-primary rounded-lg flex items-center gap-x-2.5 lg:gap-x-4">
                            <img src="<?php echo base_url()?>/src/images/profile/kabaddi.png" alt="kabaddi">
                            <p>Kabaddi</p>
                          </div>
                          <i class="fa-solid fa-circle-check"></i>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        </section>
        
        <!-- Cricket -->
        <section class="py-5">
          <div class="custom-container">
            <div class="bg-white p-4 xl:py-7 lg:px-10 rounded-xl">
                <div class="py-2 px-4 bg-[#383435] rounded-lg flex items-center gap-x-4">
                    <img src="<?php echo base_url()?>/src/images/profile/cricket-ball.png" alt="cricket ball" class="w-[42px]">
                    <p class="text-white text-xl font-bold">Cricket</p>
                </div>
        
                <!-- International Cricket -->
                <div>
                    <h4 class="mt-8 mb-5 text-lg text-[#1B1F23] font-bold">International Cricket</h4>
                    <div>
                        <div class="image-carousel">
                            <!-- Item -->
                            <div class="min-w-[137px]">
                                <input type="radio" name="cricket_country" <?php if($profile_info->cricket_country == 'afg'){ echo "checked"; }?> value="afg" id="afg" class="hidden carousel-input" />
                                <label 
                                    for="afg"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->cricket_country == 'afg'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/cricket/afg.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">AFG</h5>
                                </label>
                            </div>
        
                            <!-- Item -->
                            <div class="min-w-[137px]">
                                <input type="radio" name="cricket_country" <?php if($profile_info->cricket_country=='aus'){echo "checked";}?> value="aus" id="aus" class="hidden carousel-input" />
                                <label 
                                for="aus"
                                class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                <?php if($profile_info->cricket_country == 'aus'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                <img
                                    src="<?php echo base_url()?>/uploads/flag/cricket/aus.png"
                                    alt="img"
                                    class="m-auto"
                                />
                                <h5 class="mt-3 text-black text-sm font-medium;">AUS</h5>
                                </label>
                            </div>
        
                            <!-- Item -->
                            <div class="min-w-[137px]">
                                <input type="radio" name="cricket_country" <?php if($profile_info->cricket_country=='ban'){echo "checked";}?> value="ban" id="ban3" class="hidden carousel-input" />
                                <label 
                                for="ban3"
                                class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                >
                                <img src="<?php echo base_url()?>/uploads/flag/cricket/ban.png" alt="img"
                                    class="m-auto"/>
                                <h5 class="mt-3 text-black text-sm font-medium;">BAN</h5>
                                </label>
                            </div>
                            
                            <!-- Item -->
                            <div class="min-w-[137px]">
                                <input type="radio" name="cricket_country" <?php if($profile_info->cricket_country=='eng'){echo "checked";}?> value="eng" id="ban4" class="hidden carousel-input" />
                                <label 
                                for="ban4"
                                class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                 <?php if($profile_info->cricket_country == 'eng'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                <img src="<?php echo base_url()?>/uploads/flag/cricket/eng.png" alt="img"
                                    class="m-auto"/>
                                <h5 class="mt-3 text-black text-sm font-medium;">ENG</h5>
                                </label>
                            </div>
                            <!-- Item -->
                            <div class="min-w-[137px]">
                                <input type="radio" name="cricket_country" <?php if($profile_info->cricket_country=='ind'){echo "checked";}?> value="ind" id="ind" class="hidden carousel-input" />
                                <label 
                                for="ind"
                                class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                 <?php if($profile_info->cricket_country == 'ind'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                <img src="<?php echo base_url()?>/uploads/flag/cricket/ind.png" alt="img"
                                    class="m-auto"/>
                                <h5 class="mt-3 text-black text-sm font-medium;">IND</h5>
                                </label>
                            </div>
                      
                             <!-- Item -->
                            <div class="min-w-[137px]">
                                <input type="radio" name="cricket_country" <?php if($profile_info->cricket_country=='pak'){echo "checked";}?> value="pak" id="pak" class="hidden carousel-input" />
                                <label 
                                for="pak"
                                class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                 <?php if($profile_info->cricket_country == 'pak'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                <img src="<?php echo base_url()?>/uploads/flag/cricket/pak.png" alt="img"
                                    class="m-auto"/>
                                <h5 class="mt-3 text-black text-sm font-medium;">PAK</h5>
                                </label>
                            </div>
                              <!-- Item -->
                            <div class="min-w-[137px]">
                                <input type="radio" name="cricket_country" <?php if($profile_info->cricket_country=='nz'){echo "checked";}?> value="nz" id="nz" class="hidden carousel-input" />
                                <label 
                                for="nz"
                                class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                 <?php if($profile_info->cricket_country == 'nz'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                <img src="<?php echo base_url()?>/uploads/flag/cricket/newz.png" alt="img"
                                    class="m-auto"/>
                                <h5 class="mt-3 text-black text-sm font-medium;">NZ</h5>
                                </label>
                            </div>
                            <!-- Item -->
                            <div class="min-w-[137px]">
                                <input type="radio" name="cricket_country" <?php if($profile_info->cricket_country=='sa'){echo "checked";}?> value="sa" id="sa" class="hidden carousel-input" />
                                <label 
                                for="sa"
                                class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                 <?php if($profile_info->cricket_country == 'sa'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                <img src="<?php echo base_url()?>/uploads/flag/cricket/sau.png" alt="img"
                                    class="m-auto"/>
                                <h5 class="mt-3 text-black text-sm font-medium;">NZ</h5>
                                </label>
                            </div>
                            <!-- Item -->
                            <div class="min-w-[137px]">
                                <input type="radio" name="cricket_country" <?php if($profile_info->cricket_country=='wi'){echo "checked";}?> value="wi" id="wi" class="hidden carousel-input" />
                                <label 
                                for="wi"
                                class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                 <?php if($profile_info->cricket_country == 'wi'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                <img src="<?php echo base_url()?>/uploads/flag/cricket/win.png" alt="img"
                                    class="m-auto"/>
                                <h5 class="mt-3 text-black text-sm font-medium;">WI</h5>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- IPL -->
                <div>
                    <h4 class="mt-8 mb-5 text-lg text-[#1B1F23] font-bold">IPL</h4>
                    <div>
                        <div class="image-carousel">
                            <!-- Item -->
                            <div class="min-w-[137px]">
                            <input type="radio" name="ipl_team" <?php if($profile_info->ipl_team=='bangaluru'){echo "checked";}?> value="bangaluru" id="bangaluru" class="hidden carousel-input"/> 
                            <label 
                                for="bangaluru"
                                class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                  <?php if($profile_info->ipl_team == 'bangaluru'){ echo "style='background-color: #feffd4;'"; }?>
                            >
                                <img
                                src="<?php echo base_url()?>/uploads/flag/cricket/bangaluru.png"
                                alt="img"
                                class="m-auto"
                                />
                                <h5 class="mt-3 text-black text-sm font-medium;">BAN</h5>
                            </label>
                            </div>
        
                            <!-- Item -->
                           <div class="min-w-[137px]">
                            <input type="radio" name="ipl_team" <?php if($profile_info->ipl_team=='che'){echo "checked";}?> value="che" id="che" class="hidden carousel-input"/> 
                            <label 
                                for="che"
                                class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                <?php if($profile_info->ipl_team == 'che'){ echo "style='background-color: #feffd4;'"; }?>
                            >
                                <img
                                src="<?php echo base_url()?>/uploads/flag/cricket/chanei.png"
                                alt="img"
                                class="m-auto"
                                />
                                <h5 class="mt-3 text-black text-sm font-medium;">CHE</h5>
                            </label>
                            </div>
        
                            <!-- Item -->
                           <div class="min-w-[137px]">
                            <input type="radio" name="ipl_team" <?php if($profile_info->ipl_team=='del'){echo "checked";}?> value="del" id="del" class="hidden carousel-input"/> 
                            <label 
                                for="del"
                                class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                <?php if($profile_info->ipl_team == 'del'){ echo "style='background-color: #feffd4;'"; }?>
                            >
                                <img
                                src="<?php echo base_url()?>/uploads/flag/cricket/delhi.png"
                                alt="img"
                                class="m-auto"
                                />
                                <h5 class="mt-3 text-black text-sm font-medium;">DEL</h5>
                            </label>
                            </div>
        
                            <!-- Item -->
                          <div class="min-w-[137px]">
                            <input type="radio" name="ipl_team" <?php if($profile_info->ipl_team=='hyd'){echo "checked";}?> value="hyd" id="hyd" class="hidden carousel-input"/> 
                            <label 
                                for="hyd"
                                class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                <?php if($profile_info->ipl_team == 'hyd'){ echo "style='background-color: #feffd4;'"; }?>
                            >
                                <img
                                src="<?php echo base_url()?>/uploads/flag/cricket/hyderbad.png"
                                alt="img"
                                class="m-auto"
                                />
                                <h5 class="mt-3 text-black text-sm font-medium;">HYD</h5>
                            </label>
                            </div>
        
                            <!-- Item -->
                            <div class="min-w-[137px]">
                            <input type="radio" name="ipl_team" <?php if($profile_info->ipl_team=='kol'){echo "checked";}?> value="kol" id="kol" class="hidden carousel-input"/> 
                            <label 
                                for="kol"
                                class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                <?php if($profile_info->ipl_team == 'kol'){ echo "style='background-color: #feffd4;'"; }?>
                            >
                                <img
                                src="<?php echo base_url()?>/uploads/flag/cricket/kol.png"
                                alt="img"
                                class="m-auto"
                                />
                                <h5 class="mt-3 text-black text-sm font-medium;">KOL</h5>
                            </label>
                            </div>
        
                            <!-- Item -->
                          <div class="min-w-[137px]">
                            <input type="radio" name="ipl_team" <?php if($profile_info->ipl_team=='mum'){echo "checked";}?> value="mum" id="mum" class="hidden carousel-input"/> 
                            <label 
                                for="mum"
                                class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                <?php if($profile_info->ipl_team == 'mum'){ echo "style='background-color: #feffd4;'"; }?>
                            >
                                <img
                                src="<?php echo base_url()?>/uploads/flag/cricket/mum.png"
                                alt="img"
                                class="m-auto"
                                />
                                <h5 class="mt-3 text-black text-sm font-medium;">MUM</h5>
                            </label>
                            </div>
        
                            <!-- Item -->
                          <div class="min-w-[137px]">
                            <input type="radio" name="ipl_team" <?php if($profile_info->ipl_team=='pjb'){echo "checked";}?> value="pjb" id="pjb" class="hidden carousel-input"/> 
                            <label 
                                for="pjb"
                                class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                <?php if($profile_info->ipl_team == 'pjb'){ echo "style='background-color: #feffd4;'"; }?>
                             >
                                <img
                                src="<?php echo base_url()?>/uploads/flag/cricket/pjb.png"
                                alt="img"
                                class="m-auto"
                                />
                                <h5 class="mt-3 text-black text-sm font-medium;">PJB</h5>
                            </label>
                            </div>
                            
                            <!-- Item -->
                          <div class="min-w-[137px]">
                            <input type="radio" name="ipl_team" <?php if($profile_info->ipl_team=='lko'){echo "checked";}?> value="lko" id="lko" class="hidden carousel-input"/> 
                            <label 
                                for="lko"
                                class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                <?php if($profile_info->ipl_team == 'lko'){ echo "style='background-color: #feffd4;'"; }?>
                             >
                                <img
                                src="<?php echo base_url()?>/uploads/flag/cricket/lko.png"
                                alt="img"
                                class="m-auto"
                                />
                                <h5 class="mt-3 text-black text-sm font-medium;">LKO</h5>
                            </label>
                            </div>
                            
                            <!-- Item -->
                          <div class="min-w-[137px]">
                            <input type="radio" name="ipl_team" <?php if($profile_info->ipl_team=='amd'){echo "checked";}?> value="amd" id="amd" class="hidden carousel-input"/> 
                            <label 
                                for="amd"
                                class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                <?php if($profile_info->ipl_team == 'amd'){ echo "style='background-color: #feffd4;'"; }?>
                             >
                                <img
                                src="<?php echo base_url()?>/uploads/flag/cricket/amd.png"
                                alt="img"
                                class="m-auto"
                                />
                                <h5 class="mt-3 text-black text-sm font-medium;">AMD</h5>
                            </label>
                            </div>
                            
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
        </section>
        
        <!-- Football -->
        <section class="py-5">
          <div class="custom-container">
            <div class="bg-white p-4 xl:py-7 lg:px-10 rounded-xl">
                <div class="py-2 px-4 bg-[#383435] rounded-lg flex items-center gap-x-4">
                    <img src="<?php echo base_url()?>/src/images/profile/football.png" alt="football" class="w-[42px]">
                    <p class="text-white text-xl font-bold">Football</p>
                </div>
        
                <!-- English Premier League -->
                <div>
                    <h4 class="mt-8 mb-5 text-lg text-[#1B1F23] font-bold">English Premier League</h4>
                    <div>
                        <div class="image-carousel">
                            <!-- Item -->
                            <div class="min-w-[137px]">
                                <input type="radio" name="premear_league" <?php if($profile_info->premear_league=='ars'){echo "checked";}?> value="ars" id="ars" class="hidden carousel-input" />
                                <label 
                                    for="ars"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->premear_league == 'ars'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/football/ars.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">ARS</h5>
                                </label>
                            </div>
                            
                            <!-- Item -->
                            <div class="min-w-[137px]">
                                <input type="radio" name="premear_league" <?php if($profile_info->premear_league=='che'){echo "checked";}?> value="che" id="che" class="hidden carousel-input" />
                                <label 
                                    for="che"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->premear_league == 'che'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/football/che.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">CHE</h5>
                                </label>
                            </div>
                            
                            <!-- Item -->
                           <div class="min-w-[137px]">
                                <input type="radio" name="premear_league" <?php if($profile_info->premear_league=='lee'){echo "checked";}?> value="lee" id="lee" class="hidden carousel-input" />
                                <label 
                                    for="lee"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->premear_league == 'lee'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/football/lee.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">LEE</h5>
                                </label>
                            </div>
                            
                            <!-- Item -->
                           <div class="min-w-[137px]">
                                <input type="radio" name="premear_league" <?php if($profile_info->premear_league=='lei'){echo "checked";}?> value="lei" id="lei" class="hidden carousel-input" />
                                <label 
                                    for="lei"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->premear_league == 'lei'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/football/lei.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">LEI</h5>
                                </label>
                            </div>
                            
                            <!-- Item -->
                           <div class="min-w-[137px]">
                                <input type="radio" name="premear_league" <?php if($profile_info->premear_league=='liv'){echo "checked";}?> value="liv" id="liv" class="hidden carousel-input" />
                                <label 
                                    for="liv"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->premear_league == 'liv'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/football/liv.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">LIV</h5>
                                </label>
                            </div>
                            
                            <!-- Item -->
                          <div class="min-w-[137px]">
                                <input type="radio" name="premear_league" <?php if($profile_info->premear_league=='mci'){echo "checked";}?> value="mci" id="mci" class="hidden carousel-input" />
                                <label 
                                    for="mci"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->premear_league == 'mci'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/football/mci.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">MCI</h5>
                                </label>
                            </div>
                            
                            <!-- Item -->
                            <div class="min-w-[137px]">
                                <input type="radio" name="premear_league" <?php if($profile_info->premear_league=='mun'){echo "checked";}?> value="mun" id="mun" class="hidden carousel-input" />
                                <label 
                                    for="mun"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->premear_league == 'mun'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/football/mun.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">MUN</h5>
                                </label>
                            </div>
                            
                            <!-- Item -->
                            <div class="min-w-[137px]">
                                <input type="radio" name="premear_league" <?php if($profile_info->premear_league=='new'){echo "checked";}?> value="new" id="new" class="hidden carousel-input" />
                                <label 
                                    for="new"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->premear_league == 'new'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/football/new.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">NEW</h5>
                                </label>
                            </div>
                            <!-- Item -->
                            <div class="min-w-[137px]">
                                <input type="radio" name="premear_league" <?php if($profile_info->premear_league=='mci'){echo "checked";}?> value="tot" id="tot" class="hidden carousel-input" />
                                <label 
                                    for="tot"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->premear_league == 'tot'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/football/tot.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">TOT</h5>
                                </label>
                            </div>
                            <!-- Item -->
                            <div class="min-w-[137px]">
                                <input type="radio" name="premear_league" <?php if($profile_info->premear_league=='whu'){echo "checked";}?> value="whu" id="whu" class="hidden carousel-input" />
                                <label 
                                    for="whu"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->premear_league == 'whu'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/football/whu.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">WHU</h5>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- La Liga -->
                <div>
                    <h4 class="mt-8 mb-5 text-lg text-[#1B1F23] font-bold">La Laliga</h4>
                    <div>
                        <div class="image-carousel">
                            <!-- Item -->
                            <div class="min-w-[137px]">
                                <input type="radio" name="laliga" <?php if($profile_info->laliga=='atm'){echo "checked";}?> value="atm" id="atm" class="hidden carousel-input" />
                                <label 
                                    for="atm"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->laliga == 'atm'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/football/atm.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">ATM</h5>
                                </label>
                            </div>
        
                            <!-- Item -->
                           <div class="min-w-[137px]">
                                <input type="radio" name="laliga" <?php if($profile_info->laliga=='bar'){echo "checked";}?> value="bar" id="bar" class="hidden carousel-input" />
                                <label 
                                    for="bar"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->laliga == 'bar'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/football/bar.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">BAR</h5>
                                </label>
                            </div>
                            
                            <!-- Item -->
                           <div class="min-w-[137px]">
                                <input type="radio" name="laliga" <?php if($profile_info->laliga=='rma'){echo "checked";}?> value="rma" id="rma" class="hidden carousel-input" />
                                <label 
                                    for="rma"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->laliga == 'rma'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/football/rma.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">RMA</h5>
                                </label>
                            </div>
                            
                            <!-- Item -->
                            <div class="min-w-[137px]">
                                <input type="radio" name="laliga" <?php if($profile_info->laliga=='vcf'){echo "checked";}?> value="vcf" id="vcf" class="hidden carousel-input" />
                                <label 
                                    for="vcf"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->laliga == 'vcf'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/football/vcf.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">VCF</h5>
                                </label>
                            </div>
                            
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
        </section>
        
        <!-- Kabaddi -->
        <section class="py-5">
          <div class="custom-container">
            <div class="bg-white p-4 xl:py-7 lg:px-10 rounded-xl">
                <div class="py-2 px-4 bg-[#383435] rounded-lg flex items-center gap-x-4">
                    <img src="<?php echo base_url()?>/src/images/profile/kabaddi.png" alt="kabaddi" class="w-[42px] filter invert">
                    <p class="text-white text-xl font-bold">Kabaddi</p>
                </div>
        
                <!-- Pro kabaddi League -->
                <div>
                    <h4 class="mt-8 mb-5 text-lg text-[#1B1F23] font-bold">Pro kabaddi League</h4> 
                    <div>
                        <div class="image-carousel">
                            
                            <!-- Item -->
                             <div class="min-w-[137px]">
                            <input type="radio" name="kabaddi" <?php if($profile_info->kabaddi=='bw'){echo "checked";}?> value="bw" id="bw" class="hidden carousel-input" />
                            <label 
                                for="bw"
                                class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                 <?php if($profile_info->kabaddi == 'vcf'){ echo "style='background-color: #feffd4;'"; }?>
                            >
                                <img
                                src="<?php echo base_url()?>/uploads/flag/kabbadi/bw.png"
                                alt="img"
                                class="m-auto"
                                />
                                <h5 class="mt-3 text-black text-sm font-medium;">BW</h5>
                            </label>
                        </div>
        
                            <!-- Item -->
                            <div class="min-w-[137px]">
                                <input type="radio" name="kabaddi" <?php if($profile_info->kabaddi=='bb'){echo "checked";}?> value="bb" id="bb" class="hidden carousel-input" />
                                <label 
                                    for="bb"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->kabaddi == 'bb'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/kabbadi/bb.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">BB</h5>
                                </label>
                            </div>
                            
        
                            <!-- Item -->
                           <div class="min-w-[137px]">
                                <input type="radio" name="kabaddi" <?php if($profile_info->kabaddi=='dd'){echo "checked";}?> value="dd" id="dd" class="hidden carousel-input" />
                                <label 
                                    for="dd"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->kabaddi == 'dd'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/kabbadi/dd.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">DD</h5>
                                </label>
                            </div>
        
                            <!-- Item -->
                           <div class="min-w-[137px]">
                                <input type="radio" name="kabaddi" <?php if($profile_info->kabaddi=='gfg'){echo "checked";}?> value="gfg" id="gfg" class="hidden carousel-input" />
                                <label 
                                    for="gfg"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->kabaddi == 'gfg'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/kabbadi/gfg.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">GFG</h5>
                                </label>
                            </div>
                            <!-- Item -->
                           <div class="min-w-[137px]">
                                <input type="radio" name="kabaddi" <?php if($profile_info->kabaddi=='hs'){echo "checked";}?> value="hs" id="hs" class="hidden carousel-input" />
                                <label 
                                    for="hs"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->kabaddi == 'hs'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/kabbadi/hs.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">HS</h5>
                                </label>
                            </div>
                            <!-- Item -->
                           <div class="min-w-[137px]">
                                <input type="radio" name="kabaddi" <?php if($profile_info->kabaddi=='jpp'){echo "checked";}?> value="jpp" id="jpp" class="hidden carousel-input" />
                                <label 
                                    for="jpp"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->kabaddi == 'jpp'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/kabbadi/jpp.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">JPP</h5>
                                </label>
                            </div>
                            <!-- Item -->
                           <div class="min-w-[137px]">
                                <input type="radio" name="kabaddi" <?php if($profile_info->kabaddi=='pp'){echo "checked";}?> value="pp" id="pp" class="hidden carousel-input" />
                                <label 
                                    for="pp"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->kabaddi == 'pp'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/kabbadi/pp.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">pp</h5>
                                </label>
                            </div>
                              <!-- Item -->
                           <div class="min-w-[137px]">
                                <input type="radio" name="kabaddi" <?php if($profile_info->kabaddi=='ppn'){echo "checked";}?> value="ppn" id="ppn" class="hidden carousel-input" />
                                <label 
                                    for="ppn"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->kabaddi == 'ppn'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/kabbadi/ppn.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">PPN</h5>
                                </label>
                            </div>
                              <!-- Item -->
                           <div class="min-w-[137px]">
                                <input type="radio" name="kabaddi" <?php if($profile_info->kabaddi=='tth'){echo "checked";}?> value="tth" id="tth" class="hidden carousel-input" />
                                <label 
                                    for="tth"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->kabaddi == 'tth'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/kabbadi/tth.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">TTH</h5>
                                </label>
                          </div>
                            <!-- Item -->
                           <div class="min-w-[137px]">
                                <input type="radio" name="kabaddi" <?php if($profile_info->kabaddi=='upy'){echo "checked";}?> value="upy" id="upy" class="hidden carousel-input" />
                                <label 
                                    for="upy"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->kabaddi == 'upy'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/kabbadi/upy.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">UPY</h5>
                                </label>
                            </div>
                            <!-- Item -->
                           <div class="min-w-[137px]">
                                <input type="radio" name="kabaddi" <?php if($profile_info->kabaddi=='um'){echo "checked";}?> value="um" id="um" class="hidden carousel-input" />
                                <label 
                                    for="um"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                     <?php if($profile_info->kabaddi == 'um'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/kabbadi/um.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">UM</h5>
                                </label>
                            </div>
                            <!-- Item -->
                           <div class="min-w-[137px]">
                                <input type="radio" name="kabaddi" <?php if($profile_info->kabaddi=='tt'){echo "checked";}?> value="tt" id="tt" class="hidden carousel-input" />
                                <label 
                                    for="tt"
                                    class="py-5 border border-[#D9D9D9] rounded-xl w-full grid place-content-center text-center cursor-pointer"
                                    <?php if($profile_info->kabaddi == 'tt'){ echo "style='background-color: #feffd4;'"; }?>
                                >
                                    <img
                                    src="<?php echo base_url()?>/uploads/flag/kabbadi/tt.png"
                                    alt="img"
                                    class="m-auto"
                                    />
                                    <h5 class="mt-3 text-black text-sm font-medium;">TT</h5>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
        
               
        
            </div>
        </div>
        </section>
        
        <!-- I agree with terms and conditions -->
        <section class="mt-7 mb-14">
          <div class="custom-container">
            <div class="mb-8 flex items-center gap-2">
                <input type="checkbox" name="term_and_condition" <?php if($profile_info->term_and_condition==1){echo "checked";}?> value="1" id="check" class="accent-black w-5 h-5" />
                <label for="check" class="text-sm text-black">I agree with terms and conditions</label>
            </div>
        
            <input type="submit" value="Update Profile" class="bg-secondary rounded-xl py-4 xl:py-6 px-8 xl:px-10 font-bold text-base lg:text-lg text-white">
          </div>
        </section> 

    </form> 
     
<style>
    .image-carousel .carousel-input:checked + label {
          background-color: #feffd4;
      }
</style>