<?php include_once "../../header.php"; ?>

    <section class="pb_section" data-section="contact" id="section-contact">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>
        <div class="row justify-content-md-center text-center mb-5">
            <div class="col-lg-7">
                <h2 class="mt-0 heading-border-top font-weight-normal">ASK A QUESTION TO A LAWYER</h2>
                <p>Fill out the form and click "Submit" to get feedback and advice on your question!</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 pr-sm-0 mb-4">
                    <form action="#"
                          id="contact-form"
                    >
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input
                                            type="text"
                                            class="form-control p-3 rounded-0"
                                            id="name"
                                            placeholder="John Doe"
                                            required
                                    >
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="email">Email</label>
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
                                <label for="phone">Phone number</label>
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
                            <label for="message">Your question</label>
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
                                    value="Send"
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
                        <!--<li>-->
                            <!--<span class="text-uppercase">Номер телефону</span>-->
                            <!--<a style="color: #212529" href="tel:+380674398979">+38 (067) 439 89 79</a>-->
                        <!--</li>-->
                        <li>
                            <span class="text-uppercase">Social media</span>
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
                            <span class="text-uppercase">Address</span>
                            <strong>Politekhnichna street, 9</strong><br>
                            working hours:<br/> <strong>Monday - Friday<br/>from 10:00 till 18:00</strong>

                        </li>
                    </ul>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2573.4581385820634!2d24
                        .012437015709118!3d49.83384867939499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13
                        .1!3m3!1m2!1s0x473add7bbfd2a3bd%3A0x83cd65948f992e50!2sPolitekhnichna%20St%2C%209%2C%20L&#39;
                        viv%2C%20L&#39;vivs&#39;
                        ka%20oblast%2C%2079000!5e0!3m2!1sen!2sua!4v1641391871912!5m2!1sen!2sua"
                        width="100%" height="450" style="border:0; margin-top: 2rem" allowfullscreen=""
                        loading="lazy"></iframe>
            </div>

        </div>


    </section>
    <script src="/assets/js/contact-script.js"></script>

<?php include_once "../../footer.php"; ?>