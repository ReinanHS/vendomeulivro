document.addEventListener("DOMContentLoaded", function(event) {

    function scrollElementById(id){
        $([document.documentElement, document.body]).animate({
            scrollTop: $(id).offset().top
        }, 2000);
    }

    if(window.location.pathname == '/atendimento-ao-cliente'){
        function goToElement(){
            let item = window.location.hash;
            item = item.replace('/', '_')
            item = item.replace('#', '')

            if(item != "" && $(`#collapse_${item}`).length != 0){
                $(`#collapse_${item}`).collapse('show')

                scrollElementById(`#heading_${item}`)
            }
        }

        goToElement()

        $(".infoboxes .card").click(function() {
            setTimeout(() => {
                goToElement()
            }, 100)
        });
    }else if(window.location.pathname == '/vender'){

        if(window.location.hash == '#comparar-todos-os-planos'){
            scrollElementById(`#comparar-todos-os-planos`)
        }

        $(".comparar-planos-box").click(() => {
            scrollElementById(`#comparar-todos-os-planos`)
        })

        $("#btm-mais-info").click(() => {
            scrollElementById(`#comparar-todos-os-planos`)
        })
    }
});
