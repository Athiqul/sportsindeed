
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
            <?php if ($this->session->flashdata('validate_errors')): ?>
                <div class="container" style="color: red; text-align: center;">
                    <?= $this->session->flashdata('validate_errors'); ?>
                </div>
            <?php endif; ?>
            <div class="bg-white p-6 lg:py-14 lg:px-10 rounded-xl"> 
                <div>
                    <div class="text-center">
                        <h1 class="text-2xl lg:text-4xl font-bold text-black">Create Account</h1>
                        <p class="mt-3 text-sm text-textGray">Please put your information below</p>
                    </div>
                   <form method="post" action="<?php echo base_url('sign-up-complete')?>?>">
                    <div class="mt-8 lg:mt-10">
                        <div class="mb-8 grid md:grid-cols-2 lg:grid-cols-3 gap-4 xl:gap-x-8 lg:gap-y-6">
                            <div>
                                <p class="mb-2 font-bold text-sm text-textGray capitalize">First name</p>
                                <div>
                                  <input
                                    name="first_name"
                                    type="text"
                                    required
                                    placeholder="Enter Your first name"
                                    class="relative w-full h-12 p-4 py-1 border border-[#D8DCE3] focus:border-gray/30 outline-none placeholder:text-[#6A737D] text-[#6A737D] text-sm"
                                  />
                                </div>
                            </div>

                            <div>
                                <p class="mb-2 font-bold text-sm text-textGray capitalize">Last name</p>
                                <div>
                                  <input
                                    name="last_name"
                                    type="text"
                                    required
                                    placeholder="Enter Your last name"
                                    class="relative w-full h-12 p-4 py-1 border border-[#D8DCE3] focus:border-gray/30 outline-none placeholder:text-[#6A737D] text-[#6A737D] text-sm"
                                  />
                                </div>
                            </div>

                            <div>
                                <p class="mb-2 font-bold text-sm text-textGray capitalize">Username*</p>
                                <div>
                                  <input
                                    name="user_name"
                                    type="text"
                                    required
                                    placeholder="Enter your username"
                                    required
                                    class="relative w-full h-12 p-4 py-1 border border-[#D8DCE3] focus:border-gray/30 outline-none placeholder:text-[#6A737D] text-[#6A737D] text-sm"
                                  />
                                </div>
                            </div>

                            <div>
                                <p class="mb-2 font-bold text-sm text-textGray capitalize">Email Address</p>
                                <div>
                                  <input
                                    name="email"
                                    type="email"
                                    required
                                    placeholder="Enter your email address"
                                    class="relative w-full h-12 p-4 py-1 border border-[#D8DCE3] focus:border-gray/30 outline-none placeholder:text-[#6A737D] text-[#6A737D] text-sm"
                                  />
                                </div>
                            </div>

                            <div>
                                <p class="mb-2 font-bold text-sm text-textGray capitalize">Password</p>
                                <div>
                                  <input
                                    name="password"
                                    type="password"
                                    required
                                    placeholder="Enter Password"
                                    class="relative w-full h-12 p-4 py-1 border border-[#D8DCE3] focus:border-gray/30 outline-none placeholder:text-[#6A737D] text-[#6A737D] text-sm"
                                  />
                                </div>
                            </div>

                            <div>
                                <p class="mb-2 font-bold text-sm text-textGray capitalize">Confirm password</p>
                                <div>
                                  <input
                                    name="confirm_password"
                                    type="password"
                                    required
                                    placeholder="Confirm password"
                                    class="relative w-full h-12 p-4 py-1 border border-[#D8DCE3] focus:border-gray/30 outline-none placeholder:text-[#6A737D] text-[#6A737D] text-sm"
                                  />
                                </div>
                            </div>

                            <div>
                                <p class="mb-2 font-bold text-sm text-textGray capitalize">Gender</p>
                                <div class="flex gap-3 xl:gap-5">
                                  <div class="grow">
                                    <input
                                      name="gender"
                                      type="radio"
                                      id="male"
                                      class="hidden custom-radio-button"
                                    />
                                    <label for="male">Male</label>
                                  </div>
                                  <div class="grow">
                                    <input
                                      
                                      type="radio"
                                      name="gender"
                                      id="female"
                                      class="hidden custom-radio-button"
                                    />
                                    <label for="female">Female</label>
                                  </div>
                                  <div class="grow">
                                    <input
                                      type="radio"
                                      name="gender"
                                      id="other"
                                      class="hidden custom-radio-button"
                                    />
                                    <label for="other">Other</label>
                                  </div>
                                </div>
                            </div>

                            <div>
                                <p class="mb-2 font-bold text-sm text-textGray capitalize">Date of birth</p>
                                <div>
                                  <input
                                    name="date_of_birth"
                                    type="date"
                                    required
                                    placeholder="Date of birth"
                                    class="relative w-full h-12 p-4 py-1 border border-[#D8DCE3] focus:border-gray/30 outline-none placeholder:text-[#6A737D] text-[#6A737D] text-sm"
                                  />
                                </div>
                            </div>

                            <div class="mt-2 lg:mt-5 flex items-center gap-3 xl:gap-8">
                                <p class="font-bold text-sm text-textGray capitalize">Subscribe Newsletter</p>
                                <div class="flex items-center gap-5">
                                  <div class="flex items-center gap-1.5">
                                    <input type="radio" name="subscribe_newsletter" id="yes" checked class="accent-black w-4 lg:w-5 h-4 lg:h-5" />
                                    <label for="yes" class="text-sm text-[#6A737D] capitalize">Yes</label>
                                  </div>
                                  <div class="flex items-center gap-1.5">
                                    <input type="radio" name="subscribe_newsletter" id="no" class="accent-black w-4 lg:w-5 h-4 lg:h-5" />
                                    <label for="no" class="text-sm text-[#6A737D] capitalize">no</label>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <button class="bg-secondary rounded-xl py-4 lg:py-5 px-8 lg:px-10 font-bold text-base lg:text-lg text-white">
                                Sign up
                            </button>
                        </div>

                        <div class="mt-5 lg:mt-10 text-sm text-black">
                            Already  have an account?   
                            <span class="font-semibold">
                                <a href="<?php echo base_url('sign-in')?>?>" class="hover:text-blue-600">Login</a>
                            </span>
                        </div>
                    </div>
                  </form>   
                </div>
            </div>
        </div>
      </section>