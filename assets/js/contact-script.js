document.addEventListener('DOMContentLoaded', () => {
    const formBtn = document.querySelector('#submit-btn')
    function disapearMessage(id){
        setTimeout(() => {
            document.querySelector(`#${id}`).style.display = 'none'
        }, 2000)
    }
    formBtn.addEventListener('click', event => {
        event.preventDefault()
        const name = document.querySelector('#name').value,
            email = document.querySelector('#email').value,
            phone = document.querySelector('#phone').value,
            message = document.querySelector('#message').value;
        if(name === "" || email === "" || phone === "" || message === ""){
            if(email.includes('@')){
                alert('Неправильно введений e-mail!')
            }else{
                alert('Неправильно введені дані, перевірте ще раз та спробуйте знову!')
            }
        }else{
            if(email.includes('@')){
                const spin = document.querySelector('#spin')
                spin.style.display = 'block';

                fetch(`https://script.google.com/macros/s/AKfycby2Z8lDH_cOvnd5fX31ulYWl504uxEVsWqhuiq0ajv8tUtRPbmJG_qj9pSKdsp2zXiUPg/exec?Name=${name}&Email=${email}&Phone=${phone}&Message=${message}`,
                    {
                        method: 'POST'
                    })
                    .then(response => response.json())
                    .then(result => {
                        if(result.result === "success"){
                            name.value = ""
                            email.value = ""
                            phone.value = ""
                            message.value = ""
                            console.log(result)
                            spin.style.display = 'none';
                        }
                        alert('Ваша заявка була успішно відправлена!')

                    })
                    .catch(err => console.log(err))
            }else{
            }

        }
    })
    window.addEventListener("DOMContentLoaded", function () {
        [].forEach.call(document.querySelectorAll('.tel'), function (input) {
            var keyCode;

            function mask(event) {
                event.keyCode && (keyCode = event.keyCode);
                var pos = this.selectionStart;
                if (pos < 3) event.preventDefault();
                var matrix = "+38 (___) ___ __ __",
                    i = 0,
                    def = matrix.replace(/\D/g, ""),
                    val = this.value.replace(/\D/g, ""),
                    new_value = matrix.replace(/[_\d]/g, function (a) {
                        return i < val.length ? val.charAt(i++) || def.charAt(i) : a
                    });
                i = new_value.indexOf("_");
                if (i != -1) {
                    i < 5 && (i = 3);
                    new_value = new_value.slice(0, i)
                }
                var reg = matrix.substr(0, this.value.length).replace(/_+/g,
                    function (a) {
                        return "\\d{1," + a.length + "}"
                    }).replace(/[+()]/g, "\\$&");
                reg = new RegExp("^" + reg + "$");
                if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
                if (event.type == "blur" && this.value.length < 5) this.value = ""
            }

            input.addEventListener("input", mask, false);
            input.addEventListener("focus", mask, false);
            input.addEventListener("blur", mask, false);
            input.addEventListener("keydown", mask, false)

        });

    });

})