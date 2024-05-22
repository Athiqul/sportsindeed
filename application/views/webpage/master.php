<!DOCTYPE html>
<html>
  <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?php echo base_url();?>src/output.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Slick Slider CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body>
    <!-- Header -->
    <header class="bg-[#980000]">
      <div class="custom-container !overflow-visible">
        <nav class="py-4 flex justify-between items-center gap-3">
          <ul>
            <li>
              <a href="<?php echo base_url()?>">
                <img
                  src="<?php echo base_url()?>/src/images/header/logo.png"
                  alt="sports rani logo"
                  class="w-[168px] xl:w-auto"
                />
              </a>
            </li>
          </ul>
          <ul class="primary-menu hidden lg:flex items-center">
            <li> 
              <a
                class="<?php echo (current_url() == base_url()) ? 'active_color' : ''; ?>"
                href="<?php echo base_url()?>"
                >Home</a
              >
            </li>
            <li>
              <a
                class="<?php echo $this->uri->segment(1) === 'tips-and-prediction' ? 'active_color' : ''; ?>"
                href="<?php echo base_url('tips-and-prediction')?>"
                >Tips & Predictions</a
              >
            </li>
            <li>
              <a
                class="<?php echo $this->uri->segment(1) === 'cricket' ? 'active_color' : ''; ?>"
                href="<?php echo base_url('cricket')?>"
                >Cricket</a
              >
            </li>
            <li>
              <a
                class="<?php echo $this->uri->segment(1) === 'football' ? 'active_color' : ''; ?>"
                href="<?php echo base_url('football')?>"
                >Football</a
              >
            </li>
          </ul>
          <ul>
            <?php 
                $user_id = $this->session->userdata('user_id');
                if($this->session->userdata('user_id')) {?>
            <li class="w-max relative group">
              <div
                class="py-2 lg:py-3 px-4 lg:px-6 rounded-[20px] bg-primary transition-all"
              >
                <img
                  src="<?php echo base_url()?>/src/images/header/user.png"
                  alt="user icon"
                  class="w-5 lg:w-auto"
                />
              </div>

              <div class="bg-primary shadow-lg px-6 py-4 rounded-xl absolute bottom-[-80px] left-1/2 -translate-x-1/2 z-[999] w-max transition-all opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                <a href="<?php echo base_url('profile-edit');?>" class="block font-medium text-sm text-secondary hover:text-black">Profile update</a>
                <a href="<?php echo base_url('user-logout');?>" class="block font-medium text-sm text-secondary hover:text-black mt-1.5">Logout</a>
              </div>
            </li>
            <?php } else {?>
            <li>
              <a
                href="<?php echo base_url('sign-in')?>"
                class="flex items-center gap-2.5 py-2 lg:py-3 px-4 lg:px-6 rounded-[20px] bg-primary"
              >
                <span class="font-semibold text-[15px] lg:text-base"
                  >Sign in</span
                >
                <img
                  src="<?php echo base_url()?>/src/images/header/user.png"
                  alt="user icon"
                  class="w-5 lg:w-auto"
                />
              </a>
            </li>
            <?php } ?>
          </ul>
        </nav>
      </div>

      <!-- Only mobile device section -->
      <div class="lg:hidden bg-[#2C2C2C] py-4">
        <div class="custom-container">
          <div class="flex items-center gap-7">
            <div class="w-7 h-7 bg-[#423E3F] rounded-full grid place-content-center">
              <img src="<?php echo base_url()?>/src/images/global/trending-up.png" alt="trending icon">
            </div>
            <ul class="flex items-center gap-6">
              <li class="flex items-center gap-1.5">
                <i class="fa-regular fa-circle text-primary text-[6px] bg-primary rounded-full"></i>
                <a href="<?php echo base_url('cricket')?>"><span class="text-xs text-white">All Cricket Scores</span></a>
              </li>
              <li class="flex items-center gap-1.5">
                <i class="fa-regular fa-circle text-primary text-[6px] bg-primary rounded-full"></i>
                <a href="<?php echo base_url('football')?>"><span class="text-xs text-white">All Football Scores</span></a>
              </li>
            </ul>
        </div>
      </div>
    </header>

    <!-- Content -->
    <main>
         <?php echo $web_content; ?>
    </main>

    <!-- Footer -->
    <footer class="mb-[100px] lg:mb-0 bg-[#980000]">
      <div class="custom-container">
        <div class="py-4 lg:flex lg:justify-between lg:items-center">
          <div
            class="text-white lg:divide-x-4 lg:divide-white lg:flex lg:items-center lg:space-x-5"
          >
            <p class="text-center text-sm lg:text-base">
              ©2024 SportsRani all right Reserved
            </p>
            <p class="hidden lg:block pl-5">
              <a href="">Terms & Condition</a>
            </p>
          </div>

          <div class="text-white hidden lg:flex items-center gap-6">
            <p>Follow us</p>
            <ul class="flex items-center gap-5">
              <li>
                <a href="">
                  <img src="<?php echo base_url()?>/src/images/global/facebook.png" alt="" />
                </a>
              </li>
              <li>
                <a href="">
                  <img src="<?php echo base_url()?>/src/images/global/youTube.png" alt="" />
                </a>
              </li>
              <li>
                <a href="">
                  <img src="<?php echo base_url()?>/src/images/global/x.png" alt="" />
                </a>
              </li>
              <li>
                <a href="">
                  <img src="<?php echo base_url()?>/src/images/global/instagram.png" alt="" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


    <!-- Mobile Floating Menu -->
    <div class="lg:hidden w-full h-[77px] p-4 fixed left-0 bottom-0 z-50 bg-[#980000]">
      <ul class="grid grid-cols-5 gap-2 text-center capitalize">
          <li>
            <a href="<?php echo base_url()?>" class="<?php echo current_url() == base_url() ? 'floating_active_menu' : ''; ?>">
              <?php if(current_url() == base_url()) {
              ?>
              <svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none"><script xmlns=""/>
                <path d="M3.75 11.25L15 2.5L26.25 11.25V25C26.25 25.663 25.9866 26.2989 25.5178 26.7678C25.0489 27.2366 24.413 27.5 23.75 27.5H6.25C5.58696 27.5 4.95107 27.2366 4.48223 26.7678C4.01339 26.2989 3.75 25.663 3.75 25V11.25Z" stroke="#F8FF29" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M11.25 27.5V15H18.75V27.5" stroke="#F8FF29" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <script xmlns=""/>
              </svg>
              <?php } else {?>
                  <svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none"><script xmlns=""/>
                    <path d="M3.75 11.25L15 2.5L26.25 11.25V25C26.25 25.663 25.9866 26.2989 25.5178 26.7678C25.0489 27.2366 24.413 27.5 23.75 27.5H6.25C5.58696 27.5 4.95107 27.2366 4.48223 26.7678C4.01339 26.2989 3.75 25.663 3.75 25V11.25Z" stroke="#99A4B5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.25 27.5V15H18.75V27.5" stroke="#99A4B5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <script xmlns=""/>
                  </svg>
              <?php } ?>
             

              <p class="mt-1 text-[#F1F5F9] text-[10px]">home</p>
            </a>
          </li>

          <li>
           <a href="<?php echo base_url('cricket')?>" class="<?php echo $this->uri->segment(1) === 'cricket' ? 'floating_active_menu':'';?>">
                <?php if($this->uri->segment(1) === 'cricket') {?>
                    <svg class="m-auto" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30" fill="none"><script xmlns=""/>
                    <rect width="30" height="30" fill="url(#pattern0)"/>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_491_2460" transform="scale(0.02)"/>
                    </pattern>
                    <image id="image0_491_2460" width="50" height="50" xlink:href="data:image/png;base64,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"/>
                    </defs>
                    <script xmlns=""/></svg>
                <?php } else {?>
                    <svg class="m-auto" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30" fill="none"><script xmlns=""/>
                    <rect width="30" height="30" fill="url(#pattern0)"/>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_491_2460" transform="scale(0.02)"/>
                    </pattern>
                    <image id="image0_491_2460" width="50" height="50" xlink:href="data:image/png;base64,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"/>
                    </defs>
                    <script xmlns=""/></svg>
                <?php } ?>
                <p class="mt-1 text-[#F1F5F9] text-[10px]">cricket</p>
            </a>
          </li>

          <li>
            <a href="<?php echo base_url('tips-and-prediction')?>" class="<?php echo $this->uri->segment(1) === 'tips-and-prediction' ? 'floating_active_menu' : ''; ?>">
              <div class="mx-auto -mt-[30px] w-[43px] h-[43px] bg-secondary rounded-full grid place-content-center">
                <img src="<?php echo base_url()?>/src/images/global/sun.png" alt="sun icon">
              </div>
              <p class="mt-1 text-white text-xs">Tips & Predictions</p>
            </a>
          </li>
          
          <li>
            <a href="<?php echo base_url('football')?>" class="<?php echo $this->uri->segment(1) === 'football' ? 'floating_active_menu':'';?>">
                <?php if($this->uri->segment(1) === 'football') {?>
                     <img src="<?php echo base_url();?>/src/images/global/football-yellow.svg" class="m-auto"/>
                <?php } else {?>
                   <img src="<?php echo base_url();?>/src/images/global/football.svg" class="m-auto"/>
                <?php } ?>
                <p class="mt-1 text-[#F1F5F9] text-[10px]">Football</p>
            </a>
          </li>


          <li>
            <a href="" class="group">
              <svg class="m-auto" width="32" height="27" viewBox="0 0 32 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.6667 16H4" stroke="#99A4B5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M28 8H4" stroke="#99A4B5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M28 24H4" stroke="#99A4B5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
                 
              <p class="mt-1 text-[#F1F5F9] text-[10px]">more</p> 
            </a>
          </li>
          
      </ul> 
  </div> 


    <!-- scripts -->
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url()?>src/imageCarousel.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    
    <script>
    function shareContent(title, text, url) {
      if (navigator.share) {
        navigator.share({
          title: title,
          text: text,
          url: url
        })
        .then(() => console.log('Content shared successfully'))
        .catch((error) => console.error('Error sharing content:', error));
      } else {
        console.error('Web Share API not supported');
      }
    }
    function handleOption(select) {
        var selectedValue = select.options[select.selectedIndex].value;

        if (selectedValue) {
            window.location.href = selectedValue;
        }
    }

</script>
  </body>
</html>