<?php
/*
Template Name: Contacts
*/
?>
    <?php
        get_header();
        the_post();
    ?>
    <style>
        .hero__form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        .hero__form span {
            font-size: 40px;
            color: #ffffff;
            display: block;
            text-align: center;
        }
        .hero__form pre {
            margin: 0;
        }
        .hero__form input {
            font-size: 18px;
            line-height: 18px;
            padding: 10px 10px;
            border-radius: 20px;
            border:none;
            text-align: center;
            margin-bottom: 20px;
        }
        .hero__form .btn {
            margin: auto;
            display: block;
            border:none;
        }
        .wpcf7-form-control.wpcf7-text.wpcf7-validates-as-required.input.wpcf7-not-valid {
            border: 2px solid red;
        }
        .form_popap {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, .8);
            display: flex;
            opacity: 0;
            z-index: -1;
            transition: opacity .3s linear, z-index .3s linear;
        }
        .form_popap h2 {
            margin: auto;
            color: #ffffff;
            font-size: 40px;
        }
    </style>
    <!-- site__content -->
    <div class="site__content">

    <!-- hero -->
    <div class="hero" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>');">

        <div class="hero__form">
            <span><?php echo get_the_title(); ?></span>
            <?php echo do_shortcode('[contact-form-7 id="83" title="Contact form 1"]'); ?>
        </div>

    </div>
    <!-- /hero -->

    </div>
    <!-- /site__content -->

    <div class="form_popap" id="form_popap">
        <h2 class="form_text" id="form_text">
            Test
        </h2>
    </div>

    <script>

        var formPopap = document.getElementById('form_popap'),
            form_text = document.getElementById('form_text');


        document.addEventListener( 'wpcf7mailsent', function() {
            formPopap.style.opacity = '1';
            formPopap.style.zIndex = '20';
            form_text.innerText = 'Сообщение успешно доставлено!';
            setTimeout(function () {
                formPopap.style.opacity = '0';
                formPopap.style.zIndex = '-1';
            }, 2000);
        }, false );

        document.addEventListener( 'wpcf7invalid', function() {

            form_text.innerText = '';

                var inputName = document.getElementById('name').value,
                    inputPhone = document.getElementById('phone').value;


                if ((inputName.length == 0) && (inputPhone.length == 0)) {
                    form_text.innerText = 'Заполните все поля';
                } else if (inputName.length == 0) {
                        form_text.innerText = 'Заполните поле имени';
                    } else if(inputPhone == 0) {
                        form_text.innerText = 'Заполните поле телефона';
                    }

                if((inputPhone.length > 0) && isNaN(inputPhone) && inputName.length == 0) {
                    form_text.innerText = 'Заполните поле имени и коректно поле телефона';
                } else  if ((inputPhone.length > 0) && isNaN(inputPhone)) {
                    form_text.innerText = 'Заполните коректно поле телефона';
                }


            formPopap.style.opacity = '1';
            formPopap.style.zIndex = '20';
            setTimeout(function () {
                formPopap.style.opacity = '0';
                formPopap.style.zIndex = '-1';
            }, 2000);
        }, false );
    </script>

<?php get_footer(); ?>