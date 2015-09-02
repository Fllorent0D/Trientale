<?php Use App\Helpers\Slider; ?>
    <section id="feature_slider" class="lol">
        <!--
            Each slide is composed by <img> and .info
            - .info's position is customized with css in index.css
            - each <img> parallax effect is declared by the following params inside its class:

            example: class="asset left-472 sp600 t120 z3"
            left-472 means left: -472px from the center
            sp600 is speed transition
            t120 is top to 120px
            z3 is z-index to 3
            Note: Maintain this order of params

            For the backgrounds, you can combine from the bgs folder :D
        -->
        <article class="slide" id="showcasing" style="background: url('<?= Slider::getUrl('trientalis.jpg'); ?>') repeat-x top center;">
            <div class="info">
                <h2>Bienvenue sur latrientale-cnb.be</h2>
                <img class="asset left-100 sp900 t-50 z3" src="<?= Slider::getUrl('logo.png'); ?>" />
                <a href="">Visite</a>
            </div>
        </article>
        <article class="slide" id="ideas" style="background: url('<?= Slider::getUrl('slider4.jpg'); ?>') repeat-x top center;">
            <div class="info">
                <h2>Formation de Guides-Nature® des Cercles des Naturalistes de Belgique</h2>
                <img class="asset left-75 sp600 t100 z2" src="<?= Slider::getUrl('CNB.png'); ?>" />
            </div>
        </article>

    </section>

<div class="container">
    <h2>Qui sommes-nous?</h2>
    <p>La Trientale est une section des Cercles des Naturalistes de Belgique (CNB) dont le siège est à Vierves-sur-Viroin. Son champ d’activité, principalement le Plateau des tailles et ses environs, n’exclut nullement la découverte d’autres régions, de Torgny à Visé ou des Hautes Fagnes à la Calestienne.</p>
    <p>Son objectif est la sensibilisation au monde de la nature, à sa découverte et à sa protection (arbres de la forêt, fleurs de la campagne, oiseaux du bocage, monde mystérieux de la mare, réserves naturelles, géologie). Ses activités, pratiquement une par semaine, sont animées par plus de trente guides bénévoles, enthousiastes et compétents : balades naturalistes, week-ends découverte, conférences, expositions, gestions de réserves naturelles…</p>
    <p>La Trientale n’est pas une société « savante » qui ne s’adresserait qu’à des « spécialistes » ; ce n’est absolument pas son objectif, même si elle compte parmi ses membres des personnes ressources de grande qualité qui n’hésitent pas à faire bénéficier le groupe de leurs connaissances. Il ne faudrait pas s’imaginer qu’elle se limite à des promenades dans notre beau pays. La Trientale n’est pas non plus un club pour amateurs de beaux panoramas. Toutefois la découverte de ceux-ci, leur évolution, notre patrimoine bâti, grand ou petit, contribue également à l’éducation à la nature.</p>
    <p>La Trientale n’est pas un cercle refermé uniquement sur ses centres d’intérêt. Régulièrement des activités sont organisées en collaboration avec d’autres groupements qui mettent en valeur la nature et en prônent la protection : Aves, Natagora, le Genévrier, le Parc Naturel des Deux Ourthes, le projet LIFE « Plateau des Tailles »… Elle prend aussi une part active à la gestion des Réserves naturelles Ardenne et Gaume en Ardenne septentrionale.</p>
    <p>Chacun, qu’il soit naturaliste érudit ou débutant, peut donc trouver matière à intérêt dans les activités de la Trientale et bénéficier de l’expérience d’une organisation rôdée maintenant depuis plus de 25 ans.</p>
</div>
<hr>
<div class="container">
    <h2>Calendrier</h2>
    <section class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <h4><?= \Core\Helpers\Date::dateToFr(date("Y").'-'.date("m").'-1', "%B %Y") ?> </h4>
        </div>

        <section>
        <?= \Core\Helpers\Calendar::drawCalendar(date("m"), date("Y"), $calendrier); ?>
        </section>
    </section>
</div>