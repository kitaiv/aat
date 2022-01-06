<?php include_once "../../header.php"; ?>

    <section class="pb_section" data-section="contact" id="section-contact">
        <div class="container">

            <div class="row justify-content-md-center text-center mb-5">
                <div class="col-lg-7">
                    <h2 class="mt-0 heading-border-top font-weight-normal">ПОСТАВТЕ ПИТАННЯ ЮРИСТУ
                    </h2>
                    <p>Заповніть форму та натисніть “Віправити”, щоб отримати детальну консультацію з Вашого питання!
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 pr-md-5 pr-sm-0 mb-4">
                    <form action="#"
                          id="contact-form"
                    >
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="name">Ваше ім'я</label>
                                    <input
                                            type="text"
                                            class="form-control p-3 rounded-0"
                                            id="name"
                                            placeholder="Іван"
                                            required
                                    >
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="email">Ваша пошта</label>
                                    <input
                                            type="email"
                                            class="form-control p-3 rounded-0"
                                            id="email"
                                            placeholder="example@gmail.com"
                                            required
                                    >
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="phone">Номер телефону</label>
                                <input
                                        type="tel"
                                        class="form-control p-3 rounded-0 tel"
                                        id="phone"
                                        placeholder="+38(98)-xxx-xx-xx"
                                        required
                                >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Ваше питання</label>
                            <textarea
                                    cols="30"
                                    rows="10"
                                    class="form-control p-3 rounded-0"
                                    id="message"
                                    required
                            ></textarea>
                        </div>
                        <div class="form-group" style="display: flex">
                            <input
                                    type="submit"
                                    class="btn pb_outline-dark pb_font-13 pb_letter-spacing-2 p-3 rounded-0 btn btn-success swalDefaultSuccess"
                                    id="submit-btn"
                                    value="Відправити"
                                    style="height: 4rem"
                            >

                            <div class="loader" id="spin" style="display: none">Loading...</div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <ul class="pb_contact_details_v1">
                        <li>
                            <span class="text-uppercase">Email</span>
                            <a style="color: #212529" href="mailto:diolawlviv@gmail.com">diolawlviv@gmail.com</a>
                        </li>
                        <li>
                            <span class="text-uppercase">Номер телефону</span>
                            <a style="color: #212529" href="tel:+380674398979">+38 (067) 439 89 79</a>
                        </li>
                        <li>
                            <span class="text-uppercase">Соціальні мережі</span>
                            <div style="display: flex; justify-items: baseline; justify-content: flex-start">
                                <a
                                        href="https://www.facebook.com/diolawlviv"
                                        target="_blank"
                                        style="text-decoration: none; color: black; margin-right: 1rem"
                                >
                                    <i
                                            class="fab fa-facebook"
                                            style="
                                                font-size: 2rem;
                                                cursor: pointer;
                                            "
                                    ></i>
                                </a>
                                <a
                                        href="https://www.instagram.com/diolaw.lviv/"
                                        target="_blank"
                                        style="text-decoration: none; color: black"
                                >
                                    <i
                                            class="fab fa-instagram"
                                            style="
                                                font-size: 2rem;
                                                cursor: pointer;
                                            "
                                    ></i>
                                </a>

                            </div>
                        </li>
                        <li>
                            <span class="text-uppercase">Адреса</span>
                            <strong>вул. Політехнічна, 9</strong><br>
                            години роботи:<br/> <strong>понеділок-п'ятниця <br/>з 10:00 до 18:00</strong>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2573.4581385820634!2d24
                        .012437015709118!3d49.83384867939499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13
                        .1!3m3!1m2!1s0x473add7bbfd2a3bd%3A0x83cd65948f992e50!2sPolitekhnichna%20St%2C%209%2C%20L&#39;
                        viv%2C%20L&#39;vivs&#39;
                        ka%20oblast%2C%2079000!5e0!3m2!1sen!2sua!4v1641391871912!5m2!1sen!2sua" width="600"
                                    height="450" style="border:0; margin-top: 2rem" allowfullscreen=""
                                    loading="lazy"></iframe>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </section>
    <!-- END section -->
    <!-- jQuery -->
    <script src="<?php $_SERVER[DOCUMENT_ROOT] ?>/aat/admin/adminPanel/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php $_SERVER[DOCUMENT_ROOT] ?>/aat/admin/adminPanel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?php $_SERVER[DOCUMENT_ROOT] ?>/aat/admin/adminPanel/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?php $_SERVER[DOCUMENT_ROOT] ?>/aat/admin/adminPanel/plugins/toastr/toastr.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php $_SERVER[DOCUMENT_ROOT] ?>/aat/admin/adminPanel/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php $_SERVER[DOCUMENT_ROOT] ?>/aat/admin/adminPanel/dist/js/demo.js"></script>
    <script src="<?php $_SERVER[DOCUMENT_ROOT] ?>/aat/assets/js/contact-script.js" defer></script>
<?php include_once "../../footer.php"; ?>