<div class="sidebar">
    <ul>
        <li>
            <div class="side">
                <i class="bi bi-card-checklist"></i>
                <a href="#" data-href="{{ route('candidature.index')}}">Les candidatures</a>
            </div>
        </li>

        <li>
            <div class="side">
                <i class="bi bi-file-earmark-fill"></i>
                <a href="#" data-href="#">Cand. spontannées</a>
            </div>
        </li>

        <li>
            <div class="side">
                <i class="bi bi-view-list"></i>
                <a href="#" data-href="{{ route('offre.index') }}">Les offres</a>
            </div>
        </li>
        <hr>
        <li>
            <div class="side">
                <i class="bi bi-sliders"></i>
                <a href="#" data-href="{{ route('all.postes') }}">Gérer les postes</a>
            </div>
        </li>

        <li>
            <div class="side">
                <i class="bi bi-sliders2"></i>
                <a href="#" data-href="{{ route('all.contrats') }}">Gérer les contrats</a>
            </div>
        </li>

        <li>
            <div class="side">
                <i class="bi bi-sliders2-vertical"></i>
                <a href="#" data-href="{{ route('all.process') }}">Gérer les Process</a>
            </div>
        </li>
        <hr>
        <li>
            <div class="side">
                <i class="bi bi-person-fill"></i>
                <a href="#" data-href="#">Mon compte ({{ Auth::user()->name }})</a>
            </div>
        </li>

        <li>
            <div class="side">
                <i class="bi bi-box-arrow-left"></i>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Déconnexion') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
        
            </div>
        </li>
    </ul>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var sidebar = document.querySelector('.sidebar');
        
        sidebar.addEventListener('click', function(event) {
            if (event.target.tagName === 'A') {
                event.preventDefault(); // Empêcher le rechargement de la page

                var url = event.target.getAttribute('data-href'); // Obtenir l'URL depuis l'attribut data-href
                if (url) {
                    window.location.href = url; // Redirection vers l'URL désirée
                }
            }
        });

        var sidebarItems = document.querySelectorAll('.sidebar li');

        sidebarItems.forEach(function(item) {
            item.addEventListener('click', function() {
                // Supprimer la classe active de tous les éléments de la sidebar
                sidebarItems.forEach(function(item) {
                    item.classList.remove('active');
                });

                // Ajouter la classe active à l'élément cliqué
                this.classList.add('active');
            });
        });
    });


</script>