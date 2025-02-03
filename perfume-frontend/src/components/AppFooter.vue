<script>
export default {
    name: 'AppFooter',
};
</script>

<template>
    <footer class="bg-dark text-white py-5  container-fluid ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="logo-part py-3">
                                <h5 class=" fw-bolder logo-el">The Perfume</h5>
                                <p>Roma, Via Mottola n6</p>
                                
                            </div>
                        </div>
                        <div class="col-md-6 px-4">
                            <h6> About Company</h6>
                            
                            <a href="#" class="btn-footer"> More Info </a><br>
                            <a href="#" class="btn-footer"> Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 px-4">
                            <h6> Help us</h6>
                            <div class="row ">
                                <div class="col-md-6">
                                    <ul>
                                        <li> <a href="#"> Home</a> </li>
                                        <li> <a href="#"> About</a> </li>
                                        <li> <a href="#"> Service</a> </li>
                                        <li> <a href="#"> Team</a> </li>
                                        <li> <a href="#"> Help</a> </li>
                                        <li> <a href="#"> Contact</a> </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 px-4">
                                    <ul>
                                        <li> <a href="#"> Cab Faciliy</a> </li>
                                        <li> <a href="#"> Fax</a> </li>
                                        <li> <a href="#"> Terms</a> </li>
                                        <li> <a href="#"> Policy</a> </li>
                                        <li> <a href="#"> Refunds</a> </li>
                                        <li> <a href="#"> Paypal</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <h6> Newsletter</h6>
                            <div class="social">
                                <a href="#"><font-awesome-icon class="my-icon" icon="fa-brands fa-facebook" /></a>
                                <a href="#"><font-awesome-icon class="my-icon" icon="fa-brands fa-instagram" /></a>
                            </div>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>


<style scoped>
footer h6 {
    font-family: 'Playfair Display', serif;
    margin-bottom: 40px;
    position: relative;
}

footer h6:after {
    position: absolute;
    content: "";
    background: grey;
    width: 12%;
    height: 1px;
    left: 0;
    bottom: -20px;
}

.btn-footer {
    color: grey;

    text-decoration: none;
    border: 1px solid;
    border-radius: 43px;
    font-size: 13px;
    padding: 7px 30px;
    line-height: 47px;
}

.btn-footer:hover {

    text-decoration: none;

}

.form-footer input[type="text"] {
    border: none;
    border-radius: 16px 0 0 16px;
    outline: none;
    padding-left: 10px;

}

::placeholder {
    font-size: 10px;
    padding-left: 10px;
    font-style: italic;
}

.form-footer input[type="button"] {
    border: none;
    background: #232323;
    margin-left: -5px;
    color: #fff;
    outline: none;
    border-radius: 0 16px 16px 0;
    padding: 2px 12px;
}

.social .my-icon  {
    color: grey;
    font-size: 22px;
    padding: 10px 15px;
    background: #3c3c3c;
}

footer ul li {
    list-style: none;
    display: block;
}

footer ul {
    padding-left: 0;
}

footer ul li a {
    text-decoration: none;
    color: grey;
    text-decoration: none;
}

a:hover {
    text-decoration: none;
    color: #f5f5f5 !important;

}

.logo-part {
    border-right: 1px solid grey;
    height: 100%;
}

.logo-el{
    font-size: 30px;
}
</style>