<?php include('../components/head.php'); ?>
<?php include('../components/pdo.php'); ?>

<?php include('../components/SidenavModal.php'); ?>

<?php 

    $uid = 9689;

    $sql = "SELECT * FROM users WHERE uid = :uid";
    $statement = $db->prepare($sql);
    $statement->execute(array("uid" => $uid));
    $user = $statement->fetch();

    $initials = substr($user['name'],0,1) . substr($user['surname'],0,1);
    $fullname = ucfirst(strtolower($user['name'])) . " " . ucfirst(strtolower($user['surname']));

?>

<div class="flex">

    <aside class="lg:flex-[1_1_0%] h-screen sticky top-0">

        <?php include('../components/ProfiloMainSidenav.php'); ?>
       
    </aside>

    <aside class="lg:flex-[1_1_0%] h-screen sticky top-0">

        <?php include('../components/ProfiloDatiSidenav.php'); ?>
       
    </aside>

    <main class="flex-[3_1_0%]">

        <section class="flex flex-col gap-4 p-4 min-h-screen">
            
        <?php include('../components/navbar.php'); ?>
        
        <?php 

            switch($_GET['tipo']) {
                case 'personali': 

                    $dnasc = DateTime::createFromFormat("d/m/Y", $user['dnasc']);
                        
                    ?>

                    <div class="form-group grid grid-cols-1 grid-rows-5 md:grid-cols-2 md:grid-rows-3 gap-4">
                        <article class="form-element group">
                            <label for="name">Nome</label>
                            <input type="text" id="name" value="<?= $user['name'] ?>"> 
                        </article>
                        <article class="form-element group">
                            <label for="surname">Cognome</label>
                            <input type="text" id="surname" value="<?= $user['surname'] ?>"> 
                        </article>
                        <article class="form-element group">
                            <label for="cfp">Codice Fiscale</label>
                            <input type="text" id="cfp" value="<?= $user['cfp'] ?>"> 
                        </article>
                        <article class="form-element group">
                            <label for="lnasc">Luogo di nascita</label>
                            <input type="text" id="lnasc" value="<?= $user['lnasc'] ?>"> 
                        </article>
                        <article class="form-element group">
                            <label for="dnasc">Data di nascita</label>
                            <input type="date" id="dnasc" value="<?= $dnasc->format('Y-m-d') ?>"> 
                        </article>
                    </div>

                    <button class="btn bg-sky-500 text-center p-4 rounded text-sky-50 font-semibold w-full md:w-1/4">Salva</button>

                    <?php

                    break;
                case 'recapito': 
                        
                    ?>

                    <div class="form-group grid grid-cols-2 gap-4">

                        <article class="form-element flex flex-col group">

                            <div class="flex-[1_1_0%] flex flex-col gap-2">
                                <label for="nazione">Nazione</label>
                                <input type="text" id="cerca-nazione" placeholder="Cerca nazione...">
                            </div>
                            
                           <select name="" id="nazione" disabled>
                                <option value="0">Scegli</option>
                           </select>


                        </article>
                        <article class="form-element flex flex-col group"></article>
                        
                        <article class="form-element flex flex-col group">

                            <div class="flex-[1_1_0%] flex flex-col gap-2">
                                <label for="provincia">Provincia</label>
                                <input type="text" id="cerca-provincia" placeholder="Cerca provincia...">
                            </div>
                            
                            <select name="" id="provincia" disabled>
                                <option value="0">Scegli</option>
                            </select>


                        </article>
                        
                        <article class="form-element flex flex-col group">

                            <div class="flex-[1_1_0%] flex flex-col gap-2">
                                <label for="comune">Comune</label>
                                <input type="text" id="cerca-comune" placeholder="Cerca comune..." disabled>
                            </div>
                            
                            <select name="" id="comune" disabled>
                                <option value="0">Scegli</option>
                            </select>


                        </article>
                        
                        <article class="form-element flex flex-col group">

                            <div class="flex-[1_1_0%] flex flex-col gap-2">
                                <label for="cap">Cap</label>
                                <input type="text" id="cap" disabled>
                            </div>

                        </article>
                        
                        <article class="form-element flex flex-col group">

                            <div class="flex-[1_1_0%] flex flex-col gap-2">
                                <label for="ind">Indirizzo</label>
                                <input type="text" id="ind">
                            </div>

                        </article>

                        <article class="form-element flex flex-col group">

                            <div class="flex-[1_1_0%] flex flex-col gap-2">
                                <label for="cel">Cellulare</label>
                                <input type="text" id="cel">
                            </div>

                        </article>

                        <article class="form-element flex flex-col group">

                            <div class="flex-[1_1_0%] flex flex-col gap-2">
                                <label for="tel">Recapito telefonico</label>
                                <input type="text" id="tel">
                            </div>

                        </article>

                    </div>

                    <button class="btn bg-sky-500 text-center p-4 rounded text-sky-50 font-semibold w-full md:w-1/4">Salva</button>

                    <script>

                        <?php 

                            $sql_nazioni = "SELECT * FROM nazioni";
                            $statement_nazioni = $db->prepare($sql_nazioni);
                            $statement_nazioni->execute(array());

                            $nazioni_array = '["';
                            $nazioni = [];

                            while($nazione = $statement_nazioni->fetch()) {
                                $nazioni[] = $nazione['nazione'];
                            }

                            $nazioni_array .= implode('","',$nazioni) . '"]'; 

                            $sql_provincia = "SELECT * FROM regioni_provincie";
                            $statement_provincia = $db->prepare($sql_provincia);
                            $statement_provincia->execute(array());

                            $provincia_array = '["';
                            $provincia = [];

                            while($prov = $statement_provincia->fetch()) {
                                $provincia[] = $prov['provincia'];
                            }

                            $provincia_array .= implode('","',$provincia) . '"]'; 

                        ?>

                        selectWithSearch("nazione", <?= $nazioni_array ?>)
                        selectWithSearch("provincia", <?= $provincia_array ?>)

                        function selectWithSearch(id, fullList) {

                            const cercaInput = document.querySelector(`#cerca-${id}`)
                            const select = document.querySelector(`#${id}`)

                            cercaInput.addEventListener("keyup", function() {

                                let cerca = this.value

                                if(cerca.length > 2) {

                                    select.innerHTML = ""

                                    let defaultOption = document.createElement('option');
                                    defaultOption.value = "0";
                                    defaultOption.innerHTML = "Scegli";
                                    select.appendChild(defaultOption);
                                    
                                    let result = fullList.filter( element =>  element.toUpperCase().includes(cerca.toUpperCase()) ).forEach(element => {
                                        
                                        const opt = document.createElement('option');
                                        opt.value = element;
                                        opt.innerHTML = element;
                                        select.appendChild(opt);

                                    });

                                    if(select.children.length > 0) {
                                        select.disabled = false
                                    } else {
                                        select.disabled = true
                                    }

                                }

                            })

                        }
                       
                        const provinciaSelector = document.querySelector("#provincia")
                        provinciaSelector.addEventListener("change", function() {
                            let provincia = this.value

                            const params = new URLSearchParams({provincia})
                            const url = `https://dev.labormedical.it/labortailwind/api/getComuniListByProvincia.php?${params}`
                            
                            fetch(url)
                            .then(data => data.json())
                            .then(res => {
                                const cercaInput = document.querySelector(`#cerca-comune`)
                                cercaInput.disabled = false
                                selectWithSearch("comune", res.comuni)
                            })
                            .catch(e => console.log(e))
                        })

                        const comuneSelector = document.querySelector("#comune")
                        comuneSelector.addEventListener("change", function() {

                            let comune = this.value

                            const params = new URLSearchParams({comune})
                            const url = `https://dev.labormedical.it/labortailwind/api/getCapByComune.php?${params}`

                            fetch(url)
                            .then(data => data.json())
                            .then(res => {
                               let capInput = document.querySelector("#cap")
                               capInput.value = res.cap
                            })
                            .catch(e => console.log(e))

                        })



                    </script>

                    <?php

                    break;
                case 'accesso': 
                        ?>

                        <div class="form-group grid grid-cols-2 gap-4">
                            <article class="form-element flex flex-col group">

                                <div class="flex-[1_1_0%] flex flex-col gap-2">
                                    <label for="username">Username</label>
                                    <input type="text" id="username" disabled>
                                </div>

                            </article>

                            <article class="form-element flex flex-col group">

                                <div class="flex-[1_1_0%] flex flex-col gap-2">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" disabled>
                                </div>

                            </article>

                            
                        </div>

                        <button class="btn bg-transparent text-center p-2 rounded text-sky-500 font-semibold w-full" id="cambia-password">Vuoi modificare la tua password?</button>

                        <div class="form-group hidden grid-cols-2 gap-4" id="cambia-password-container">

                            <article class="form-element flex flex-col group">

                                <div class="flex-[1_1_0%] flex flex-col gap-2">
                                    <label for="newpassword">Nuova password</label>
                                    <input type="password" autocomplete="new-password" id="newpassword">
                                </div>

                            </article>

                            <article class="form-element flex flex-col group">

                                <div class="flex-[1_1_0%] flex flex-col gap-2">
                                    <label for="repeatpassword">Ripeti password</label>
                                    <input type="password" autocomplete="new-password" id="repeatpassword" >
                                </div>

                            </article>

                            <div></div>

                            <article class="flex flex-row-reverse ">
                                <button class="btn bg-sky-500 text-center p-4 rounded text-sky-50 font-semibold w-full md:w-1/4">Salva</button>
                            </article>
                            
                        </div>

                        <script>

                            const btnOpener = document.querySelector("#cambia-password")
                            btnOpener.addEventListener("click", function() {

                                const container = document.querySelector("#cambia-password-container")
                                container.classList.remove("hidden")
                                container.classList.add("grid")

                            })

                            const passwordInput = document.querySelector("#repeatpassword")
                            passwordInput.addEventListener("keyup", function () {

                                const repeatInput = document.querySelector("#newpassword")

                          

                                if(repeatInput.value != passwordInput.value) {
                                    passwordInput.classList.add("invalid")
                                } else {
                                    passwordInput.classList.remove("invalid")
                                }

                            })

                        </script>
                        <?php
                    break;
                case 'professionali': 
                        $professionali_selected = "selected";
                    break;
                case 'privacy': 
                        $privacy_selected = "selected";
                    break;
            }

        ?>
       

        </section>

        <?php include('../components/footer.php'); ?>
    </main>

</div>