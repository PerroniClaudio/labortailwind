<?php include('./components/head.php'); ?>


<?php include('./components/navbar.php'); ?>

<main class="container flex flex-col items-center px-16 mx-auto space-y-10">

    <section class="flex flex-col lg:flex-row items-stretch gap-4 p-4">

        <h1 class="text-5xl font-bold text-center lg:text-left h-full">Corsi di formazione <br> <span class="text-sky-500">ECM FAD</span> </h1>

        <div class="flex flex-col justify-end">
            <p class="text-sm font-semibold text-center lg:text-left">Innovazione, efficacia e passione per la formazione che conta in sanità</p> 
        </div>

    </section>

    <section class="flex flex-col lg:flex-row items-center md:mt-8 ">
        
        <div class="order-1 lg:order-2 relative md:w-full">
          <div class="relative lg:scale-[100%] lg:max-h-[30rem]  lg:flex   ">
            <img
              src="https://dev.labormedical.it/labortailwind/views/assets/img/fad.webp"
              alt=""
              class="relative w-[96%]  m-0 z-10 shadow-lg shadow-gray-600 mt-4  lg:object-cover "
            />
            <div class="absolute bg-sky-100 h-[90%] lg:h-[100%] -top-4    right-0 w-[90%]"></div>
          </div>

          <div class="hidden absolute bg-sky-500 rounded text-white md:flex md:flex-col items-start mx-auto justify-center gap-4 w-[20rem] py-6 px-4 -bottom-16 -right-12 z-20 scale-75 2xl:scale-[115%] shadow-lg">
            
            <div class="flex items-center gap-1 text-lg">
                <i class="fas fa-phone"></i>
                <p>+39 031713348</p>
            </div>

            <div class="flex gap-1 pt-2 items-center text-lg">
                <i class="fas fa-map-marker"></i>
                <p>Via Brianza 65 - 22063 Cantú (CO)</p>
            </div>
            

            <div class="flex items-center gap-1 text-lg">
                <i class="fas fa-envelope"></i>
                <p>info@labormedical.it</p>
            </div>

          </div>
        </div>

        <div class="pt-6 flex flex-col lg:items-center order-2 lg:order-1 w-full md:w-[65%] md:mr-8 lg:-ml-12">

          <p class="font-bold text-lg text-center lg:text-left">
            I nostri servizi comprendono
          </p>

          <ul class="pt-2 space-y-4 text-base lg:text-xl">
            <li class="flex items-center gap-2 font-semibold">
              
              <div class="bg-sky-200 p-2 rounded w-10 h-10 flex items-center justify-center">
                <i class="fas fa-laptop text-sky-500"></i> 
              </div>
              
              <span>Corsi <span class="text-sky-500">a distanza</span></span>
              
            </li>

            <li class="flex items-center gap-2 font-semibold">

              <div class="bg-sky-200 p-2 rounded w-10 h-10 flex items-center justify-center">
                <i class="fas fa-webcam text-sky-500"></i> 
              </div>
              
              <span>Corsi <span class="text-sky-500">FAD</span> sincrona</span>
              
            </li>

            <li class="flex items-center gap-2 font-semibold">
              <div class="bg-sky-200 p-2 rounded w-10 h-10 flex items-center justify-center">
                <i class="fas fa-building text-sky-500"></i> 
              </div>
              
              <span>Corsi <span class="text-sky-500">Residenziali</span></span>
              
            </li>

            <li class="flex items-center gap-2 font-semibold">
              <div class="bg-sky-200 p-2 rounded w-10 h-10 flex items-center justify-center">
                <i class="fas fa-user-hard-hat text-sky-500"></i> 
              </div>
              
              <span>Corsi con formazione <span class="text-sky-500">sul campo</span></span>
              
            </li>

          </ul>
          
        </div>
    </section>

    <section class="flex flex-col lg:flex-row gap-12 items-center md:mt-16 py-24">
        
        <div class="order-1 relative md:w-full">
          <div class="relative lg:scale-[100%] lg:max-h-[30rem] lg:flex">
            <img
              src="https://dev.labormedical.it/labortailwind/views/assets/img/ulcera.webp"
              alt=""
              class="relative w-[96%] m-0 z-10 shadow-lg shadow-gray-600 mt-4  lg:object-cover "
            />
            <div class="absolute bg-sky-100 h-[90%] lg:h-[100%] -top-4 right-0 w-[90%]"></div>
          </div>
        </div>

        <div class="pt-6 flex flex-col order-2 md:w-[65%]">

          <p class="text-xs text-sky-500 font-semibold">Chi siamo</p>
          <h3 class="text-5xl font-bold mb-4" >Labor medical organizza <span class="text-sky-500">Corsi e Convegni</span></h3>
          <p class="text-base font-semibold mb-6">
            Labor Medical srl è un partner qualificato nell'organizzazione di corsi e convegni, nella formazione a distanza e nella consulenza in ambiti di specifico interesse per il settore sanitario.
          </p>

          <button class="btn bg-sky-400 hover:bg-sky-600 text-sky-50 text-2xl rounded p-4 shadow-lg">Esplora il nostro catalogo</button>

        </div>

    </section>

    <section class="flex flex-col gap-8 items-center w-full md:mt-16">

      <div class="text-center">
        <p class="text-xs text-sky-500 font-semibold">Team</p>
        <h3 class="text-5xl font-bold mb-4">I nostri <span class="text-sky-500">specialisti</span></h3>
      </div>

      <div class="lg:grid lg:grid-cols-3 gap-4 w-full">
        
        <article class="bg-white rounded p-8 shadow-lg flex flex-col gap-2 items-center mb-4">

          <img src="https://dev.labormedical.it/labortailwind/views/assets/img/Stefania-Marino.webp" alt="" class="w-full rounded">

          <h3 class="text-xl text-sky-500 font-semibold">Stefania Marino</h3>

          <div class="text-center text-sm">
            <p class="text-slate-400">Direzione</p>
            <p class="text-slate-400">Responsabile qualità</p>
          </div>
          
        </article>

        <article class="bg-white rounded p-8 shadow-lg flex flex-col gap-2 items-center mb-4">
          <img src="https://dev.labormedical.it/labortailwind/views/assets/img/Chiara-Brenna.webp" alt="" class="w-full rounded">

          <h3 class="text-xl text-sky-500 font-semibold">Chiara Brenna</h3>

          <div class="text-center text-sm">
            <p class="text-slate-400">Responsabile</p>
            <p class="text-slate-400">Amministrativo</p>
          </div>

        </article>

        <article class="bg-white rounded p-8 shadow-lg flex flex-col gap-2 items-center mb-4">
          <img src="https://dev.labormedical.it/labortailwind/views/assets/img/Francesca-Porro.webp" alt="" class="w-full rounded">
          <h3 class="text-xl text-sky-500 font-semibold">Francesca Porro</h3>

          <div class="text-center text-sm">
            <p class="text-slate-400">Project manager</p>
            <p class="text-slate-400">Segreteria</p>
          </div>

        </article>
        
      </div>

      <div class="text-center">
        <p class="text-xs text-sky-500 font-semibold">Team</p>
        <h3 class="text-5xl font-bold mb-4">Il nostro comitato <span class="text-sky-500">scientifico</span></h3>
      </div>

      <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 w-full">
      
        <article class="bg-white rounded p-8 shadow-lg flex flex-col gap-2 items-center mb-4">

          <img src="https://dev.labormedical.it/labortailwind/views/assets/img/Stefania-Marino.webp" alt="" class="w-full rounded">

          <h3 class="text-xl text-sky-500 font-semibold text-center">Stefania Marino</h3>

          <div class="text-center text-sm">
            <p class="text-slate-400">Direzione</p>
            <p class="text-slate-400">Responsabile qualità</p>
          </div>

        </article>

        <article class="bg-white rounded p-8 shadow-lg flex flex-col gap-2 items-center mb-4">
          <img src="https://dev.labormedical.it/labortailwind/views/assets/img/Chiara-Brenna.webp" alt="" class="w-full rounded">

          <h3 class="text-xl text-sky-500 font-semibold text-center">Chiara Brenna</h3>

          <div class="text-center text-sm">
            <p class="text-slate-400">Responsabile</p>
            <p class="text-slate-400">Amministrativo</p>
          </div>

        </article>

        <article class="bg-white rounded p-8 shadow-lg flex flex-col gap-2 items-center mb-4">
          <img src="https://dev.labormedical.it/labortailwind/views/assets/img/Francesca-Porro.webp" alt="" class="w-full rounded">
          <h3 class="text-xl text-sky-500 font-semibold text-center">Francesca Porro</h3>

          <div class="text-center text-sm">
            <p class="text-slate-400">Project manager</p>
            <p class="text-slate-400">Segreteria</p>
          </div>

        </article>

        <article class="bg-white rounded p-8 shadow-lg flex flex-col gap-2 items-center mb-4">
          <img src="https://dev.labormedical.it/labortailwind/views/assets/img/Chiara-Brenna.webp" alt="" class="w-full rounded">

          <h3 class="text-xl text-sky-500 font-semibold text-center">Chiara Brenna</h3>

          <div class="text-center text-sm">
            <p class="text-slate-400">Responsabile</p>
            <p class="text-slate-400">Amministrativo</p>
          </div>

        </article>

        <article class="bg-white rounded p-8 shadow-lg flex flex-col gap-2 items-center mb-4">
          <img src="https://dev.labormedical.it/labortailwind/views/assets/img/Francesca-Porro.webp" alt="" class="w-full rounded">
          <h3 class="text-xl text-sky-500 font-semibold text-center">Francesca Porro</h3>

          <div class="text-center text-sm">
            <p class="text-slate-400">Project manager</p>
            <p class="text-slate-400">Segreteria</p>
          </div>

        </article>

        <article class="bg-white rounded p-8 shadow-lg flex flex-col gap-2 items-center mb-4">
          <img src="https://dev.labormedical.it/labortailwind/views/assets/img/Chiara-Brenna.webp" alt="" class="w-full rounded">

          <h3 class="text-xl text-sky-500 font-semibold text-center">Chiara Brenna</h3>

          <div class="text-center text-sm">
            <p class="text-slate-400">Responsabile</p>
            <p class="text-slate-400">Amministrativo</p>
          </div>

        </article>

        <article class="bg-white rounded p-8 shadow-lg flex flex-col gap-2 items-center mb-4">
          <img src="https://dev.labormedical.it/labortailwind/views/assets/img/Francesca-Porro.webp" alt="" class="w-full rounded">
          <h3 class="text-xl text-sky-500 font-semibold text-center">Francesca Porro</h3>

          <div class="text-center text-sm">
            <p class="text-slate-400">Project manager</p>
            <p class="text-slate-400">Segreteria</p>
          </div>

        </article>

        <article class="bg-white rounded p-8 shadow-lg flex flex-col gap-2 items-center mb-4">
          <img src="https://dev.labormedical.it/labortailwind/views/assets/img/Francesca-Porro.webp" alt="" class="w-full rounded">
          <h3 class="text-xl text-sky-500 font-semibold text-center">Francesca Porro</h3>

          <div class="text-center text-sm">
            <p class="text-slate-400">Project manager</p>
            <p class="text-slate-400">Segreteria</p>
          </div>

        </article>

      </div>

    </section>

  
    <section class="flex flex-col items-center w-full gap-8">
      <h1 class="text-5xl font-bold">Entra subito nel vivo dei corsi <span class="text-sky-500">con noi</span></h1>

      <div class="btn bg-sky-500 hover:bg-sky-600 p-8 text-white text-2xl rounded shadow-lg">Visita il nostro catalogo</div>
    </section>

    <div class="h-24"></div>
    
</main>

<?php include('./components/footer.php'); ?>