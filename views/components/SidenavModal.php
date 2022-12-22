<script>

    function sidenavModal(id) {
        const sidenavopener = document.querySelector(`#${id}-opener`)
        const sidenavdismiss = document.querySelector(`#${id}-dismiss`)
        const container = document.querySelector(`#${id}-container`)
        const sidenav = document.querySelector(`#${id}`)
        const body = document.querySelector("body")


        sidenavopener.addEventListener("click", function () {
            
            container.classList.remove("w-0")
            sidenav.classList.remove("hidden")
            body.classList.add("overflow-hidden")

        })

        sidenavdismiss.addEventListener("click", function () {
            
            container.classList.add("w-0")
            sidenav.classList.add("hidden")
            body.classList.remove("overflow-hidden")

        })
    }

</script>