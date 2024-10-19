<footer class="footer">
    <div class="container">
        <div class="footer-middle">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="widget widget-about pl-0">
                        <a href="{{assert("images/payment.png")}}" class="logo-footer">
                            <img src="{{asset("images/logo/logo-muster-dickson-white-bg.jpg")}}" alt="logo-footer" width="154" height="43" />
                        </a>
                        <div class="widget-body">
                            <p>Une entreprise dynamique depuis plus de 50 ans au service permanent du coiffeur et de l'esthéticienne,
                                qui étudie, produit et agit pour offrir un service toujours meilleur et une gamme de produits de
                                qualité supérieure. <br>
                            </p>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="widget">
                                <h4 class="widget-title">À Propos de Nous</h4>
                                <ul class="widget-body">
                                    <li>
                                        <a href="{{route('about_us')}}">À Propos de Nous</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">Contactez Nous</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="widget">
{{--                                <h4 class="widget-title">Service Client</h4>--}}
                                <ul class="widget-body">
                                    <li>
                                        <a href="{{route('hairstyle')}}">Coiffeur</a>
                                    </li>
                                    <li>
                                        <a href="{{route('beauty')}}">Beauté</a>
                                    </li>
                                    <li>
                                        <a href="{{route('hygiene-safety')}}">Hygiène Sécurité</a>
                                    </li>
                                    <li>
                                        <a href="{{route('video')}}">Vidéo</a>
                                    </li>
                                    <li>
                                        <a href="{{route('downloads')}}">Téléchargements</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="widget">
{{--                                <h4 class="widget-title">My Account</h4>--}}
                                <ul class="widget-body">
                                    <li>
                                        <p> <i class="d-icon-map"></i> N 15 rue Ennakhil cité dakhla Agadir</p>
                                    </li>
                                    <li>
                                        <p> <i class="d-icon-headphone"></i> +212 662-750030</p>
                                    </li>
                                    <li>
                                        <p> contact@muster-dikson.ma</p>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Middle -->
    <div class="container">
        <div class="footer-bottom">
            <div class="footer-left">
                <img width="90" height="100" src="{{asset('images/front/madeinitaly.png')}}">
            </div>
            <div class="footer-center">
                <p class="copyright">Muster & Dikson &copy; 2024 | <a href="#"> Conditions Générales</a> </p>
            </div>
            <div class="footer-right">
                <div class="social-links">
                    <a href="#" title="social-list" class="social-link social-facebook fab fa-facebook-f"></a>
                    <a href="https://www.linkedin.com/company/muster-e-dikson-spa" title="social-list" class="social-link social-linkedin fab fa-linkedin-in"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
