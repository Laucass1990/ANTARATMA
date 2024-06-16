<footer class="bg-light text-center text-lg-start mt-auto ">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Enlaces</h5>
                <ul class="list-unstyled mb-0">
                    <li><a href="{{ route('home') }}" class="text-dark">Inicio</a></li>
                    <li><a href="{{ route('about') }}" class="text-dark">Sobre Nosotros</a></li>
                    <li><a href="{{ route('contact') }}" class="text-dark">Contacto</a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Contacto</h5>
                <ul class="list-unstyled mb-0">
                    <li><a href="mailto:info@horoscopo.com" class="text-dark">info@horoscopo.com</a></li>
                    <li><a href="tel:+123456789" class="text-dark">+1 234 567 89</a></li>
                </ul>
                <div class="mt-4">
                    <h5 class="text-uppercase">Síguenos</h5>
                    <a href="https://www.instagram.com" target="_blank">
                        <img src="{{ asset('instagram.png') }}" alt="Instagram" style="width:30px; margin-right: 10px;">
                    </a>
                    <a href="https://www.facebook.com" target="_blank">
                        <img src="{{ asset('facebook.png') }}" alt="Facebook" style="width:30px; margin-right: 10px;">
                    </a>
                    <a href="https://www.twitter.com" target="_blank">
                        <img src="{{ asset('twitter.png') }}" alt="Twitter" style="width:30px; margin-right: 10px;">
                    </a>
                    <a href="https://www.youtube.com" target="_blank">
                        <img src="{{ asset('youtube.png') }}" alt="YouTube" style="width:30px;">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2024 ANTARATMA. Todos los derechos reservados.
    </div>
</footer>
