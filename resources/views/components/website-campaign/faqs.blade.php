  <section class="py-16 px-4 bg-secondary/30">
      <div class="container mx-auto">
          <div class="text-center max-w-3xl mx-auto mb-16 space-y-4 animate-fade-in">
              <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800"> Let’s Build <span class="text-[#105278]"> Your Digital Success Story
</span></h2>
              <p class="text-lg text-muted-foreground"> Looking for the best website company in Patna to create a powerful online presence? Let’s build a website you’ll actually be proud of.</p>
          </div>
          <div class="space-y-4 max-w-4xl mx-auto">

              <!-- Q1 -->
              <div x-data="{ open: true }" class="border rounded-lg shadow-sm">
                  <button @click="open = !open"
                      class="w-full flex justify-between items-center px-5 py-4 text-left font-medium focus:outline-none">
                      <span :class="open ? 'text-[#105278]' : 'text-gray-800'">
                          What services does your company provide?
                      </span>
                      <i
                          :class="open ? 'fa-solid fa-chevron-up text-[#105278]' :
                              'fa-solid fa-chevron-down text-gray-400'"></i>
                  </button>
                  <div x-show="open" x-transition class="px-5 pb-4 text-gray-600 text-sm leading-relaxed">
                      We build everything your business needs to grow online. From modern websites and mobile apps to UI/UX design, branding, digital marketing, and custom software—we handle it all. As a leading provider of website design services in Patna, our focus is simple: clean design, smooth performance, and solutions that actually help your business get results.
                  </div>
              </div>

              <!-- Q2 -->
              <div x-data="{ open: false }" class="border rounded-lg shadow-sm">
                  <button @click="open = !open"
                      class="w-full flex justify-between items-center px-5 py-4 text-left font-medium focus:outline-none">
                      <span :class="open ? 'text-[#105278]' : 'text-gray-800'">
                          How long does it take to complete a project?
                      </span>
                      <i
                          :class="open ? 'fa-solid fa-chevron-up text-[#105278]' :
                              'fa-solid fa-chevron-down text-gray-400'"></i>
                  </button>
                  <div x-show="open" x-transition class="px-5 pb-4 text-gray-600 text-sm leading-relaxed">
                      It depends on your project requirements, but we always deliver on time without compromising quality. Websites typically take 2–4 weeks, while larger custom projects require additional time. Our experienced web designer in Patna and the development team keep you informed throughout the process.
                  </div>
              </div>

              <!-- Q3 -->
              <div x-data="{ open: false }" class="border rounded-lg shadow-sm">
                  <button @click="open = !open"
                      class="w-full flex justify-between items-center px-5 py-4 text-left font-medium focus:outline-none">
                      <span :class="open ? 'text-[#105278]' : 'text-gray-800'">
                          Do you offer post-launch support and maintenance?
                      </span>
                      <i
                          :class="open ? 'fa-solid fa-chevron-up text-[#105278]' :
                              'fa-solid fa-chevron-down text-gray-400'"></i>
                  </button>
                  <div x-show="open" x-transition class="px-5 pb-4 text-gray-600 text-sm leading-relaxed">
                     Yes, absolutely. Even after your project goes live, we stay connected to make sure everything runs smoothly. We handle updates, fixes, security, and performance improvements whenever needed. This ongoing commitment is why many clients consider us the best website development company in Patna.
                  </div>
              </div>

              <!-- Q4 -->
              <div x-data="{ open: false }" class="border rounded-lg shadow-sm">
                  <button @click="open = !open"
                      class="w-full flex justify-between items-center px-5 py-4 text-left font-medium focus:outline-none">
                      <span :class="open ? 'text-[#105278]' : 'text-gray-800'">
                          What industries do you work with?
                      </span>
                      <i
                          :class="open ? 'fa-solid fa-chevron-up text-[#105278]' :
                              'fa-solid fa-chevron-down text-gray-400'"></i>
                  </button>
                  <div x-show="open" x-transition class="px-5 pb-4 text-gray-600 text-sm leading-relaxed">
                      We work with businesses across education, healthcare, real estate, retail, NGOs, hospitality, manufacturing, and startups. Whether you're looking for website design in Patna or advanced web solutions, our team delivers tailored results that support long-term growth.

                  </div>
              </div>

          </div>

      </div>
  </section>
