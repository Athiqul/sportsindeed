  <!-- Advertisement -->
      <section class="px-7 lg:px-0 mt-4 lg:mt-4">
        <div class="custom-container">
          <div
            class="rounded-xl h-[90px] grid place-content-center text-center"
          >
            <?php echo $home_ads[0]->embed_code;?>
          </div>
        </div>
      </section>

      <!-- form -->
      <section class="my-10">
        <div class="custom-container">
            <div class="bg-white rounded-xl flex flex-col lg:flex-row lg:justify-between lg:items-center"> 
                <div class="lg:w-[60%] hidden lg:block">
                    <img src="./src/images/profile/cricket.jpg" alt="Cricket match img">
                </div>
                
                <div class="lg:w-[40%] px-6 lg:px-10 py-6 lg:py-0">
                    <div>
                        <h1 class="text-2xl lg:text-4xl font-semibold text-black">Sign in</h1>
                        <p class="mt-3 text-sm text-textGray">Please put your information below</p>
                        <?php
                        if ($this->session->flashdata('error_message')) {
                            echo '<div style="color:red;">' . $this->session->flashdata('error_message') . '</div>';
                        }
                        ?>
                    </div>
                   <form method="post" action="<?php echo base_url('sign-in-complete')?>"> 
                    <div class="mt-5 lg:mt-10">
                        <div>
                            <p class="mb-2 font-bold text-sm text-textGray capitalize">Email*</p>
                            <div>
                              <input
                                name="email"
                                type="text"
                                placeholder="Enter your email"
                                required
                                class="relative w-full h-12 p-4 py-1 border border-[#D8DCE3] focus:border-gray/30 outline-none placeholder:text-[#6A737D] text-[#6A737D] text-sm"
                              />
                            </div>
                        </div>

                        <div class="mt-4 mb-7">
                            <p class="mb-2 font-bold text-sm text-textGray capitalize">Password*</p>
                            <div>
                              <input
                                name="password"
                                type="password"
                                placeholder="Password"
                                required
                                class="relative w-full h-12 p-4 py-1 border border-[#D8DCE3] focus:border-gray/30 outline-none placeholder:text-[#6A737D] text-[#6A737D] text-sm"
                              />
                            </div>
                        </div>

                        <button class="bg-secondary rounded-xl py-4 lg:py-5 px-8 lg:px-10 font-bold text-base lg:text-lg text-white">
                            Sign in
                        </button>
                    </div>
                   </form>
                    <div class="mt-5 lg:mt-10 text-sm text-black">
                        Don't have an account?  
                        <span class="font-semibold">
                            <a href="<?php echo base_url('sign-up')?>" class="hover:text-blue-600">Sign up</a>
                        </span>
                    </div>
                </div> 
            </div>
        </div>
      </section>