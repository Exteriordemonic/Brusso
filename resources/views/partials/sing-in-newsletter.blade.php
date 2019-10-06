<section class="sign-in-to-newsletter" data-popup>
    <div class="sign-in-to-newsletter__cell sign-in-to-newsletter__cell--img">
        <img class="sign-in-to-newsletter__img" src="@asset('images/sofa-bg.jpg')" alt="">
    </div>
    <div class="sign-in-to-newsletter__cell">
        <div class="sign-in-to-newsletter__wrapper">
            <h2 class="sign-in-to-newsletter__title title">
                <span class="bold">Join</span>
                <br>
                our Newsletter
            </h2>
            <p class="sign-in-to-newsletter__text subtitle">
              Mamy dla Was ciekawe informacje o stylu skandynawskim
            </p>
            <form class="sign-in-to-newsletter__form form" action="https://app.mailerlite.com/webforms/submit/g0m3x2" data-code="g0m3x2" method="post" target="_blank" data-sign-in-to-newsletter>
                <div class="form__input-wrapper">
                    <input required class="form__input" data-newsletter-email type="email" name="fields[email]" id="email" placeholder="email@gmail.com" data-inputmask="">
                    <button class="form__button" type="submit">
                        <span class="icon icon--plus icon--dark-line"></span>
                    </button>
                    <input type="hidden" name="ml-submit" value="1">
                </div>
                <div class="form__checkbox-wrapper">
                    <input required type="checkbox" name="newsletter_term" id="newsletter_term">
                    <label class="text text--small" for="newsletter_term">
                        Wyrażam zgodę na otrzymywanie na wskazany przeze mnie adres email informacji handlowych od Brusso
                    </label>
                </div>
                <div class="form__checkbox-wrapper">
                    <input required type="checkbox" name="newsletter_term" id="newsletter_marketing">
                    <label class="text text--small" for="newsletter_marketing">
                        Wyrażam zgodę na przetwarzanie swoich danych osobowych w celach marketingowych
                    </label>
                </div>
                <p class="form__alert form__alert--succes">
                    Dziękujemy za zapisanie się do Newsslettera
                </p>
                <p class="form__alert form__alert--fail">
                  Coś poszło nie tak, skontaktuj się z nami pod adresem
                  <a href="mailto:newsletter@brusso.pl">
                    newsletter@brusso.pl
                  </a>
                </p>
            </form>
            <button class="sign-in-to-newsletter__button text bold" data-toggle-popup>
              ←  powrót
            </button>
            <input type="hidden" name="ml-submit" value="1">
        </div>
    </div>
</section>


