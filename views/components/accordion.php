<script>

    const accordions = document.querySelectorAll(".accordion-header")

    accordions.forEach(accordion => {

        accordion.addEventListener("click", function () {

            let collapse = document.querySelector(this.getAttribute('aria-controls'))
            let indicator = document.querySelector(`${this.getAttribute('aria-indicator')} .indicator-icon`)

            if( collapse.className.split(' ').includes('show')) {

                collapse.classList.remove("show")
                collapse.classList.add("hidden")
                indicator.classList.remove("fa-chevron-down")
                indicator.classList.add("fa-chevron-up")

            } else {

                collapse.classList.remove("hidden")
                collapse.classList.add("show")

                indicator.classList.remove("fa-chevron-up")
                indicator.classList.add("fa-chevron-down")

            }



        })
        
    });


</script>